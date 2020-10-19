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

Route::get('/', 'ProfileController@home');
Route::post('/', 'ProfileController@store');


Route::get('/pro-admin', 'ProfileController@admin');

Route::delete('/pro-admin/{id}', 'ProfileController@destroy');
