<?php

use App\Http\Controllers\RouteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;
use App\Http\Controllers\AdminController;
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
Route::post('/proses',[AdminController::class,'pro']);

// Route::get('/admin', [RouteController::class,'admin']);


Route::get('/sesi',[SessionController::class,'index']);
Route::post('/sesi/login',[SessionController::class,'login']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// >>>>>>> origin/main

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/halutama',[RouteController::class,'admins']);
Route::get('/kelola',[RouteController::class,'kelola']);
Route::post('/proses',[AdminController::class,'pro']);
// Route::post('/proses', [App\Http\Controllers\HomeController::class, 'pro'])->name('proses');


// Route::get('/admin', [RouteController::class,'admin']);


Route::get('/sesi',[SessionController::class,'index']);
Route::post('/sesi/login',[SessionController::class,'login']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// >>>>>>> origin/main

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
