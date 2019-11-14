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
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/text11', function () {
    return view('text11');
});

Auth::routes();

Route::get('/home', 'StudentController@index')->name('home');
Route::post('/home/_create', 'StudentController@store')->name('home.create');
Route::get('/home/_delete/{id}', 'StudentController@destroy')->name('home.delete');
Route::get('/home/_edit/{id}', 'StudentController@edit')->name('home.edit');
Route::post('/home/_update/{id}', 'StudentController@update')->name('home.update');