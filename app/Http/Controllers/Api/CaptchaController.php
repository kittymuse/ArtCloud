<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Str;
use Overtrue\EasySms\EasySms;
use App\Http\Requests\Api\CaptchaRequest;

class CaptchaController extends Controller
{
    // 发送验证码
	public function sentSms(CaptchaRequest $request, EasySms $easySms)
    {
        $phone = $request->phone;

        // 测试环境下发送测试验证码，节约短信费用
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
                abort(500, $message ?: '短信发送异常');
	        }
	    }

        $key = 'verificationCode_'.Str::random(15);
        $expiredAt = now()->addMinutes(5);
        // 缓存验证码 5 分钟过期。
        \Cache::put($key, ['phone' => $phone, 'code' => $code], $expiredAt);

        return response()->json([
            'key' => $key,
            'expired_at' => $expiredAt->toDateTimeString(),
        ])->setStatusCode(201);
    }
}
