<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Training_center extends Model
{
    //un training_center tiene muchos teachers
     public function teachers()
     {
        return $this->hasMany(Teacher::class);
    }

    //un training_center tiene muchos course
    public function courses()
    {
       return $this->hasMany(Course::class);
   }
}
