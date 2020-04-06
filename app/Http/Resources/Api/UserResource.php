<?php

namespace App\Http\Resources\Api;

use App\Models\UserAddress; 
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Enums\{UserRole, UserSex, UserIsTourist, UserAddressIsDefault, Image};

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $path = Image::getDescription(Image::USERS_AVATAR);
        $process = 'image/auto-orient,1/resize,m_fill,w_200,h_200/quality,q_90';
        return [
            'avatar' => $this->avatar ? Storage::signUrl($path.'/'.$this->avatar, 3600, ['x-oss-process' => $process]) : asset("storage/$path/default_avatar.png"),
            'name' => $this->name,
            'role' => $this->getRoleName(),
            
            $this->mergeWhen($this->showMeFields, [
                'activation' => '未激活',
                'member' => '非会员',
            ]),

            $this->mergeWhen(!$this->showMeFields, [
                'sex' => UserSex::getDescription($this->sex),
                'school' => $this->when($this->is_tourist == UserIsTourist::NOT_YET, [
                    'edit' => ($this->role == UserRole::TEACHER) ? true : false,
                    'value' => ($this->role == UserRole::TEACHER) ?  $this->school ?? '未设置' : $this->studio_id ?? '未设置'
                ]),
                'userAddress' => $this->getUserAddressName(),
            ]),
            
        ];
    }

    public function showMeFields()
    {
        $this->showMeFields = true;

        return $this;
    }

    protected function getRoleName()
    {
        return ($this->is_tourist == UserIsTourist::NOT_YET) ? UserRole::getDescription($this->role) : UserIsTourist::getDescription(UserIsTourist::YES);
    }

    protected function getUserAddressName()
    {
        // 判断是否有默认地址
        $userAddress = userAddress::where([
            ['user_id', $this->id],
            ['is_default', UserAddressIsDefault::YES]
        ])->first();
        if(!$userAddress){
            $userAddress = userAddress::where('user_id', $this->id)->recent()->first();
        }
        return ($userAddress) ? getRegionsName($userAddress->regions) . $userAddress->detail : '未设置';
    }
}