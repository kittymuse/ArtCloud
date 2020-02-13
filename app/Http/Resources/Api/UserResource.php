<?php

namespace App\Http\Resources\Api;

use App\Enums\UserSex;
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
            'id' => $this->id,
            'name' => $this->name,
            'avatar' => $this->avatar,
            'sex' => UserSex::getDescription($this->sex),
            'created_at'=>(string)$this->created_at,
            'updated_at'=>(string)$this->updated_at
        ];
    }
}