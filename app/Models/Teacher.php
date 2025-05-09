<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
      // Relación: Teacher pertenece a un Area
      // Relacion 1 a 1
      public function area()
      {
          return $this->belongsTo(Area::class);
      }


      // Relación: Teacher pertenece a un trining_center
      // Relacion 1 a 1
      public function training_center ()
      {
        return $this->belongsTo(Training_center::class);
    }

    //relacion: 1 teacher puede dar muchos cursos
    public function courses()
    {
        return $this->belongsToMany(Course::class, 'course_teacher');
    }
}
