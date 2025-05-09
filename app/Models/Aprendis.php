<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aprendis extends Model
{

    public function course()
    {
       return $this->belongsTo(Course::class);
   }

   public function computer()
    {
       return $this->hasOne(Computer::class);
   }
}
