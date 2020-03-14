<?php

namespace App\Observers;

use App\Models\UserAddress;
use App\Enums\UserAddressIsDefault;

class UserAddressObserver
{
	public function saved(UserAddress $userAddress)
  {
    // 当设置数据为默认地址时 取消其它默认地址
  	if($userAddress->is_default == UserAddressIsDefault::YES){
      $userAddress::where([
        ['user_id', $userAddress->user_id],
        ['id', '!=', $userAddress->id]
      ])->update(['is_default' => UserAddressIsDefault::NOT_YET]);
    }
  }
}
