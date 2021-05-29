<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', 'HomeController@index')->name('home');

Route::get('/about', 'AboutController@index');

Route::get('/contact', 'ContactController@index');

Route::get('/test', function () {
    return view('test.test');
});

Auth::routes();

Route::group(['middleware' => ['auth', 'role:user']], function(){
    Route::get('/dompet', 'WalletsController@index');

    Route::get('/bayar', 'BayarController@index');
    Route::get('/profil', 'ProfilesController@index');

    Route::post('/bayar', 'BayarController@store');
    Route::post('/profil', 'ProfilesController@store');
});

Route::group(['middleware' => ['auth', 'role:admin']], function(){

    Route::resource('/pemberi', 'PemberiController');
    Route::get('/pemberi/{pemberi}/verif', 'PemberiController@verif');
    Route::get('/pemberi/{pemberi}/tolak', 'PemberiController@tolak');

    Route::resource('/penerima', 'PenerimaController');
    Route::get('/penerima/{penerima}/verif', 'PenerimaController@verif');
    Route::get('/penerima/{penerima}/aktif', 'PenerimaController@aktif');

    Route::get('/kelola', 'KelolaController@index');
});
