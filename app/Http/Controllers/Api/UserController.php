<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Support\Str;
use Overtrue\EasySms\EasySms;
use App\Http\Resources\Api\UserResource;
use App\Http\Requests\Api\AuthorizationRequest;
use App\Http\Requests\Api\VerificationCodeRequest;

class UserController extends Controller
{
	// 短信验证码
	public function verificationCodes(VerificationCodeRequest $request, EasySms $easySms)
    {
        $phone = $request->phone;

        //测试环境下发送测试验证码，节约短信费用
        if (!app()->environment('production')) {
            $code = '1234';
        } else {
	        // 生成4位随机数，左侧补0
	        $code = str_pad(random_int(1, 9999), 4, 0, STR_PAD_LEFT);
	        try {
	            $result = $easySms->send($phone, [
	                'template' => config('easysms.gateways.aliyun.templates.register'),
	                'data' => [
	                    'code' => $code
	                ],
	            ]);
	        } catch (\Overtrue\EasySms\Exceptions\NoGatewayAvailableException $exception) {
	            $message = $exception->getException('aliyun')->getMessage();
                return $this->failed($message ?: '短信发送异常', 500);
	        }
	    }

        $key = 'verificationCode_'.Str::random(15);
        $expiredAt = now()->addMinutes(5);
        // 缓存验证码 5 分钟过期。
        \Cache::put($key, ['phone' => $phone, 'code' => $code], $expiredAt);

        return $this->setStatusCode(201)->success([
            'key' => $key,
            'expired_at' => $expiredAt->toDateTimeString(),
        ]);
    }

	// 登录
    public function login(AuthorizationRequest $request)
    {
    	$verifyData = \Cache::get($request->verification_key);

       	if (!$verifyData) {
           return $this->failed('验证码已失效,请重新获取', 401);
        }

        if (!hash_equals($verifyData['code'], $request->verification_code) || !hash_equals($verifyData['phone'], $request->phone)) {
            return $this->failed('验证码错误,请重新输入', 401);
        }

        // 没有用户，默认创建一个散户
        $user = User::where('phone', $verifyData['phone'])->first();
        if(!$user){
            $user = User::create([
                'phone' => $verifyData['phone'],
                'name' => substr_replace($verifyData['phone'], '****', 3, 4),
            ]);
        }
        
        // 单设备登录
        if ($user->last_token && auth('api')->check()) {
        	try {
        		auth('api')->setToken($user->last_token)->invalidate();
        	} catch (TokenExpiredException $e) {
        		//因为让一个过期的token再失效，会抛出异常，所以我们捕捉异常，不需要做任何处理
        	}
        }

        //返回JWT Token
        $token = auth('api')->login($user);
        $user->last_token = $token;
        $user->save();

        // 清除验证码缓存
        \Cache::forget($request->verification_key);
        
        return $this->success(['token' => 'Bearer ' . $token]);
    }

	//我的信息
	public function info()
    {
    	$user = auth('api')->user();
    	return $this->success(new UserResource($user));
    }

    //用户退出
	public function logout(){
	    auth('api')->logout();
	    return $this->success('退出成功...');
	}
}
