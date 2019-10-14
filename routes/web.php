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

Route::group(['prefix' => 'backend', 'middleware' => ['auth']], function () {
    Route::get('/', function () {
        return view("home");
    });
    // Route::resource('index', 'HomeController');
    Route::resource('peminjaman', 'PeminjamanController');
    Route::resource('peminjam', 'PeminjamController');
    Route::resource('kartupendaftaran', 'KartupendaftaranController');
    Route::resource('user', 'UserController');
    Route::resource('petugas', 'PetugasController');
    Route::resource('kategori', 'KategoriController');
    Route::resource('penerbit', 'PenerbitController');
    Route::resource('buku', 'BukuController');
    Route::resource('detailpinjam', 'DetailpinjamController');
});
Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/buku/json', 'BukuController@json');
Route::get('/detailpinjam/json', 'DetailpinjamController@json');
Route::get('/kartupendaftaran/json', 'KartupendaftaranController@json');
Route::get('/kategori/json', 'KategoriController@json');
Route::get('/peminjaman/json', 'PeminjamanController@json');
Route::get('/peminjam/json', 'PeminjamController@json');
Route::get('/penerbit/json', 'PenerbitController@json');
Route::get('/petugas/json', 'PetugasController@json');
Route::get('/data-buku', 'BukuController@dataBuku');
Route::get('/home', 'HomeController@index')->name('home');
// Route::controller('buku', 'BukuController', [
//     'anyData' => 'backend.buku.index',
//     'getIndex' => 'buku',
// ]);