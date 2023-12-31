<?php

use App\Http\Controllers\RouteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DatabaseController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\DashboardController;
use App\Models\Pengaduan;

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
    return view('Landing.landing');
});

Route::get('/landing',[RouteController::class,'landing']);
Route::get('/login', [RouteController::class,'login']);
Route::get('/produkhukum',[RouteController::class,'produkhukum']);
Route::get('/pengaduan',[PengaduanController::class,'index']);
Route::post('/pengaduan',[PengaduanController::class,'store']);
Route::get('/home', [DashboardController::class, 'index']);
Route::post('/halutama/delete/{pengaduan:id}',[DashboardController::class, 'destroy']);

Route::post('/proses',[AdminController::class,'pro']);

// Route::get('/admin', [RouteController::class,'admin']);


Route::get('/sesi',[SessionController::class,'index']);
Route::post('/sesi/login',[SessionController::class,'login']);
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// >>>>>>> origin/main

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/halutama',[RouteController::class,'admins']);
Route::get('/kelola',[RouteController::class,'kelola']);
Route::post('/proses',[AdminController::class,'pro']);
// Route::post('/koneksi',[AdminController::class,'koneksi']);
Route::post('/koneksi',[AdminController::class,'con']);

// Route::post('/koneksi'[DatabaseController::class,'con']);
// Route::post('/proses', [App\Http\Controllers\HomeController::class, 'pro'])->name('proses');


// Route::get('/admin', [RouteController::class,'admin']);


Route::get('/sesi',[SessionController::class,'index']);
Route::post('/sesi/login',[SessionController::class,'login']);
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// // >>>>>>> origin/main

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
