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
Route::post('/', 'HomeController@store')->name('savef1');
Route::post('/subarea', 'HomeController@subarea')->name('getsubarea');
Route::post('/', 'HomeController@store2')->name('savef2');
