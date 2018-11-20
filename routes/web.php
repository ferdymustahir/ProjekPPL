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

Route::get('/tambahBarang','barangController@tambahbarang');

Route::get('/barang','barangController@show');

Route::get('/editBarang/{id}','barangController@viewEdit');

Route::get('/hapusBarang/{id}','barangController@hapusBarang');

Route::post('/simBarang/{id}','barangController@editBarang');

Route::post('/simpanBarang','barangController@simpanBarang');

Route::get('/user','userController@lihat');

Route::get('/editprofil','userController@viewedit');

Route::post('/editprofil','userController@storeedit');

Route::post('/beliBarang/{id}','barangController@beliBarang');

Route::get('/viewbarang','adminController@barang');

Route::get('/viewdriver','adminController@driver');

Route::get('tambahDriver','adminController@viewaddriver');

Route::post('/addDriver','adminController@tambahDriver');

Route::get('editDriver/{id}','adminController@viewedit');

Route::post('editDriver/{id}','adminController@editsave');

Route::get('deleteDriver/{id}','adminController@dropdriver');

Route::get('viewPembelian','userController@viewBeli');

Route::post('/keranjang/{id}','barangController@keranjang');

Route::post('/pembayaran/{id}','barangController@bayarbarang');

Route::get('/keranjang1','barangController@lihatKeranjang');

