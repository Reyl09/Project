<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // DashboardController.php
public function index()
{
    $totalCourses = Course::count();
    $totalStudents = Student::count();

    return view('dashboard.index', [
        'totalCourses' => $totalCourses,
        'totalStudents' => $totalStudents,
    ]);
}

}
