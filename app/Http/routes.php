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
Route::POST('periodo/{id}/destroy', 'PeriodoController@destroy');
///////////////////////////////////////////////////////////////////
Route::post('empresa/store', 'empresaController@store');
Route::post('empresa/search', 'empresaController@store');
Route::post('empresa/update', 'empresaController@update');
Route::get('empresa/edit/{id}','empresaController@edit');
Route::get('empresa/destroy/{id}','empresaController@destroy');
Route::resource('empresa','empresaController');

///////////////////////////////////////////////////////////////////
Route::post('institucion/store', 'institucionController@store');
Route::post('institucion/search', 'institucionController@store');
Route::post('institucion/update', 'institucionController@update');
Route::get('institucion/edit/{id}','institucionController@edit');
Route::get('institucion/destroy/{id}','institucionController@destroy');
Route::resource('institucion','institucionController');

///////////////////////////////////////////////////////////////////
Route::post('control/store', 'controlController@store');
Route::post('control/search', 'controlController@store');
Route::post('control/update', 'controlController@update');
Route::get('control/edit/{id}','controlController@edit');
Route::get('control/init','controlController@init');
Route::resource('control','controlController');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

////////////////////////////////////////////////////////////////////////
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

Route::get('laboratorio', 'laboratorioController@index');
Route::get('laboratorio/create', 'laboratorioController@create');
Route::post('laboratorio/store', 'laboratorioController@store');
Route::get('laboratorio/{id}/edit', 'laboratorioController@edit');
Route::post('laboratorio/update', 'laboratorioController@update');
Route::post('laboratorio/{id}/destroy', 'laboratorioController@destroy');

//----------Parametros----------------------------

Route::get('parametro', 'ParametroController@index');
Route::get('parametro/create', 'ParametroController@create');
Route::post('parametro/store', 'ParametroController@store');
Route::get('parametro/{id}/edit', 'ParametroController@edit');
Route::post('parametro/update', 'ParametroController@update');
Route::post('parametro/{id}/destroy', 'ParametroController@destroy');
//----------Materias----------------------------

Route::get('materia', 'MateriaController@index');
Route::get('materia/create', 'MateriaController@create');
Route::post('materia/store', 'MateriaController@store');
Route::get('materia/{id}/edit', 'MateriaController@edit');
Route::post('materia/update', 'MateriaController@update');
Route::post('materia/{id}/destroy', 'MateriaController@destroy');

////////////////////////////////////////////PDF//////////////////////////

Route::get('materiaxcarrera', 'ReportesController@materiaxcarrera');
Route::post('materiaxcarrera/store', 'ReportesController@store');
Route::get('materiaxcarrera/{per}/{car}/pdf', 'ReportesController@pdf');

Route::get('parametro/{id}/pdf', 'ParametroController@pdf');


///////////////////////////////////////////////////////////////////
Route::post('empresa/store', 'empresaController@store');
Route::post('empresa/search', 'empresaController@store');
Route::post('empresa/update', 'empresaController@update');
Route::get('empresa/edit/{id}','empresaController@edit');
Route::get('empresa/destroy/{id}','empresaController@destroy');
Route::resource('empresa','empresaController');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',




]);



