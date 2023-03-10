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

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/katagori', 'KatagoriController@index')->name('katagori');
Route::get('katagori/edit/{katagori}', 'KatagoriController@edit')->name('katagori.edit');
Route::post('/katagori/store', 'KatagoriController@store')->name('katagori.store');
Route::patch('katagori/update/{katagori}', 'KatagoriController@update')->name('katagori.update');
Route::get('/katagori/destroy/{katagori}', 'KatagoriController@destroy')->name('katagori.destroy');

Route::get('/permintaan', 'PermintaanController@index')->name('permintaan');

Route::get('/satuan', 'SatuanController@index')->name('satuan');
Route::post('/satuan/store', 'SatuanController@store')->name('satuan.store');
Route::get('/satuan/edit/{satuan}', 'SatuanController@edit')->name('satuan.edit');
Route::patch('/satuan/update/{satuan}', 'SatuanController@update')->name('satuan.update');
Route::get('/satuan/destroy/{satuan}', 'SatuanController@destroy')->name('satuan.destroy');

Route::get('/barang', 'BarangController@index')->name('barang');
Route::post('/store/{katagori}', 'BarangController@store')->name('barang.store');
Route::get('/barang/tampilan', 'BarangController@tampilan')->name('barang.tampilan');
Route::get('/request/{katagori}', 'RequestBarangController@edit')->name('barang.request');
Route::get('/barang/create/{katagoris}', 'BarangController@create')->name('barang.create');
route::post('store/permintaan/{barang}', 'RequestBarangController@store')->name('barang.store.permintaan');

Route::get('/in', 'Transaksi\InController@index')->name('transaksi.in');
Route::get('/out', 'Transaksi\OutController@index')->name('transaksi.out');
Route::delete('in/{transaksi}', 'Transaksi\InController@destroy')->name('transaksi.destroy');
Route::post('in/store/{transaksi}', 'Transaksi\InController@store')->name('transaksi.store');

Route::get('/brand', 'BrandController@index')->name('brand');
Route::get('/brand/edit/{brand}', 'BrandController@edit')->name('brand.edit');
Route::post('/brand/store', 'BrandController@store')->name('brand.store');
Route::patch('/brand/update/{brand}', 'BrandController@update')->name('brand.update');
Route::get('/brand/destroy/{brand}', 'BrandController@destroy')->name('brand.destroy');

Route::get('/barang/{katagori}', 'RakController@index')->name('rak.barang');

Auth::routes();

