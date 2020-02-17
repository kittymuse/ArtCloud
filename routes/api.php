<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::namespace('Api')->prefix('v1')->middleware('cors')->group(function () {
	Route::middleware('throttle:' . config('api.rate_limits.sign'))->group(function () {
		// 短信验证码
		Route::post('verificationCodes', 'VerificationCodesController@send')->name('verificationCodes.send');
        // 登录
        Route::post('authorizations', 'AuthorizationsController@login')->name('authorizations.login');
	});

	Route::middleware('throttle:' . config('api.rate_limits.access'))->group(function () {
        // 游客可以访问的接口

        // 登录后可以访问的接口
        Route::middleware('api.refresh')->group(function() {
            // 我的信息
            Route::get('user', 'UsersController@info')->name('user.info');
            // 上传图片
            Route::post('images', 'ImagesController@store')->name('images.store');
            // 修改我的信息
            Route::patch('user', 'UsersController@update')->name('user.update');
            // 退出
            Route::delete('authorizations', 'AuthorizationsController@logout')->name('authorizations.logout');
        });
	});
});