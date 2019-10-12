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
///////////////////////////////////////////////////////////////////

Route::get('periodo', 'PeriodoController@index');
Route::get('periodo/create', 'PeriodoController@create');
Route::post('periodo/store', 'PeriodoController@store');
Route::get('periodo/{id}/edit', 'PeriodoController@edit');
Route::post('periodo/update', 'PeriodoController@update');
Route::POST('periodo/{id}/destroy', 'PeriodoController@destroy');
///////////////////////////////////////////////////////////////////
Route::post('empresa/store', 'empresaController@store');
Route::post('empresa/search', 'empresaController@store');
Route::post('empresa/update', 'empresaController@update');
Route::get('empresa/edit/{id}','empresaController@edit');
Route::get('empresa/destroy/{id}','empresaController@destroy');
Route::get('empresa','empresaController@index');
///////////////////////////////////////////////////////////////////
Route::post('institucion/store', 'institucionController@store');
Route::post('institucion/search', 'institucionController@store');
Route::post('institucion/update', 'institucionController@update');
Route::get('institucion/edit/{id}','institucionController@edit');
Route::get('institucion/destroy/{id}','institucionController@destroy');
Route::get('institucion','institucionController@index');
///////////////////////////////////////////////////////////////////
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
///////////////////////////////////////////////////////////////////
Route::get('carrera', 'CarreraController@index');
Route::get('carrera/create', 'CarreraController@create');
Route::post('carrera/store', 'CarreraController@store');
Route::get('carrera/{id}/edit', 'CarreraController@edit');
Route::post('carrera/update', 'CarreraController@update');
Route::post('carrera/{id}/destroy', 'CarreraController@destroy');
///////////////////////////////////////////////////////////////////
Route::post('horario/store', 'HorarioController@store');
Route::get('horario/{laboratorio_id}/{periodo_id}/edit', 'HorarioController@edit');
Route::post('horario/update', 'HorarioController@update');
Route::get('horario/{laboratorio_id}/{periodo_id}/create', 'HorarioController@create');
Route::get('horario/{id}/destroy', 'HorarioController@destroy');
Route::get('horario', 'HorarioController@index');
///////////////////////////////////////////////////////////////////
Route::get('docente', 'docenteController@index');
Route::get('docente/create', 'docenteController@create');
Route::post('docente/store', 'docenteController@store');
Route::get('docente/{id}/edit', 'docenteController@edit');
Route::post('docente/update', 'docenteController@update');
Route::post('docente/{id}/destroy', 'docenteController@destroy');
///////////////////////////////////////////////////////////////////
Route::get('laboratorio', 'laboratorioController@index');
Route::get('laboratorio/create', 'laboratorioController@create');
Route::post('laboratorio/store', 'laboratorioController@store');
Route::get('laboratorio/{id}/edit', 'laboratorioController@edit');
Route::post('laboratorio/update', 'laboratorioController@update');
Route::post('laboratorio/{id}/destroy', 'laboratorioController@destroy');
///////////////////////////////////////////////////////////////////
Route::get('parametro', 'ParametroController@index');
Route::get('parametro/create', 'ParametroController@create');
Route::post('parametro/store', 'ParametroController@store');
Route::get('parametro/{id}/edit', 'ParametroController@edit');
Route::post('parametro/update', 'ParametroController@update');
Route::post('parametro/{id}/destroy', 'ParametroController@destroy');
