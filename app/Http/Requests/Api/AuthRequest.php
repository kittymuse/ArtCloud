<?php

namespace App\Http\Requests\Api;

use App\Enums\UserRole;
use BenSampo\Enum\Rules\EnumValue;

class AuthRequest extends FormRequest
{
    public function rules()
    {
        return [
            'role' => [
                'required',
                new EnumValue(UserRole::class, false)
            ],
            'phone' => [
                'required',
                'regex:/^((13[0-9])|(14[5,7])|(15[0-3,5-9])|(17[0,3,5-8])|(18[0-9])|166|198|199)\d{8}$/'
            ],
            'verification_key' => 'required|string',
            'verification_code' => 'required|string',
        ];
    }

    public function attributes()
    {
        return [
            'verification_key' => '短信验证码 key',
            'verification_code' => '短信验证码',
        ];
    }
}