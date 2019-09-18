<?php

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

Route::get('/', function () {
    return view('welcome');
});

// Auth::resource(['register'=>'false']);

Route::group(['prefix' => 'backend', 'middleware' => ['auth', 'role:admin']], function () {
    // Route::get('/', function () {
    //     return view("home");
    // });
    Route::resource('index', 'HomeController');
    Route::resource('user', 'UserController');
    Route::resource('petugas', 'PetugasController');
    Route::resource('kategori', 'KategoriController');
    Route::resource('penerbit', 'PenerbitController');
    Route::resource('buku', 'BukuController');
});
Auth::routes(['register' => false]);
// Route::get('/home', 'HomeController@index')->name('home');
