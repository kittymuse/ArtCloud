<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    protected $fillable = [
        'user_id', 'consignee', 'phone', 'regions', 'detail', 'is_default', 'status'
    ];

    protected $hidden = [];
}