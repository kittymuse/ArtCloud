<?php

namespace App\Http\Controllers\Api;

use App\Enums\Image;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Api\ImageRequest;

class ImageController extends Controller
{
	// 上传图片
    public function store(ImageRequest $request)
    {
        $path = Image::getDescription($request->type);

        $url = Storage::put($path, $request->image);

        $process = 'image/auto-orient,1/resize,m_fill,w_200,h_200/quality,q_90';
        
        return $this->success([
            'file_name' => str_replace($path.'/', '', $url),
            'url' => Storage::signUrl($url, 3600, ['x-oss-process' => $process])
        ]);
    }
}