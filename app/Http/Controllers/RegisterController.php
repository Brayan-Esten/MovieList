<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    // return register page
    public function index(){
        return view('register', [
            'title' => 'Register'
        ]);
    }


    // store user info to db
    public function store(Request $request){
        $validated = $request->validate([
            'username' => ['required', 'min:5', 'unique:users'],
            'email' => ['required', 'email:dns', 'unique:users'],
            'password' => ['required', 'alpha_num', 'min:6'],
            'password_confirmation' => ['required', 'same:password']
        ]);

        $validated['password'] = Hash::make($validated['password']);
        $validated['date_joined'] = date('Y-m-d', time());
        unset($validated['password_confirmation']);

        User::create($validated);
        
        return redirect('/login')->with('success', 'Registration success! Please log in');
    }
}
