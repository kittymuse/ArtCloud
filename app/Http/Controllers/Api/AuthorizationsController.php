<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\Api\AuthorizationRequest;

class AuthorizationsController extends Controller
{
	// 登录
    public function store(AuthorizationRequest $request)
    {
    	$verifyData = \Cache::get($request->verification_key);

       	if (!$verifyData) {
           abort(403, '验证码已失效,请重新获取');
        }

        if (!hash_equals($verifyData['code'], $request->verification_code) || !hash_equals($verifyData['phone'], $request->phone)) {
            // 返回401
            throw new AuthenticationException('验证码错误,请重新输入');
        }

        // 没有用户，默认创建一个散户
        $user = User::where('phone', $verifyData['phone'])->first();
        if(!$user){
            $user = User::create([
                'phone' => $verifyData['phone'],
                'name' => substr_replace($verifyData['phone'], '****', 3, 4),
            ]);
        }

        // 清除验证码缓存
        \Cache::forget($request->verification_key);

        //返回JWT Token
        $token= auth('api')->login($user);
        return $this->respondWithToken($token)->setStatusCode(201);
    }

    // 刷新Token
    public function update()
    {
        $token = auth('api')->refresh();
        return $this->respondWithToken($token);
    }

    // 删除Token
    public function destroy()
    {
        auth('api')->logout();
        return response(null, 204);
    }

    //封装Token返回信息
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 60
        ]);
    }
}
