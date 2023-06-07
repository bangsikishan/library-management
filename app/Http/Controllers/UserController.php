<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    public function getLoginPage() 
    {
        return view('users.login');
    }

    public function login(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|string|max:100|min:3',
            'password' => 'required|string|min:8'
        ]);

        ddd($validatedData);
    }

    public function getSignupPage() 
    {
        return view('users.signup');
    }

    public function signup(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:100|min:3',
            'username' => 'required|string|max:100|min:3|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => ['required', 'confirmed', 
                Password::min(8)
                ->letters()
                ->mixedCase()
                ->numbers()
                ->symbols()
            ]
        ]);

        ddd($validatedData);
    }
}
