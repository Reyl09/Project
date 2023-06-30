<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\UserController;
use App\Models\Academic;
use App\Models\Course;
use App\Models\Student;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/dash', [DashboardController::class, 'index'])->name('dashboard.index');



//List of Students
Route::get('/', [StudentController::class, 'index']);

//Show create student
Route::get('/students/create', [StudentController::class, 'create']);

//Store student data
Route::post('/students', [StudentController::class, 'store']);

//Show Edit Student
Route::get('/students/{st_details}/edit', [StudentController::class, 'edit']);

//Update Student
Route::put('/students/{st_details}', [StudentController::class, 'update']);

//Delete Student
Route::delete('/students/{st_details}', [StudentController::class, 'destroy']);


//Student Details
Route::get('/students/{st_details}', [StudentController::class, 'show']);




//Course
Route::get('/course',[CourseController::class, 'index'] );

//Add course
Route::get('/course/create', [CourseController::class, 'create'] );

//Store course data
Route::post('/course', [CourseController::class, 'store']);
//Show Update Course
Route::put('/course/{viewCourse}', [CourseController::class, 'update']);
//Delete Course
Route::delete('/course/{course}', [CourseController::class, 'destroy']);



//View Students Enrolled in this Course
Route::get('/course/{viewCourse}', [CourseController::class, 'show'] );




//List of User
Route::get('/users', [UserController::class, 'index']);

//Add new User
Route::get('/users/create', [UserController::class, 'create']);

//Store student data
Route::post('/users', [UserController::class, 'store']);

//Show Update User
Route::put('/users/{user}', [UserController::class, 'update']);
//Delete User
Route::delete('/users/{user}', [UserController::class, 'destroy']);


//Login
Route::get('/login', [UserController::class, 'index']);

