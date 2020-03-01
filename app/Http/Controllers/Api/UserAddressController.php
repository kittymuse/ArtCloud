<?php

namespace App\Http\Controllers\Api;

use App\Models\UserAddress;
use App\Http\Requests\Api\UserAddressRequest;

class UserAddressController extends Controller
{
    public function store(UserAddressRequest $request, UserAddress $userAddress)
    {
    	echo '123';
    	exit;
        $userAddress->fill($request->all());
        $userAddress->user_id = $request->user()->id;
        $userAddress->save();

        return new UserAddressResource($userAddress);
    }
}
