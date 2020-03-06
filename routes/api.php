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

/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/

Route::prefix('v1')->namespace('Api')->name('api.v1.')->group(function () {
	
   	Route::middleware('throttle:' . config('api.rate_limits.sign'))->group(function () {
        // 发送验证码
		Route::post('captcha/sms', 'CaptchaController@sentSms');
		// 登录
	    Route::post('login', 'AuthController@login');
    	// 退出
    	Route::delete('logout', 'AuthController@logout');
    });

	Route::middleware('throttle:' . config('api.rate_limits.access'))->group(function () {
        // 游客可以访问的接口

        // 登录后可以访问的接口
        Route::middleware(['auth:api', 'refresh.token'])->group(function() {
            
        });
    });
});