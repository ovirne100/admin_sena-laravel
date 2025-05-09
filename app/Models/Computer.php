<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    public function aprendis()
    {
        return $this->hasOne(Aprendis::class);
    }

}
