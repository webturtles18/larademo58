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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::post('/', 'HomeController@index')->name('biodata.search');
Route::get('/add', 'HomeController@create')->name('biodata.create');
Route::post('/add', 'HomeController@store');
Route::get('/edit/{id}', 'HomeController@edit')->name('biodata.edit');
Route::post('/edit/{id}', 'HomeController@update');
Route::get('/delete/{id}', 'HomeController@destroy')->name('biodata.delete');
Route::get('/pdf/{id}', 'HomeController@generatePDF')->name('biodata.pdf');
