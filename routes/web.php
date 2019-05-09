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
Route::get('totes', 'PaginesController@entrades')->name('totes')->middleware('auth');
Route::get('/', 'PaginesController@entrades')->name('totes')->middleware('auth');
Route::get('trucades', 'PaginesController@trucades')->name('trucades')->middleware('auth');
 Route::get('crea_trucada', 'trucadesController@showform')->name('crea_trucada')->middleware('auth');
 Route::post('crea_trucada', 'trucadesController@create')->name('creacio')->middleware('auth');

Route::get('missatges', 'PaginesController@missatges')->name('missatges')->middleware('auth');
 Route::get('crea_missatge', 'missatgesController@showform')->name('crea_missatge')->middleware('auth');
 Route::post('crea_missatge', 'missatgesController@create')->name('creacio_msg')->middleware('auth');

Route::get('reunions', 'PaginesController@reunions')->name('reunions')->middleware('auth');
 Route::get('crea_reunio', 'reunionsController@showform')->name('crea_reunio')->middleware('auth');
 Route::post('crea_reunio', 'reunionsController@create')->name('creacio_reunio')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
