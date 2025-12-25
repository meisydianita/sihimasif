<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index (){
        return view ('sekum.home');
    }

    public function bendum (){
        return view ('bendum.home-bendum');
    }

    public function anggota (){
        return view ('anggota.home-anggota');
    }

    public function suratmasuk (){
        return view ('sekum.surat-masuk');
    }
    public function suratkeluar (){
        return view ('sekum.surat-keluar');
    }
}
