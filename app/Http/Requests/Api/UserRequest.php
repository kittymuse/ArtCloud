<?php

namespace App\Http\Requests\Api;

use App\Enums\UserSex;
use BenSampo\Enum\Rules\EnumValue;

class UserRequest extends FormRequest
{
    public function rules()
    {
        switch($this->method()) {
            case 'PATCH':
                return [
                    'avatar' => 'filled',
                    'name' => [
                        'filled'
                        'regex:/^[\x{4e00}-\x{9fa5}A-Za-z0-9-_]+$/u'
                    ],
                    'sex' => [
                        'filled',
                        new EnumValue(UserSex::class, false)
                    ],
                    'school' => [
                        'filled'
                        'regex:/^[\x{4e00}-\x{9fa5}A-Za-z0-9-_]+$/u'
                    ],
                ];
                break;
        }
    }

    public function messages()
    {
        return [
            'name.regex' => '昵称只支持中英文、数字、横杆和下划线。',
            'school.regex' => '院校名称只支持中英文、数字、横杆和下划线。'
        ];
    }
}