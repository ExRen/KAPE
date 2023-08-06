<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

public function pro(){
        return view ('admins.proses');
    }

public function con(){
    return view ('admins.koneksi');
}

}