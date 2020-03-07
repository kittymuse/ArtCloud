<?php

namespace App\Http\Requests\Api;

class RegionRequest extends FormRequest
{
    public function rules()
    {
        return [
            'parent_id' => 'required|exists:regions'
        ];
    }
}
