<?php

namespace App\Http\Controllers;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{

public function edit($id)
{
    $course = Course::findOrFail($id); // Busca el registro
    return view('teacher.edit', compact('teacher'));
}


public function index(){
     $course = Course::all();
        return view('course.index', compact('course'));
}

 public function create(){
        return view('course.create');

    }

    public function store(Request $request){
       $course = new Course();
       $course->course_number = $request->course_number;
       $course->day = $request->day;
        $course->save();

    }
}
