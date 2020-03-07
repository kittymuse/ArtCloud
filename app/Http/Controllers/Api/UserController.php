<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Requests\Api\UserRequest;
use App\Http\Resources\Api\UserResource;

class UserController extends Controller
{
    // 我的
	public function me(Request $request)
    {
    	return (new UserResource($request->user()))->showMeFields();
    }
    
    // 当前登录用户信息
    public function info(Request $request)
    {
        return new UserResource($request->user());
    }

    // 修改我的信息
    public function update(UserRequest $request)
    {
        $user = $request->user();
        
        $attributes = $request->only(['avatar', 'name', 'sex', 'school']);

        $user->update($attributes);

        return new UserResource($user);
    }
}
