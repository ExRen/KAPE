<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function landing() {
        return view('Landing.landing');
    }
}
