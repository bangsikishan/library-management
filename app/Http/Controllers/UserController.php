<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getLoginPage() 
    {
        return view('users.login');
    }

    public function getSignupPage() 
    {
        return view('users.signup');
    }
}
