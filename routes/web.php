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

Route::view('/','welcome');
Route::view('contacto','contact');
Route::view('about','about');


Route::get('clientes',function(){

	$clientes = [
		'Juan Gómez',
		'Pedro Pérez',
		'Luis López',
	];

	return view('internas.clientes', [
		'clientes' => $clientes,
	]);
});