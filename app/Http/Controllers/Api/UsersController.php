<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\UserRequest;
use App\Http\Resources\Api\UserResource;

class UsersController extends Controller
{
	// 我的信息
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
