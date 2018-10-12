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

Route::get('/places/create', 'PlaceController@showForm');
Route::post('/places/create', 'PlaceController@create');

Route::get('/places', 'PlaceController@showAll');
Route::get('/places/{id}', 'PlaceController@show');
