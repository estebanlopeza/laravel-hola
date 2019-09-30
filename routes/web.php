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

Route::view('/', 'home');

Route::get('contact', 'ContactFormController@create')->name('contact.create');
Route::post('contact', 'ContactFormController@store')->name('contact.store');

Route::view('about', 'about');
//Route::view('about', 'about')->middleware('test');

/*
Route::get('clientes', 'ClientesController@index');
Route::get('clientes/create', 'ClientesController@create');
Route::post('clientes', 'ClientesController@store');
Route::get('clientes/{cliente}', 'ClientesController@show');
Route::get('clientes/{cliente}/edit', 'ClientesController@edit');
Route::patch('clientes/{cliente}', 'ClientesController@update');
Route::delete('clientes/{cliente}', 'ClientesController@destroy');
*/
Route::resource('clientes', 'ClientesController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
