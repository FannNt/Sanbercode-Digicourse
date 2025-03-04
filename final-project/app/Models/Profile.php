<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded= [];

    public function user()
    {
        $this->belongsTo(User::class, 'user_id');
    }
}
