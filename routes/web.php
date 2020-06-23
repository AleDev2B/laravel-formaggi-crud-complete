<?php

use Illuminate\Support\Facades\Route;

Route::get('/', "FormaggiController@index") -> name('home');

Route::get('/formaggio/{id}', "FormaggiController@showFormaggi") -> name('showFormaggi');

Route::get('/formaggio/delete/{id}', "FormaggiController@delete") -> name('delete');

Route::get('/create', "FormaggiController@create") -> name('create');
Route::post('/store', "FormaggiController@store") -> name('store');
Route::post('/edit/{id}', "FormaggiController@edit") -> name('edit');
Route::post('/update/{id}', "FormaggiController@update") -> name('update');
