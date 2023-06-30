<?php

namespace App\Http\Controllers;
use App\Models\User;


use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class UserController extends Controller
{
    public function index(){
        return view('users.show', [
            'heading' => 'List of Users',
            'users' => User::orderBy('id', 'asc')->latest()->filter(request(['search']))->simplePaginate(10)
        ]);
    }

     //Store student data
     public function store(Request $request){
        $formFields = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => ['required', Rule::unique('users', 'email')],
            'password' => 'required',
            'usertype' => 'required',

        ]);

        $user = User::create($formFields);
        auth()->login($user);
        return redirect('/users')->with('message', 'User created successfully');

    }
     //update student data
     public function update(Request $request, User $user){
        $formFields = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => ['required'],
            'password' => 'required',
            'usertype' => 'required',

        ]);

        $user->update($formFields);

        return redirect('/users')->with('message', 'User updated successfully');

    }
    //Delete
    public function destroy(User $user){
        $user->delete();
        return redirect('/users')->with('message', 'Student deleted successfully');

    }


}
