<?php

use Dzcyr\Region\Region;

// 获取省市区街道名称
function getRegionsName($regions) {
	if($regions){
		$exps = explode('/', $regions);
	    return Region::getName(
	    	$exps[0],
	    	$exps[1],
	    	$exps[2],
	    	($exps[3]) ?? 0
	    );
	}
	return $regions;
}