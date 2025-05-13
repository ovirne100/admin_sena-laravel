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
        $teacher = Teacher::all();
        return view('teacher.index', compact('teacher'));
    }

    public function create(){
        return view('teacher.create');

    }

    public function store(Request $request){
       $teacher = new Teacher();
       $teacher->name = $request->name;
       $teacher->email = $request->email;
        $teacher->save();
        
    }
}
