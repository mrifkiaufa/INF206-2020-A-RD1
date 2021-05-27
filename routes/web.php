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
Route::get('/about', function () {
    return view('about.about');
});

Route::get('/contact', function () {
    return view('contact.contact');
});

Route::get('/test', function () {
    return view('test.test');
});

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::group(['middleware' => ['auth', 'role:user']], function(){
    Route::get('/dompet', 'WalletsController@index');

    Route::get('/bayar', 'BayarController@index');
    Route::get('/profil', 'ProfilesController@index');

    Route::post('/bayar', 'BayarController@store');
    Route::post('/profil', 'ProfilesController@store');
});

Route::group(['middleware' => ['auth', 'role:admin']], function(){

    Route::get('/admin', function () {
        return view('admin.home');
    })->name('home');

    Route::resource('/pemberi', 'PemberiController');
    Route::get('/pemberi/{pemberi}/verif', 'PemberiController@verif');
    Route::get('/pemberi/{pemberi}/tolak', 'PemberiController@tolak');

    Route::get('/penerima', function () {
    return view('admin.penerima.penerima');
    });

    Route::get('/kelola', function () {
    return view('admin.kelola.kelola');
    });
});
