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
        return $this->belongsTo(Genre::class, 'genre_id');
    }

    public function actor()
    {
        return $this->hasMany(Actor::class,'cast_id');
    }

    public function review()
    {
        return $this->hasMany(Review::class, 'film_id');
    }
}
