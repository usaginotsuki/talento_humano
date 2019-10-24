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

Route::get('docente', 'docenteController@index');
Route::get('docente/create', 'docenteController@create');
Route::post('docente/store', 'docenteController@store');
Route::get('docente/{id}/edit', 'docenteController@edit');
Route::post('docente/update', 'docenteController@update');
Route::post('docente/{id}/destroy', 'docenteController@destroy');

Route::get('empresa', 'EmpresaController@index');
Route::get('empresa/create', 'EmpresaController@create');
Route::post('empresa/store', 'EmpresaController@store');
Route::get('empresa/{id}/edit', 'EmpresaController@edit');
Route::post('empresa/update', 'EmpresaController@update');
Route::post('empresa/{id}/destroy', 'EmpresaController@destroy');

Route::get('institucion', 'InstitucionController@index');
Route::get('institucion/create', 'InstitucionController@create');
Route::post('institucion/store', 'InstitucionController@store');
Route::get('institucion/{id}/edit', 'InstitucionController@edit');
Route::post('institucion/update', 'InstitucionController@update');
Route::post('institucion/{id}/destroy', 'InstitucionController@destroy');

/*
Route::post('empresa/store', 'EmpresaController@store');
Route::post('empresa/search', 'EmpresaController@store');
Route::post('empresa/update', 'EmpresaController@update');
Route::get('empresa/edit/{id}','EmpresaController@edit');
Route::get('empresa/destroy/{id}','EmpresaController@destroy');
Route::resource('empresa','EmpresaController'); */

Route::get('laboratorio', 'LaboratorioController@index');
Route::get('laboratorio/create', 'LaboratorioController@create');
Route::post('laboratorio/store', 'LaboratorioController@store');
Route::get('laboratorio/{id}/edit', 'LaboratorioController@edit');
Route::post('laboratorio/update', 'LaboratorioController@update');
Route::post('laboratorio/{id}/destroy', 'LaboratorioController@destroy');

Route::get('hora', 'HoraController@index');
Route::get('hora/create', 'HoraController@create');
Route::post('hora/store', 'HoraController@store');
Route::get('hora/{id}/edit', 'HoraController@edit');
Route::post('hora/update', 'HoraController@update');
Route::post('hora/{id}/destroy', 'HoraController@destroy');

Route::post('control/store', 'ControlController@store');
Route::post('control/search', 'ControlController@store');
Route::post('control/update', 'ControlController@update');
Route::get('control/edit/{id}','ControlController@edit');
Route::get('control/destroy/{id}','ControlController@destroy');
Route::get('control/consola', 'ControlController@consola');
Route::resource('control','ControlController');

Route::get('materia', 'MateriaController@index');
Route::get('materia/create', 'MateriaController@create');
Route::post('materia/store', 'MateriaController@store');
Route::get('materia/{id}/edit', 'MateriaController@edit');
Route::post('materia/update', 'MateriaController@update');
Route::post('materia/{id}/destroy', 'MateriaController@destroy');

Route::get('campus/{id}', [
    'uses' => 'ControlController@searchCampus',
    'as' => 'control.search.campus'
]);

