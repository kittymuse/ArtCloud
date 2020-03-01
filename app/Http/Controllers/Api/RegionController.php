<?php

namespace App\Http\Controllers\Api;

use Dzcyr\Region\Region;
use Illuminate\Http\Request;
use App\Http\Resources\Api\RegionResource;

class RegionController extends Controller
{
    public function show(Request $request)
    {
    	$parent_id = $request->parent_id;
    	exit;
    	$regions = Region::getListByParentId($parent_id);
        return RegionResource::collection();
    }
}
