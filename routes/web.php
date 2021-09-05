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

Route::get('/','PageController@home');
Route::get('/about','PageController@about');
Route::get('/mahasiswa','MahasiswaController@index');
Route::get('/mahasiswa/cari','MahasiswaController@cari');

// Student Menggunakan Model
Route::get('/student','StudentController@index');
Route::get('/student/cari','StudentController@cari');
Route::get('/student/create','StudentController@create');
Route::get('student/{student}','StudentController@show');
Route::post('/student','StudentController@store');
Route::delete('/student/{student}','StudentController@destroy');
Route::get('/student/{student}/edit/','StudentController@edit');
Route::patch('/student/{student}','StudentController@update');