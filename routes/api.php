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
		Route::post('/verificationCodes', 'UserController@verificationCodes')->name('users.verificationCodes');
		// 登录
    	Route::post('/login','UserController@login')->name('users.login');
	});

	Route::middleware('throttle:' . config('api.rate_limits.access'))->group(function () {
        // 游客可以访问的接口

        // 登录后可以访问的接口
        Route::middleware('api.refresh')->group(function() {
            // 我的信息
            Route::get('/users/info', 'UserController@info')->name('users.info');
            // 退出
            Route::get('/logout','UserController@logout')->name('users.logout');
        });
	});
});