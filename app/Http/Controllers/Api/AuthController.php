<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Http\Requests\Api\AuthRequest;
use App\Enums\{UserRole, UserIsTourist};
use Illuminate\Auth\AuthenticationException;
class AuthController extends Controller
{
    // 登录
    public function login(AuthRequest $request)
    {
    	$verifyData = \Cache::get($request->verification_key);

       	if (!$verifyData) {
            return $this->failed('验证码已失效', 403);
        }

        $phone = $verifyData['phone'];

        if (!hash_equals($verifyData['code'], $request->verification_code) || !hash_equals($phone, $request->phone)) {
            // 返回401
            throw new AuthenticationException('验证码错误');
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
                return $this->failed('登录失败');
            }
        }

        // 返回JWT Token
        $token = auth('api')->login($user);

        // 清除验证码缓存
        \Cache::forget($request->verification_key);
        
        return $this->setStatusCode(201)->success($this->respondWithToken($token));
    }

    // 退出
    public function logout()
    {
        auth('api')->logout();
        return $this->setStatusCode(204)->success(null);
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 60
        ]);
    }
}