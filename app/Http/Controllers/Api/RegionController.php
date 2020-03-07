<?php

namespace App\Http\Controllers\Api;

use Dzcyr\Region\Region;
use App\Http\Requests\Api\RegionRequest;
use App\Http\Resources\Api\RegionResource;

class RegionController extends Controller
{
    // 所在地区
    public function index(RegionRequest $request)
    {
    	$regions = Region::getRegions($request->parent_id);
    	RegionResource::wrap('data');
        return RegionResource::collection($regions);
    }
}
