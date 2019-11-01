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

// Route::get('/', function () {
//     return view('index');
// });
// Route::get('/detail', function () {
//     return view('detail');
// });
// Route::get('/admin', function () {
//     return view('admin');
// });

Route::group(['prefix' => 'backend', 'middleware' => ['auth', 'role:admin']], function () {
    Route::get('/', function () {
        return view("home");
    });
    Route::resource('user', 'UserController');
    Route::resource('petugas', 'PetugasController');
    Route::resource('kategori', 'KategoriController');
    Route::resource('penerbit', 'PenerbitController');
    Route::resource('detailpinjam', 'DetailpinjamController');
    Route::resource('buku', 'BukuController');
    Route::resource('peminjam', 'PeminjamController');
    Route::resource('peminjaman', 'PeminjamanController');
    Route::resource('kartupendaftaran', 'KartupendaftaranController');
    // Route::get('peminjaman', 'PeminjamanController');
    // Route::get('peminjam', 'PeminjamController');
    // Route::get('kartupendaftaran', 'KartupendaftaranController');
    // Route::get('buku', 'BukuController');
    // Route::get('detailpinjam', 'DetailpinjamController');
    Route::get('/buku/json', 'BukuController@json');
    Route::get('/detailpinjam/json', 'DetailpinjamController@json');
    Route::get('/kartupendaftaran/json', 'KartupendaftaranController@json');
    Route::get('/kategori/json', 'KategoriController@json');
    Route::get('/peminjaman/json', 'PeminjamanController@json');
    Route::get('/peminjam/json', 'PeminjamController@json');
    Route::get('/penerbit/json', 'PenerbitController@json');
    Route::get('/petugas/json', 'PetugasController@json');
});
Route::group(['prefix' => 'backend', 'middleware' => ['auth']], function () {
    Route::get('/', function () {
        return view("home");
    });
    // Route::resource('index', 'HomeController');
    Route::resource('peminjaman', 'PeminjamanController', ['only' => [
        'index', 'create', 'store'
    ]]);
    Route::resource('peminjam', 'PeminjamController', ['only' => [
        'index', 'create', 'store', 'show'
    ]]);
    Route::resource('buku', 'BukuController', ['only' => [
        'index', 'show'
     ]]);
    Route::resource('kartupendaftaran', 'KartupendaftaranController', ['only' => [
        'index'
     ]]);
    Route::get('detailpinjam', 'DetailpinjamController@index');
});
Auth::routes(['register' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/', 'FrontendController');
Route::get('/detail/{id}', 'FrontendController@ShowDetail');
// Route::controller('buku', 'BukuController', [
//     'anyData' => 'backend.buku.index',
//     'getIndex' => 'buku',
// ]);