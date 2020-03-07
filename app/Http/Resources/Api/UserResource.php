<?php

namespace App\Http\Resources\Api;

use Illuminate\Support\Facades\Storage;
use App\Enums\{UserRole, UserSex, UserIsTourist, Image};
use Illuminate\Http\Resources\Json\JsonResource;

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
        return [
            'avatar' => $this->avatar ? Storage::url($path.'/'.$this->avatar) : asset("storage/$path/default_avatar.png"),
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
                    'value' => ($this->role == UserRole::TEACHER) ?  $this->school ?? '未设置' : $this->studio_id
                ]),
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
}