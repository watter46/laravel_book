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

use App\Http\Controllers\HelloController;

Route::get('/hello', 'HelloController@index')->name('index');
Route::post('/hello', 'HelloController@send')->name('send');

// Route::get('/hello/{person}', 'HelloController@index');

// Route::get('/hello/{id}', 'HelloController@index');
// Route::get('/hello/{id}/{name}', 'HelloController@save');

// Route::get('/hello/json', 'HelloController@json');
// Route::get('/hello/json/{id}', 'HelloController@json');


// Route::get('/hello/other', 'HelloController@other');

Route::get('/test', 'HelloController@test');
