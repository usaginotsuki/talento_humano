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

Route::get('/', 'WelcomeController@index');

Route::get('/auth/login', 'WelcomeController@auth');

Route::get('periodo', 'PeriodoController@index');
Route::get('periodo/create', 'PeriodoController@create');
Route::post('periodo/store', 'PeriodoController@store');
Route::get('periodo/{id}/edit', 'PeriodoController@edit');
Route::post('periodo/update', 'PeriodoController@update');
Route::post('periodo/{id}/destroy', 'PeriodoController@destroy');

Route::get('carrera', 'CarreraController@index');
Route::get('carrera/create', 'CarreraController@create');
Route::post('carrera/store', 'CarreraController@store');
Route::get('carrera/{id}/edit', 'CarreraController@edit');
Route::post('carrera/update', 'CarreraController@update');
Route::post('carrera/{id}/destroy', 'CarreraController@destroy');

Route::get('campus', 'CampusController@index');
Route::get('campus/create', 'CampusController@create');
Route::post('campus/store', 'CampusController@store');
Route::get('campus/{id}/edit', 'CampusController@edit');
Route::post('campus/update', 'CampusController@update');
Route::post('campus/{id}/destroy', 'CampusController@destroy');

Route::get('hora', 'HoraController@index');
Route::get('hora/create', 'HoraController@create');
Route::post('hora/store', 'HoraController@store');
Route::get('hora/{id}/edit', 'HoraController@edit');
Route::post('hora/update', 'HoraController@update');
Route::post('hora/{id}/destroy', 'HoraController@destroy');

Route::get('hora', 'HoraController@index');
Route::get('hora/create', 'HoraController@create');