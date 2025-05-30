<?php

namespace App\Http\Controllers;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{

public function index(){
     $courses = Course::all();
        return view('course.index', compact('courses'));
}


public function edit($id)
{
    $course = Course::findOrFail($id); // Busca el registro
    return view('course.edit', compact('course'));
}


 public function create(){
        return view('course.create');

    }


    public function update(Request $request, $id)
    {
        $course = Course::findOrFail($id);
        $course->course_number = $request->course_number;
        $course->day = $request->day;
        $course->save();
        return redirect()->route('course.index')->with('success', 'Curso actualizado correctamente.');
    }

    public function show($id)
    {
        $course = Course::findOrFail($id); // Busca el registro por su ID o lanza una excepción 404 si no se encuentra
        return view('course.show', compact('course')); // Devuelve la vista 'course/show.blade.php' pasando el objeto $course
    }
    public function store(Request $request){
       $course = new Course();
       $course->course_number = $request->course_number;
       $course->day = $request->day;
        $course->save();
        return redirect()->route('course.index')->with('success', 'Curso creado correctamente.');

    }

   public function destroy($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();
        return redirect()->route('course.index')->with('success', 'Curso eliminado correctamente.');
    }
}
