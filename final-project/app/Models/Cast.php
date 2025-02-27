<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cast extends Model
{
    protected $guarded = [];

    public function actor()
    {
        $this->hasMany(Actor::class,'cast_id');
    }
}
