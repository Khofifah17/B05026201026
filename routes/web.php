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

Route::get('praktikum1', function () {
    return view('prak1web');
});

Route::get('tugas4', function () {
    return view('tugas4web');
});

Route::get('praktikum2','ViewController@showPraktikum2');

Route::get('ets','ViewController@showEts');

Route::get('show','ViewController@showForm');
Route::post('pajak','ViewController@hitungPajak');

//route CRUD
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');

Route::get('/mutasi','MutasiController@index');
Route::get('/mutasi/tambah','MutasiController@tambah');
Route::post('/mutasi/store','MutasiController@store');
Route::get('/mutasi/edit/{id}','MutasiController@edit');
Route::post('/mutasi/update','MutasiController@update');
Route::get('/mutasi/hapus/{id}','MutasiController@hapus');


Route::get('/absen','AbsenController@index');
Route::get('/absen/tambah','AbsenController@tambah');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');

Route::get('/mouse','MouseController@index');
Route::get('/mouse/tambah','MouseController@tambah');
Route::post('/mouse/store','MouseController@store');
Route::get('/mouse/edit/{id}','MouseController@edit');
Route::post('/mouse/update','MouseController@update');
Route::get('/mouse/hapus/{id}','MouseController@hapus');
Route::get('/mouse/cari','MouseController@cari');
Route::get('/mouse/detail/{id}','MouseController@view');

Route::get('/karyawan1','Karyawan1Controller@index');
Route::get('/karyawan1/tambah','Karyawan1Controller@tambah');
Route::post('/karyawan1/store','Karyawan1Controller@store');
Route::get('/karyawan1/edit/{id}','Karyawan1Controller@edit');
Route::post('/karyawan1/update','Karyawan1Controller@update');
Route::get('/karyawan1/hapus/{id}','Karyawan1Controller@hapus');
