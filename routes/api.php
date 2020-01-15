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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('v1')->namespace('Api')->name('api.v1.')->group(function() {
	Route::middleware('throttle:' . config('api.rate_limits.sign'))->group(function(){
		//短信验证码
		Route::post('verificationCodes', 'VerificationCodesController@store')->name('verificationCodes.store');
        // 登录
    	Route::post('authorizations', 'AuthorizationsController@store')
        ->name('api.authorizations.store');
	});

	Route::middleware('throttle:' . config('api.rate_limits.access'))->group(function () {
		// 游客可以访问的接口

        // 登录后可以访问的接口
        Route::middleware('auth:api')->group(function() {
            // 当前登录用户信息
            Route::get('user', 'UsersController@me')
                ->name('user.show');
            // 上传图片
            Route::post('images', 'ImagesController@store')
                ->name('images.store');
            // 编辑登录用户信息
            Route::patch('user', 'UsersController@update')
                ->name('user.update');
        });
    });
});