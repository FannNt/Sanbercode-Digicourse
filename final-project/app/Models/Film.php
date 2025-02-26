<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $guarded =[];

    public function genre()
    {
        $this->hasMany(Genre::class);
    }

    public function actor()
    {
        $this->belongsToMany(Actor::class);
    }

    public function review()
    {
        $this->belongsToMany(Review::class);
    }
}
