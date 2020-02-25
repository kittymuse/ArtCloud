<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Jobs\Api\SaveLastTokenJob;
use App\Enums\{UserRole, UserIsTourist};
use App\Http\Requests\Api\AuthorizationRequest;

class AuthorizationController extends Controller
{
    // 登录
    public function login(AuthorizationRequest $request)
    {
    	$verifyData = \Cache::get($request->verification_key);
        $phone = $verifyData['phone'];

       	if (!$verifyData) {
           return $this->failed('验证码已失效,请重新获取', 401);
        }

        if (!hash_equals($verifyData['code'], $request->verification_code) || !hash_equals($phone, $request->phone)) {
            return $this->failed('验证码错误,请重新输入', 401);
        }

        $user = User::where('phone', $phone)->first();
        if(!$user){
            // 账号不存在,注册为游客
            $user = User::create([
                'role' => $request->role,
                'phone' => $phone,
                'name' => substr_replace($phone, '****', 3, 4),
                'is_tourist' => UserIsTourist::YES
            ]);
        }else{
            if ($user->role != $request->role) {
                return $this->failed('登录失败', 401);
            }
        }        
        
        // 单设备登录
        if ($user->last_token && auth('api')->check()) {
        	try {
        		auth('api')->setToken($user->last_token)->invalidate();
        	} catch (TokenExpiredException $e) {
        		//因为让一个过期的token再失效，会抛出异常，所以我们捕捉异常，不需要做任何处理
        	}
        }

        // 返回JWT Token
        $token = auth('api')->login($user);
        
        // 使用异步队列保存Token
        SaveLastTokenJob::dispatch($user, $token);

        // 清除验证码缓存
        \Cache::forget($request->verification_key);
        
        return $this->success(['token' => 'Bearer ' . $token]);
    }

    // 用户退出
	public function logout(){
	    auth('api')->logout();
	    return $this->success('退出成功...');
	}
}