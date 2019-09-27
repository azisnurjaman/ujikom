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
    return view('index');
});
// Route::get('/admin', function () {
//     return view('login');
// });

Route::group(['prefix' => 'backend', 'middleware' => ['auth', 'role:Admin']], function () {
    Route::get('/', function () {
        return view("home");
    });
    // Route::resource('index', 'HomeController');
    Route::resource('user', 'UserController');
    Route::resource('petugas', 'PetugasController');
    Route::resource('kategori', 'KategoriController');
    Route::resource('penerbit', 'PenerbitController');
    Route::resource('buku', 'BukuController');
    Route::resource('detailpinjam', 'DetailpinjamController');
    Route::resource('peminjaman', 'PeminjamanController');
    Route::resource('peminjam', 'PeminjamController');
    Route::resource('kartupendaftaran', 'KartupendaftaranController');
});
Auth::routes(['register' => false]);
Route::get('/home', 'HomeController@index')->name('home');


