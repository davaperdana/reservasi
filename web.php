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

Route::get('/resepsionis','ResepsionisController@index');
Route::post('/resepsionis/create','ResepsionisController@create');
Route::get('/resepsionis/{id}/edit','ResepsionisController@edit');
Route::post('/resepsionis/{id}/update','ResepsionisController@update');
Route::get('/kamar','KamarController@index');
Route::post('/kamar/create','KamarController@create');
Route::get('/kamar/{id}/edit','KamarController@edit');
Route::post('/kamar/{id}/update','KamarController@update');
Route::get('/tipe','TipeController@index');
Route::post('/tipe/create','TipeController@create');
Route::get('/tipe/{id}/edit','TipeController@edit');
Route::post('/tipe/{id}/update','TipeController@update');
