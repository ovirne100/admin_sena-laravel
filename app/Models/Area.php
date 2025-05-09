<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    // Relación: un Area tiene muchos Teachers
    // Relación 1 a muchos
    public function teachers (){
                return $this->hasMany(Teacher::class);
            }

     // Relación: un Area tiene muchos courses
    // Relación 1 a muchos
    public function courses (){
        return $this->hasMany(Course::class);
    }
}
