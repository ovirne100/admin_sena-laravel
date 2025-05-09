<?php

use Illuminate\Support\Facades\Route;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\CourseController;

Route::post('/courses', function (Request $request) {
    $course = Course::create($request->all());
    return response()->json($course, 200);
});

Route::delete('courses/{id}', [CourseController::class, 'destroy']);
