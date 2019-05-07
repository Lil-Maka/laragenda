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
Route::get('totes', 'PaginesController@entrades');
Route::get('trucades', 'PaginesController@trucades');
Route::get('missatges', 'PaginesController@missatges');
Route::get('reunions', 'PaginesController@reunions');
Route::get('login', 'PaginesController@login');
Route::get('/', 'PaginesController@login');
Route::get('registre', 'PaginesController@registre');

