<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class Auths extends Controller
{
    public function login(){
        return view('login');
    }
    public function loginpost(Request $req){
        if (Auth::attempt(['email' => $req->email, 'password' => $req->password])) {
    // Authentication was successful...
            return redirect()->route('admin.dashboard');
    }
        return redirect()->route('admin.login')->withErrors('Email adresi ve şifre hatalı');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
