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


Route::get('/beranda', function () {
    return view('home');
})->name('home');

Route::get('jadwal','jadwalController@index')->name('jadwal');
Route::get('jadwal/tambah','jadwalController@create')->name('jadwal.tambah');
Route::post('jadwal/simpan','jadwalController@store')->name('jadwal.simpan');
Route::get('penumpang','penumpangController@index')->name('penumpang');
Route::get('penumpang/tambah','penumpangController@create')->name('penumpang.tambah');
Route::post('penumpang/simpan','penumpangController@store')->name('penumpang.simpan');
Route::get('transaksi','transaksiController@index')->name('transaksi');
Route::get('transaksi/tambah','transaksiController@create')->name('transaksi.tambah');
Route::post('transaksi/simpan','transaksiController@store')->name('transaksi.simpan');
Route::get('carapemesanan','carapemesananController@index')->name('carapemesanan');
Route::get('syarat','syaratController@index')->name('syarat');