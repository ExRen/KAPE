<?php

use App\Http\Controllers\RouteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;
use App\Http\Controllers\SessionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/landing',[RouteController::class,'landing']);
Route::get('/login', [RouteController::class,'login']);
Route::get('/produkhukum',[RouteController::class,'produkhukum']);
Route::get('/pengaduan',[RouteController::class,'pengaduan']);
