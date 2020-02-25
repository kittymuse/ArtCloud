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
		Route::post('verificationCodes', 'VerificationCodeController@send')->name('verificationCodes.send');
        // 登录
        Route::post('authorizations', 'AuthorizationController@login')->name('authorizations.login');
	});

	Route::middleware('throttle:' . config('api.rate_limits.access'))->group(function () {
        // 游客可以访问的接口

        // 登录后可以访问的接口
        Route::middleware('api.refresh')->group(function() {
            // 我的信息
            Route::get('user', 'UserController@info')->name('user.info');
            // 修改我的信息
            Route::patch('user', 'UserController@update')->name('user.update');
            // 上传图片
            Route::post('images', 'ImageController@store')->name('images.store');
            // 新建收货地址
            Route::post('user/addresses', 'UserAddressesController@store')->name('user.addresses.store');
            // 修改收货地址
            Route::patch('user/addresses', 'UserAddressesController@update')->name('user.addresses.update');
            // 删除收货地址
            Route::delete('user/addresses', 'UserAddressesController@destroy')->name('user.addresses.destroy');
            // 退出
            Route::delete('authorizations', 'AuthorizationController@logout')->name('authorizations.logout');
        });
	});
});