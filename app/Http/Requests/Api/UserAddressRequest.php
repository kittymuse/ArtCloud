<?php

namespace App\Http\Requests\Api;

use BenSampo\Enum\Rules\EnumValue;
use App\Enums\UserAddressIsDefault;
use Illuminate\Foundation\Http\FormRequest;

class UserAddressRequest extends FormRequest
{
    public function rules()
    {
        switch($this->method())
        {
            case 'POST' || 'PATCH':
            {
                return [
                    'consignee' => [
                        'required',
                        'regex:/^[\x{4e00}-\x{9fa5}A-Za-z0-9-_]+$/u'
                    ],
                    'phone' => [
                        'required',
                        'regex:/^((13[0-9])|(14[5,7])|(15[0-3,5-9])|(17[0,3,5-8])|(18[0-9])|166|198|199)\d{8}$/'
                    ],
                    'regions' => 'required',
                    'detail' => 'required',
                    'is_default' => [
                        'required',
                        new EnumValue(UserAddressIsDefault::class, false)
                    ]
                ];
            }
        }
    }
}
