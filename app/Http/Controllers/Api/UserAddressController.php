<?php

namespace App\Http\Controllers\Api;

use App\Models\UserAddress;
use Illuminate\Http\Request;
use App\Http\Requests\Api\UserAddressRequest;
use App\Http\Resources\Api\UserAddressResource;

class UserAddressController extends Controller
{
    // 收货地址列表
    public function index(Request $request, UserAddress $userAddress)
    {
        UserAddressResource::wrap('data');
        
        return $this->success(UserAddressResource::collection(
            $userAddress::where('user_id', $request->user()->id)->recent()->get()
        ));
    }

    // 新建收货地址
    public function store(UserAddressRequest $request, UserAddress $userAddress)
    {
        $userAddress->fill($request->all());
        $userAddress->user_id = $request->user()->id;
        $userAddress->save();
        return $this->success(new UserAddressResource($userAddress));
    }

    // 收货地址详情
    public function show(UserAddress $userAddress)
    {
        return $this->success(new UserAddressResource($userAddress));
    }

    // 修改收货地址
    public function update(UserAddressRequest $request, UserAddress $userAddress)
    {
        $userAddress->user_id = $request->user()->id;
        $userAddress->update($request->all());
        return $this->success(new UserAddressResource($userAddress));
    }

    // 删除收货地址
    public function destroy(UserAddress $userAddress)
    {
        $userAddress->delete();
        
        return $this->setStatusCode(204)->success(null);
    }
}
