<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function landing() {
        return view('Landing.landing');
    }

    public function login(){
        return view('Login.bodylogin');
    }

    public function produkhukum(){
        return view ('ProdukHukum.produkhukum');
    }
    // public function pengaduan(){
    //     return view ('Pengaduan.pengaduan');
    // }

    public function admin(){
        return view ('admin.admin');
    }
    // public function admins(){
    //     return view ('admins.halutama');
    // }
    public function kelola(){
        return view ('admins.kelola');
    }
    // public function con(){
    //     return view ('admins.koneksi');
    // }
    
}
