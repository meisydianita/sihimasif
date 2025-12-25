<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function postlogin (Request $request){
    $credentials = $request->only('email', 'password');
    // USER (Sekretaris + Bendahara)
    if (Auth::guard('user')->attempt($credentials)) {
        $user = Auth::guard('user')->user();
        if($user->level == 'Sekretaris Umum') {
            return redirect('/home');
        } else {
            return redirect('/home-bendum');
        }
    }
    
    // ANGGOTA
    if (Auth::guard('anggota')->attempt($credentials)) {
        return redirect('/home-anggota');
    }
        return redirect('/login');
    }

    public function postlogout (Request $request){
        Auth::guard('user')->logout();
        Auth::guard('anggota')->logout();
        return redirect('/login');
    }
}
