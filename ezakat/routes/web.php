<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profil', 'ProfilesController@create')->middleware('auth');
Route::post('/profil', 'ProfilesController@store')->middleware('auth');

Route ::get('/bayar', function(){
    return view('bayar.bayar');
});

Route ::get('/statusBayar', function(){
    return view('bayar.statusBayar');
});
