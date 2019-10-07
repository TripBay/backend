<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function accounts()
    {
        return $this->hasMany(Account::class);
    }
}
