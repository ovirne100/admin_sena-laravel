<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

    protected $fillable = ['course_number', 'day', 'area_id', 'training_center_id'];


    // Relación: course pertenece a un Area
      // Relacion 1 a 1
      public function area()
      {
          return $this->belongsTo(Area::class);
      }

      // Relación: 1 course pertenece a un training_center
      // Relacion 1 a 1
      public function training_center()
      {
          return $this->belongsTo(Training_center::class);
      }

        // Relación: 1 curso tiene muchos aprendices
      // Relacion 1 a muchos
      public function aprendis()
      {
          return $this->hasMany(Aprendis::class);
      }

      //relacion: 1 curso peertenece a muchos maestros
      public function teachers()
    {
        return $this->belongsToMany(Teacher::class, 'course_teacher');
    }
}
