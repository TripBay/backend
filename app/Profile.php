<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['about', 'address', 'image', 'avatar', 'is_verified'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
