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
Route::get('/dashboard','DashboardController@dashboard');
Route::get('/menu','MenuController@index');
Route::post('/menu/tambah','MenuController@tambah');
Route::get('/menu/{id}/ubah','MenuController@ubah');
Route::post('/menu/{id}/ubah_menu','MenuController@ubah_menu');
Route::get('/menu/{id}/hapus','MenuController@hapus');
Route::get('menu/dashboard','MenuController@dashboard');
Route::get('/menu/user','MenuController@user');
Route::post('/menu/user/tambah_user','MenuController@tambah_user');
