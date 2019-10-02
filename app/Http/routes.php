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



Route::get('docente', 'docenteController@index');
Route::get('docente/create', 'docenteController@create');
Route::post('docente/store', 'docenteController@store');
Route::get('docente/{id}/edit', 'docenteController@edit');
Route::post('docente/update', 'docenteController@update');
Route::post('docente/{id}/destroy', 'docenteController@destroy');


Route::get('laboratorio/create', 'laboratorioController@create');
Route::post('laboratorio/store', 'laboratorioController@store');
Route::get('laboratorio/{id}/edit', 'laboratorioController@edit');
Route::post('laboratorio/update', 'laboratorioController@update');
Route::post('laboratorio/{id}/destroy', 'laboratorioController@destroy');

