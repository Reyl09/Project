<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class authController extends Controller
{
    public function login(){
        return view('login');
    }
    public function register(){
        return view('register');
    }

    /**
     * Display a listing of the resource.
     */
    public function loginAuth(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard/index')->withSuccess('Signed in');
        }

        return redirect('/')->with('success', 'Login details are not valid');

    }


    /**
     * Store a newly created resource in storage.
     */
    public function registerAuth(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("/dashboard/index")->with('success', 'Naol success');
    }

    public function create(array $data){
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
          ]);
    }


    public function logout(){
        Auth::logout();

        return redirect()->route('login');
    }
}
