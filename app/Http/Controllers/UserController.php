<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function signupform(){
        return view('user.signup');
    }

    public function loginform(){
        return view('user.login');
    }

    public function homepage(){
        return view('home');
    }

    public function musicrequest(){
        return view('pages.request');
    }

    public function admin_form(){
        return view('admin.add_admin');
    }

    public function login(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }
        return back()->withErrors([
            'failed' => 'Email or Password not correct',
        ]);
    }

    public function signup(Request $request){

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'phone' => 'required|unique:users',
            'email' => 'required|email|max:255|unique:users',
            'date_of_birth' => 'required',
            'password' => 'required|min:8',
        ]);

        $user = User::create($validatedData);

        Auth::login($user);

        return redirect()->route('dashboard')->with('success', 'Registration Successful');
    }

    public function logout(){
        $user = request()->user();
        Auth::logout($user);
        return redirect()->route('loginform');
    }
}
