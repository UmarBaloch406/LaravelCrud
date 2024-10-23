<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Models\Teacher;

Route::get('/', function () {
    return view('welcome');
});


//Student 
Route::get('/student', [StudentController::class, 'student'])->name('student');
Route::post('/student/store' ,[StudentController::class, 'store' ])->name('student.store'); 


//Home
Route::get('/' , [HomeController::class, 'index']);

//Get all Students Data
Route::get('/students/show',[StudentController::class, 'show'])->name('students.show');


//route to show edit Student form
Route::get('/studentshow/{id}/edit',[StudentController::class,'edit'])->name('students.edit');

//Route to updating the student
Route::put('/studentshow/{id}',[StudentController::class, 'update'])->name('students.update');

//route to delete the student
Route::delete('/studentshow/{id}',[StudentController::class, 'del'])->name('students.del');


//====================================================================================

//Teacher
Route::get('teacher',[TeacherController::class , 'teacher'])->name('teacher');
Route::post('/teacher/store' , [TeacherController::class , 'store'])->name('teacher.store');
//get all teachers data
Route::get('/teachers/show',[TeacherController::class,'show'])->name('teachers.show');

//route to show edit Teacher form
Route::get('/teachershow/{id}/edit',[TeacherController::class,'edit'])->name('teachers.edit');

//Route to updating the Teacher
Route::put('/teachershow/{id}',[TeacherController::class, 'update'])->name('teachers.update');

//route to delete the Teacher
Route::delete('/teachershow/{id}',[TeacherController::class, 'del'])->name('teachers.del');
