<?php

namespace App\Models;

class Region extends Model
{
    protected $fillable = ['name', 'parent_id', 'type'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
