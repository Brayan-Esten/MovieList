<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class LoginController extends Controller
{
    // return login page
    public function index(){
        return view('login');
    }


    // authenticate user
    public function authenticate(Request $request){

        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required']
        ]);

        if(Auth::attempt($credentials)){

            $request->session()->regenerate();

            if($request->remember){
                Cookie::queue('email', $request->email, 120);
                Cookie::queue('password', $request->password, 120);
            }

            return redirect()->intended('/');
        }

        return back()->with('logInError', 'Login failed, incorrect email or password!');
    }


    // logout
    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
