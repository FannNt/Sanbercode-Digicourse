<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    protected $guarded = [];

    public function film()
    {
        $this->hasOne(Film::class);
    }
}
