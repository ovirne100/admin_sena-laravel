<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    //

public function edit($id)
{
    $teacher = Teacher::findOrFail($id); // Busca el registro
    return view('teacher.edit', compact('teacher'));
}

  public function index(){
        $teachers = Teacher::all();
        return view('teacher.index', compact('teachers'));
    }

    public function create(){
        return view('teacher.create');

    }

    public function update(Request $request, $id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->name = $request->name;
        $teacher->email = $request->email;
        $teacher->save();
        return redirect()->route('teacher.index')->with('success', 'Profesor actualizado correctamente.');
    }


    public function show($id)
    {
        $teacher = Teacher::findOrFail($id); // Busca el registro por su ID o lanza una excepción 404 si no se encuentra
        return view('teacher.show', compact('teacher')); // Devuelve la vista 'teacher/show.blade.php' pasando el objeto $teacher
    }

    public function store(Request $request){
       $teacher = new Teacher();
       $teacher->name = $request->name;
       $teacher->email = $request->email;
        $teacher->save();
        return redirect()->route('teacher.index')->with('success', 'Profesor creado correctamente.');

    }
}
