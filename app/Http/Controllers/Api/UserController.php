<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Requests\Api\UserRequest;
use App\Http\Resources\Api\UserResource;

class UserController extends Controller
{
    // 我的
	public function me()
    {
        $user = auth('api')->user();
        return $this->success((new UserResource($user))->showMeFields());
    }
    
    // 当前登录用户信息
    public function info()
    {
        $user = auth('api')->user();
        return $this->success(new UserResource($user));
    }

    // 修改我的信息
    public function update(UserRequest $request)
    {
        $user = auth('api')->user();
        
        $attributes = $request->only(['avatar', 'name', 'sex', 'school']);

        $user->update($attributes);

        return $this->success(new UserResource($user));
    }
}
