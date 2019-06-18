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
    return view('v_Principal');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('principal', 'c_Principal@index')->name('principal');
Route::resource('registro', 'c_RegistroUsuario');
Route::resource('registro_s', 'c_RegistroProducto');