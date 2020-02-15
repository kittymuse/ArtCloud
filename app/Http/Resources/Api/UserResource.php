<?php

namespace App\Http\Resources\Api;

use App\Enums\{UserRole, UserSex, UserIsTourist};
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
        return [
            'avatar' => $this->avatar,
            'name' => $this->name,
            'sex' => UserSex::getDescription($this->sex),
            'role' => $this->getRoleName(),
            'school' => $this->getSchoolName()
        ];
    }


    protected function getRoleName()
    {
        return ($this->is_tourist == UserIsTourist::NOT_YET) ? UserRole::getDescription($this->role) : UserIsTourist::getDescription(UserIsTourist::YES);
    }

    protected function getSchoolName()
    {
        if($this->is_tourist == UserIsTourist::NOT_YET){
            $data = [
                'display' => 'show',
                'edit' => ($this->role == UserRole::TEACHER) ? true : false,
                'value' => ($this->role == UserRole::TEACHER) ?  $this->school ?? '未设置' : $this->studio_id
            ];
        }else{
            $data = [
                'display' => 'hide'
            ];
        }
        return $data;
    }
}