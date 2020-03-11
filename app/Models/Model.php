<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as EloquentModel;

class Model extends EloquentModel
{
    public function scopeRecent($query)
    {
    	// 按照创建时间排序
        return $query->orderBy('created_at', 'desc');
    }
}