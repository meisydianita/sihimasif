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
    
    public function anggotasuratmasuk (){
        return view ('anggota.surat-masuk');
    }
    public function anggotasuratkeluar (){
        return view ('anggota.surat-keluar');
    }
    public function anggotasertifikat (){
        return view ('anggota.sertifikat');
    }
    public function anggotadokumenkegiatan (){
        return view ('anggota.dokumen-kegiatan');
    }
}
