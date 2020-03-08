<?php

namespace App\Models;

class UserAddress extends Model
{
    protected $fillable = [
        'user_id', 'consignee', 'phone', 'regions', 'detail', 'is_default', 'status'
    ];

    protected $hidden = [];
}