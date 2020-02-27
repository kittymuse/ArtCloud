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

		// 发送手机验证码
		Route::post('captcha/sms', 'CaptchaController@sentSms');
        // 手机号登录
        Route::post('login', 'AuthController@login');
        // 退出
        Route::delete('logout', 'AuthController@logout');

        // 登录后可以访问的接口
        Route::middleware('auth:api')->group(function() {
            // 我的信息
            Route::get('user', 'UserController@info');
            // 修改我的信息
            Route::patch('user', 'UserController@update');
            // 上传图片
            Route::post('images', 'ImageController@store');
            // 新建收货地址
            Route::post('user/addresses', 'UserAddressesController@store');
            // 修改收货地址
            Route::patch('user/addresses', 'UserAddressesController@update');
            // 删除收货地址
            Route::delete('user/addresses', 'UserAddressesController@destroy');
            
        });
});