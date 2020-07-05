<?php

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
    return view('form');
});

Route::get('/pertanyaan', 'PertanyaanController@index'); //menampilkan tabel data pertanyaan

Route::get('/pertanyaan/create', 'PertanyaanController@create'); //menampilkan form untuk membuat pertanyaan baru

Route::post('/pertanyaan', 'PertanyaanController@store'); //menyimpan data baru ke tabel pertanyaan

Route::get('/jawaban/{pertanyaan_id}', 'JawabanController@index'); //menampilkan jawaban dari pertanyaan dengan id tertentu

Route::post('/jawaban/{pertanyaan_id}', 'JawabanController@store'); //menyimpan jawaban baru untuk pertanyaan dengan id tertentu

Route::get('/jawaban', 'JawabanController@create'); // ke halaman input jawaban