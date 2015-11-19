<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');

Route::get('home', 'HomeController@index');

Route::get('siswa', 'SiswaController@index');

Route::get('siswa/add', 'SiswaController@create');

Route::post('siswa/save', 'SiswaController@store');

Route::get('siswa/edit/{id}', 'SiswaController@edit');

Route::post('siswa/update', 'SiswaController@update');

Route::get('siswa/delete/{id}', 'SiswaController@destroy');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
