<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CourseController extends Controller
{
    //Show Courses
    // public function index(){
    //     $totalCourses = Course::count();
    //     return view('courses.index', [
    //         'heading' => 'List of Courses',
    //         'course' => Course::orderBy('id', 'asc')->latest()->filter(request(['search']))->get()
    //     ]);

    //     return view('your-view', ['totalCourses' => $totalCourses]);
    // }
    public function index()
{
    $totalCourses = Course::count();
    $courses = Course::orderBy('id', 'asc')->latest()->filter(request(['search']))->get();

    return view('courses.index', [
        'heading' => 'List of Courses',
        'course' => $courses,
        'totalCourses' => $totalCourses,
    ]);
}


    //View Students Enrolled in this Course
    public function show(Course  $viewCourse,){

        return view ('courses.show', [
            'heading' => 'Students who are enrolled in {{$course->course}}',
            'course' => $viewCourse
        ]);
    }
     //Store student data
     public function store(Request $request){
        $formFields = $request->validate([
            'course' => ['required', Rule::unique('courses', 'course')],
            'description' => ['required', Rule::unique('courses', 'description')],


        ]);

        Course::create($formFields);

        return redirect('/course')->with('message', 'Course created successfully');

    }
    //update student data
    public function update(Request $request, Course $course){
        $formFields = $request->validate([
            'course' => ['required'],
            'description' => ['required'],


        ]);

        $course->update($formFields);

        return redirect('/course')->with('message', 'Course updated successfully');

    }

    //Deleter
    public function destroy(Course $course){
        $course->delete();
        return redirect('/course')->with('message', 'Course deleted successfully');

    }




}
