<?php

use Illuminate\Http\Request;

Route::get('users', 'UserController@users');
Route::get('resepsionis', 'ResepsionisController@resepsionis');
Route::get('kamar', 'KamarController@kamar');
Route::get('tipe', 'TipeController@tipe');
Route::post('users', 'UserController@users');
Route::post('resepsionis', 'ResepsionisController@resepsionis');
Route::post('kamar', 'KamarController@kamar');
Route::post('tipe', 'TipeController@tipe');