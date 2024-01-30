<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller 
{
    public function register(){
        return view('auth/register');
    }
    public function signin(){
        return view('auth/signin');
    }
}

