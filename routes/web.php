<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use App\Models\Computer;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\AprendisController;


Route::get('teachers', [TeacherController::class, 'index'])->name('teacher.index');
Route::get('teachers/create', [TeacherController::class, 'create'])->name('teacher.create');
Route::post('teachers/store', [TeacherController::class, 'store'])->name('teacher.store');
Route::get('teachers/{teacher}/edit', [TeacherController::class, 'edit'])->name('teacher.edit');
Route::put('teachers/{teacher}', [TeacherController::class, 'update'])->name('teacher.update');
Route::delete('teachers/{teacher}', [TeacherController::class, 'destroy'])->name('teacher.destroy');
Route::get('teachers/{teacher}', [TeacherController::class, 'show'])->name('teacher.show');



Route::get('courses', [CourseController::class, 'index'])->name('course.index');
Route::get('course/create', [CourseController::class, 'create'])->name('course.create');
Route::post('course/store', [CourseController::class, 'store'])->name('course.store');
Route::get('courses/{course}/edit', [CourseController::class, 'edit'])->name('course.edit');
Route::put('courses/{course}', [CourseController::class, 'update'])->name('course.update');
Route::delete('courses/{course}', [CourseController::class, 'destroy'])->name('course.destroy');
Route::get('courses/{course}', [CourseController::class, 'show'])->name('course.show');



Route::get('computers', [ComputerController::class, 'index'])->name('computer.index');
Route::get('computer/create', [ComputerController::class, 'create'])->name('computer.create');
Route::post('computer/store', [ComputerController::class, 'store'])->name('computer.store');
Route::get('computers/{computer}', [ComputerController::class, 'show'])->name('computer.show');
Route::get('computers/{computer}/edit', [ComputerController::class, 'edit'])->name('computer.edit');
Route::put('computers/{computer}', [ComputerController::class, 'update'])->name('computer.update');
Route::delete('computers/{computer}', [ComputerController::class, 'destroy'])->name('computer.destroy');



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

