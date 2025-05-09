<?php

namespace App\Http\Controllers;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function destroy($id)
{
    $course = Course::findOrFail($id);
    $course->delete();

    return response()->json(['message' => 'Curso eliminado correctamente']);
}

}
