<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $guarded = [];

    public function user()
    {
        $this->belongsTo(User::class, 'user_id');
    }

    public function film()
    {
        $this->belongsTo(Film::class, 'film_id');
    }
}
