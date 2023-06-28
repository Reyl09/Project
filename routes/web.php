<?php

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

//List of Students
Route::get('/', function () {
    return view('students', [
        'heading' => 'List of Students',
        'students' => Student::all()
    ]);
});

//Student Details
Route::get('/students/{id}', function($id){
    return view ('st_details', [
        'st_details' => Student::find($id),
        'academic' => Academic::find($id)

    ]);

});

//Course
Route::get('/Course', function () {
    return view('course', [
        'heading' => 'List of Courses',
        'course' => Course::all()
    ]);
});

//View Students Enrolled in this Course
Route::get('/course/{id}', function($id){
    return view ('viewCourse', [
        'heading' => 'Students who are enrolled in {{$course->course}}',
        'viewCourse' => Course::find($id)
    ]);
});
