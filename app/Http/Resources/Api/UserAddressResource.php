<?php

namespace App\Http\Resources\Api;


use Illuminate\Http\Resources\Json\JsonResource;

class UserAddressResource extends JsonResource
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
            'consignee' => $this->consignee,
            'phone' => $this->phone,
            'regions' => getRegionsName($this->regions),
            'detail' => $this->detail,
            'is_default' => $this->is_default
        ];
    }
}
