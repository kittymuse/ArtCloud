<?php

namespace App\Http\Resources\Api;

use Dzcyr\Region\Region;
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
        $regions = explode('/', $this->regions);
        return [
            'id' => $this->id,
            'consignee' => $this->consignee,
            'phone' => $this->phone,
            'regions' => Region::getName($regions[0],$regions[1],$regions[2],($regions[3]) ?? 0),
            'detail' => $this->detail
        ];
    }
}
