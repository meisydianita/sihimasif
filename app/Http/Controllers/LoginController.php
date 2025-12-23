<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function postlogin (Request $request){
        if (Auth::attempt($request->only('email','password'))){
            return redirect('/home');
        }
        // ini belum berjalan
        return redirect ('/login');
    }

    public function postlogout (Request $request){
        Auth::logout();
        return redirect('/login');

    }
}
