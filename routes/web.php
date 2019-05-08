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
Route::get('totes', 'PaginesController@entrades')->name('totes');
Route::get('/', 'PaginesController@entrades')->name('totes');
Route::get('trucades', 'PaginesController@trucades')->name('trucades');
Route::get('missatges', 'PaginesController@missatges')->name('missatges');
Route::get('reunions', 'PaginesController@reunions')->name('reunions');
Route::get('login', 'PaginesController@login')->name('login');
Route::get('registre', 'PaginesController@registre')->name('registre');

