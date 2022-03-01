<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('home');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::group(array('prefix' => 'berkas'), function (){
    Route::get('/tampil', 'BerkasController@index')->name('berkas.tampil');
    Route::get('/tambah', 'BerkasController@tambahBerkas')->name('berkas.add');
    Route::post('/store', 'BerkasController@store')->name('berkas.store');
    Route::get('/edit/{berkas}','BerkasController@edit')->name('berkas.edit');
    Route::match(['patch','put'],'/update/{berkas}', 'BerkasController@update')->name('berkas.update');
    Route::delete('/destroy/{berkas}', 'BerkasController@destroy')->name('berkas.destroy');
});

Route::group(array('prefix' => 'spp'), function (){
    Route::get('/tambah', 'SppController@tambahData')->name('spp.add');
    Route::get('/tampil', 'SppController@index')->name('spp.tampil');
    Route::post('/store', 'SppController@store')->name('spp.store');
    Route::get('/edit/{spp}','SppController@edit')->name('spp.edit');
    Route::match(['patch','put'],'/update/{spp}', 'SppController@update')->name('spp.update');
    Route::delete('/destroy/{spp}', 'SppController@destroy')->name('spp.destroy');
});

Route::group(array('prefix' => 'jenisLayanan'), function (){
    Route::get('/tambah', 'JenisLayananController@create')->name('jl.tambah');
    Route::get('/tampil', 'JenisLayananController@index')->name('jl.tampil');
    Route::post('/store', 'JenisLayananController@store')->name('jl.store');
    Route::get('/edit/{jl}','JenisLayananController@edit')->name('jl.edit');
    Route::match(['patch','put'],'/update/{jl}', 'JenisLayananController@update')->name('jl.update');
    Route::delete('/destroy/{jl}', 'JenisLayananController@destroy')->name('jl.destroy');
});

Route::group(array('prefix' => 'jenisSpp'), function (){
    Route::get('/tambah', 'JenisSppController@create')->name('jenisSpp.tambah');
    Route::get('/tampil', 'JenisSppController@index')->name('jenisSpp.tampil');
    Route::post('/store', 'JenisSppController@store')->name('jenisSpp.store');
    Route::get('/edit/{jenisSpp}','JenisSppController@edit')->name('jenisSpp.edit');
    Route::match(['patch','put'],'/update/{jenisSpp}', 'JenisSppController@update')->name('jenisSpp.update');
    Route::delete('/destroy/{jl}', 'JenisSppController@destroy')->name('jenisSpp.destroy');
});

Route::group(array('prefix' => 'jenisTransfer'), function (){
    Route::get('/tambah', 'JenisTransferController@create')->name('jenisTransfer.tambah');
    Route::get('/tampil', 'JenisTransferController@index')->name('jenisTransfer.tampil');
    Route::post('/store', 'JenisTransferController@store')->name('jenisTransfer.store');
    Route::get('/edit/{jenisSpp}','JenisTransferController@edit')->name('jenisTransfer.edit');
    Route::match(['patch','put'],'/update/{jenisSpp}', 'JenisTransferController@update')->name('jenisTransfer.update');
    Route::delete('/destroy/{jl}', 'JenisTransferController@destroy')->name('jenisTransfer.destroy');
});

Route::group(array('prefix' => 'cashflow'), function (){
    Route::get('/tambah', 'CashflowController@create')->name('cashflow.tambah');
    Route::get('/tampil', 'CashflowController@index')->name('cashflow.tampil');
    Route::post('/store', 'CashflowController@store')->name('cashflow.store');
//    Route::get('/edit/{jenisSpp}','CashflowController@edit')->name('cashflow.edit');
//    Route::match(['patch','put'],'/update/{jenisSpp}', 'CashflowController@update')->name('cashflow.update');
//    Route::delete('/destroy/{jl}', 'CashflowController@destroy')->name('cashflow.destroy');
});

Route::resource('kategori', 'KategoriController');
    

Route::resource('disposisi', 'DisposisiController');


Route::resource('kepada', 'KepadaController');

Route::resource('suratmasuk', 'SuratController');
Route::get('/cetakpdfsuratmasuk','SuratController@cetakpdfsuratmasuk')->name('cetakpdfsuratmasuk');




Route::get('/logout', function (){
    \Illuminate\Support\Facades\Auth::logout();
    return  redirect('/login');
})->name('logout');