<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginPage(){
        return view('login');
    }

    public function registerPage(){
        return view('register');
    }

    public function dashboard(){
        if(Auth::user()->role == 'admin'){
            return view('Admin.layout.master');
        }
        return view('User.layout.master');
    }
}
