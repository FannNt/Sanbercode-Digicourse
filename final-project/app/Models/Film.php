<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;
    protected $guarded =[];
    public $timestamps = false;

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
