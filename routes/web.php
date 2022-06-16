<?php

use App\Http\Controllers\backend\HomeController as BackendHomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\backend\StudentController;
use App\Http\Controllers\backend\courseController;
use App\Http\Controllers\backend\StudentCourseController;
use App\Http\Controllers\backend\UserController;

Route::group(['namespace' => 'frontend'], function () {
    Route::get('/', [HomeController::class,'index'])->name('home');
    Route::get('/view/student', [HomeController::class,'showStudents'])->name('students');
});


Route::group(['namespace' => 'backend','prefix' => 'admin'], function () {
    

Route::get('register',[UserController::class,'create'])->name('register');
Route::post('register',[UserController::class,'store']);
Route::any('login',[UserController::class,'login'])->name('login');

Route::group(['middleware' => 'loginValidatorMiddleware'],function(){ //creating  route group
Route::get('logout',[UserController::class,'logout'])->name('logout');

Route::get('/',[BackendHomeController::class,'index'])->name('backhome');



Route::any('add-student',[StudentController::class,'create'])->name('addStudent');
Route::any('display-student',[StudentController::class,'index'])->name('displayStudent');
Route::any('edit-student/{id}',[StudentController::class,'edit']);
Route::get('delete-student/{id}',[StudentController::class,'destroy']);
Route::get('view-student/{id}',[StudentController::class,'show']);
Route::any('student/toggleStatus',[StudentController::class,'toggleStatus'])->name('student.toggleStatus');
Route::any('add-course',[courseController::class,'create'])->name('addCourse');
Route::any('display-course',[courseController::class,'index'])->name('displayCourse');
Route::any('edit-course/{id}',[courseController::class,'edit']);
Route::any('delete-course/{id}',[courseController::class,'destroy']);
Route::get('view-course/{id}',[courseController::class,'show']);
// Route::resources('student_courses',StudentCourseController::class);

Route::get('add-student-course',[StudentCourseController::class,'create'])->name('addStudentCourse');
Route::post('add-student-course',[StudentCourseController::class,'store'])->name('storeStudentCourse');
Route::any('display-student-course',[StudentCourseController::class,'index'])->name('displayStudentCourse');
Route::get('edit-student-course/{id}',[StudentCourseController::class,'edit'])->name('editstudentcourse');
Route::post('/update-student-course',[StudentCourseController::class,'update'])->name('updatestudentcourse');
Route::any('delete-student-course/{id}',[StudentCourseController::class,'destroy'])->name('deletestudentcourse');
});

});

