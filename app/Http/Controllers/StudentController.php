<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class StudentController extends Controller
{
    //Show Students
    public function index(){
        return view('students.index', [
            'heading' => 'List of Students',
            'students' => Student::orderBy('id', 'asc')->latest()->filter(request(['search']))->simplePaginate(10)
        ]);
    }

    //Show Student Details
    public function show(Student $st_details,){

        return view('students.show', compact('st_details'));

    }

    //Show create Form
    public function create(){
        return view('students.create');
    }


    //Store student data
    public function store(Request $request){
        $formFields = $request->validate([
            'student_id' => ['required', Rule::unique('students', 'student_id')],
            'firstname' => 'required',
            'middlename' => 'nullable',
            'lastname' => 'required',
            'gender' => 'required',
            'birthday' => 'required',
            'email' => 'required',
            'address' => 'required',

        ]);

        Student::create($formFields);

        return redirect('/')->with('message', 'Student created successfully');




    }
    public function edit(Student $st_details){

        return view('students.edit', ['st_details' => $st_details]);
    }

    public function update(Request $request, Student $st_details){
        $formFields = $request->validate([
            'student_id' => ['required'],
            'firstname' => 'required',
            'middlename' => 'nullable',
            'lastname' => 'required',
            'gender' => 'required',
            'birthday' => 'required',
            'email' => 'required',
            'address' => 'required',

        ]);

        $st_details->update($formFields);

        return redirect('/students/' . $st_details->id)->with('message', 'Student updated successfully');



    }
    public function destroy(Student $st_details){
        $st_details->delete();
        return redirect('/')->with('message', 'Student deleted successfully');

    }
}
