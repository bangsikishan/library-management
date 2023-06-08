<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getLoginPage() 
    {
        return view('users.login');
    }

    public function login(Request $request)
    {
        $validatedCredentials = $request->validate([
            'username' => 'required|string|max:100|min:3',
            'password' => 'required|string|min:8'
        ]);

        if(Auth::attempt($validatedCredentials))
        {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.'
        ])->onlyInput('username');
    }

    public function getSignupPage() 
    {
        return view('users.signup');
    }

    public function signup(Request $request)
    {
        $validatedCredentials = $request->validate([
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

        User::create($validatedCredentials);

        return redirect('/login');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
