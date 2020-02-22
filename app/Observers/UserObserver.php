<?php

namespace App\Observers;

use App\Enums\Image;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

class UserObserver
{
    public function updated(User $user)
    {
        // 修改用户头像时删除老头像
    	$originalAvatar = $user->getOriginal('avatar');
        if(!empty($originalAvatar)){
            if($user->avatar != $originalAvatar){
                Storage::delete(Image::getDescription(Image::USERS_AVATAR).'/'.$originalAvatar);
            }
        }
    }
}