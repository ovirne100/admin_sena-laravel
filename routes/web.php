<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use App\Models\Computer;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\AreaController;

Route::get('teachers', [TeacherController::class, 'index'])->name('teacher.index');
Route::get('teacher/create', [TeacherController::class, 'create'])->name('teacher.create');
Route::post('teacher/store', [TeacherController::class, 'store'])->name('teacher.store');



Route::get('courses', [CourseController::class, 'index'])->name('course.index');
Route::get('course/create', [CourseController::class, 'create'])->name('course.create');
Route::post('course/store', [CourseController::class, 'store'])->name('course.store');




Route::get('computers', [ComputerController::class, 'index'])->name('computer.index');
Route::get('computer/create', [ComputerController::class, 'create'])->name('computer.create');
Route::post('computer/store', [ComputerController::class, 'store'])->name('computer.store');


//Route::get('areas', [AreaController::class, 'index'])->name('area.index');
//Route::get('area/create', [AreaController::class, 'create'])->name('area.create');
//Route::post('area/store', [AreaController::class, 'store'])->name('area.store');
//Route::get('areas/{area}/edit', [AreaController::class, 'edit'])->name('area.edit');

Route::get('areas', [AreaController::class, 'index'])->name('area.index');
Route::get('area/create', [AreaController::class, 'create'])->name('area.create');
Route::post('area/store', [AreaController::class, 'store'])->name('area.store');
Route::get('areas/{area}', [AreaController::class, 'show'])->name('area.show');
Route::get('areas/{area}/edit', [AreaController::class, 'edit'])->name('area.edit');
Route::put('areas/{area}', [AreaController::class, 'update'])->name('area.update');
Route::delete('areas/{area}', [AreaController::class, 'destroy'])->name('area.destroy');


Route::get('courses', [CourseController::class, 'index'])->name('course.index');
