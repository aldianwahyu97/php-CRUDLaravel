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
//     return view('welcome');
// });
Route::get('/pegawai','c_pegawai@index');
Route::get('/pegawai/tambah','c_pegawai@tambah');
Route::post('/pegawai/store','c_pegawai@store');
Route::get('/pegawai/edit/{id}','c_pegawai@edit');
Route::post('/pegawai/update','c_pegawai@update');
Route::get('/pegawai/delete/{id}','c_pegawai@delete');
