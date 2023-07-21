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
Route::get('/login', [RouteCOntroller::class,'login']);


Route::get('/sesi',[SessionController::class,'index']);
Route::post('/sesi/login',[SessionController::class,'login']);

//Produk Hukum Desa
Route::resource('produkhukum', 'ProkumController');
Route::get('produkhukum.search', 'ProkumController@index')->name('prokum.search');
Route::get('produk-hukum-desa', 'ProkumController@prokumde')->name('prokumde');

//Produk Hukum Daerah
Route::resource('produk-hukum-daerah', 'ProkumDaerahController');
Route::get('produk-hukum-daerah.search', 'ProkumDaerahController@search')->name('search');
Route::get('produk-hukum', 'ProkumDaerahController@prokumda')->name('prokumda');

//Page
Route::get('/', 'PageController@welcome')->name('welcome');
Route::get('/profile', 'PageController@profile')->name('profile');
Route::get('/berita', 'PageController@berita')->name('berita');
Route::get('/kontak', 'PageController@kontak')->name('kontak');
Route::get('/sejarah-jdih', 'PageController@sejarahjdih')->name('sejarahjdih');
Route::get('/sumber-hukum', 'PageController@sumberhukum')->name('sumberhukum');
Route::get('/sop', 'PageController@sop')->name('sop');
// Route::prefix('Admin')->group(function(){
// Route::get('/',[Admin\Auth\LoginController::class,'loginForm']);
// Route::get('/login',[Admin\Auth\LoginController::class,'loginForm'])->name('admin.login');

//Router::get('/dbconn', function(){//
  //return view('dbconn');//
//});//


