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


Route::group(['prefix'=>'kategori'], function(){
    route::get('/','Kategori\CategoryController@index')->name('kategori');
    route::get('/edit/{category}' ,'Kategori\CategoryController@edit')->name('kategori.edit');
    route::patch('/update/{category}','Kategori\CategoryController@update')->name('kategori.update');
    route::post('/store','Kategori\CategoryController@store')->name('kategori.store');
    route::get('{category}','Kategori\CategoryController@destroy')->name('kategori.destroy');
});

Route::group(['prefix' => 'brand'], function () {
    route::get('/', 'Brand\BrandController@index')->name('brand');
    route::get('/edit/{brand}', 'Brand\BrandController@edit')->name('brand.edit');
    route::post('/store','Brand\BrandController@store')->name('brand.store');
    route::patch('/update/{brand}','Brand\BrandController@update')->name('brand.update');
    route::get('{brand}','Brand\BrandController@destroy')->name('brand.destroy');
});


Route::group(['prefix' => 'Satuan'], function () {
    route::get('/', 'Uom\UomController@index')->name('satuan');
    route::get('/edit/{satuan}', 'Uom\UomController@edit')->name('uom.edit');
    route::post('/store','Uom\UomController@store')->name('uom.store');
    route::patch('/update/{satuan}','Uom\UomController@update')->name('satuan.update');
    route::get('{satuan}','Uom\UomController@destroy')->name('satuan.destroy');
});

Route::group(['prefix' => 'master-barang'], function () {
    route::get('/', 'Masterbarang\MasterbarangController@index')->name('master-barang');
    route::get('/add', 'Masterbarang\MasterbarangController@create')->name('master-barang.add');
    route::get('/edit', 'Masterbarang\MasterbarangController@edit')->name('master-barang.edit');
    route::get('/request/{category}', 'Masterbarang\RequestbarangController@edit')->name('master-barang.request');
    route::get('/show/{category}', 'Masterbarang\MasterbarangController@show')->name('master-barang.show');
    route::post('/store/{category}', 'Masterbarang\MasterbarangController@store')->name('master-barang.store');
    route::post('store/permintaan/{barang}', 'Masterbarang\RequestbarangController@store')->name('master-barang.store.permintaan');
});

Route::group(['prefix' => 'transaksi'], function () {
    route::get('/in', 'Transaksi\InController@index')->name('transaksi.in');
    route::get('/out', 'Transaksi\OutController@index')->name('transaksi.out');
    route::patch('/update/{permintaan}','Transaksi\InController@update')->name('transaksi.update');
    route::get('{permintaan}','Transaksi\InController@destroy')->name('transaksi.destroy');
    route::post('/store/{permintaan}', 'Transaksi\InController@store')->name('transaksi.store');
});
Route::group(['prefix' => 'rak'], function () {
    route::get('/barang/{category}', 'Rak\RakController@index')->name('rak.barang');
});