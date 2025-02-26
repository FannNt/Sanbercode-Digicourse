<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $guarded = [];

    public function user()
    {
        $this->hasOne(User::class);
    }

    public function film()
    {
        $this->hasOne(Film::class);
    }
}
