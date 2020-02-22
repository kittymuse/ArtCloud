<?php

namespace App\Http\Controllers\Api;

use App\Enums\Image;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Api\ImageRequest;

class ImagesController extends Controller
{
	// 上传图片
    public function store(ImageRequest $request)
    {
    	$path = Image::getDescription($request->type);
		$url = Storage::put($path, $request->image);
        return $this->success([
        	'file_name' => str_replace($path.'/', '', $url),
        	'url' => Storage::url($url)
        ]);
    }
}