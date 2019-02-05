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


Auth::routes();

Route::get('/{token?}', 'HomeController@index')->name('home');
Route::post('/formulario1', 'HomeController@storeformulario1')->name('savef1');
Route::post('/subarea', 'HomeController@subarea')->name('getsubarea');
Route::post('/formulario2', 'HomeController@store2')->name('savef2');
