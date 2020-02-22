<?php

namespace App\Http\Requests\Api;

use App\Enums\Image;
use BenSampo\Enum\Rules\EnumValue;
use Illuminate\Foundation\Http\FormRequest;

class ImageRequest extends FormRequest
{
    public function rules()
    {
        $rules = [
            'type' => [
                'required',
                new EnumValue(Image::class, false)
            ]
        ];

        if ($this->type == Image::USERS_AVATAR) {
            $rules['image'] = 'required|mimes:jpeg,png|dimensions:min_width=200,min_height=200';
        } else {
            $rules['image'] = 'required|mimes:jpeg,png';
        }
        return $rules;
    }

    public function messages()
    {
        return [
              'image.dimensions' => '图片的清晰度不够，宽和高需要 200px 以上',
        ];
    }
}
