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
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
///////////////////////////////////////////////////////////////////
Route::get('periodo', 'PeriodoController@index');
Route::get('periodo/create', 'PeriodoController@create');
Route::get('periodo/{id}/edit', 'PeriodoController@edit');
Route::post('periodo/store', 'PeriodoController@store');
Route::post('periodo/update', 'PeriodoController@update');
Route::post('periodo/{id}/destroy', 'PeriodoController@destroy');
///////////////////////////////////////////////////////////////////
Route::get('empresa','empresaController@index');
Route::get('empresa/edit/{id}','empresaController@edit');
Route::get('empresa/destroy/{id}','empresaController@destroy');
Route::get('empresa/create','empresaController@create');
Route::post('empresa/store', 'empresaController@store');
Route::post('empresa/search', 'empresaController@store');
Route::post('empresa/update', 'empresaController@update');
///////////////////////////////////////////////////////////////////
Route::get('institucion','institucionController@index');
Route::get('institucion/edit/{id}','institucionController@edit');
Route::get('institucion/destroy/{id}','institucionController@destroy');
Route::post('institucion/store', 'institucionController@store');
Route::post('institucion/search', 'institucionController@store');
Route::post('institucion/update', 'institucionController@update');
Route::get('institucion/edit/{id}','institucionController@edit');
Route::get('institucion/destroy/{id}','institucionController@destroy');
Route::resource('institucion','institucionController');

///////////////////////////////////////////////////////////////////
Route::post('control/store', 'ControlController@store');
Route::post('control/search', 'ControlController@store');
Route::post('control/update', 'ControlController@update');
Route::post('control/index', 'ControlController@index');
Route::post('control/generar', 'ControlController@generar');

Route::get('control/edit/{id}','controlController@edit');
Route::resource('control','controlController');


////////////////////////////////////////////////////////////////////////
Route::get('carrera', 'CarreraController@index');
Route::get('carrera/create', 'CarreraController@create');
Route::get('carrera/{id}/edit', 'CarreraController@edit');
Route::post('carrera/store', 'CarreraController@store');
Route::post('carrera/update', 'CarreraController@update');
Route::post('carrera/{id}/destroy', 'CarreraController@destroy');



///////////////////////////////////////////////////////////////////
Route::get('horario', 'HorarioController@index');
Route::get('horario/{laboratorio_id}/{periodo_id}/create', 'HorarioController@create');
Route::get('horario/{laboratorio_id}/{periodo_id}/edit', 'HorarioController@edit');
Route::get('horario/{id}/destroy', 'HorarioController@destroy');
Route::post('horario/store', 'HorarioController@store');
Route::post('horario/update', 'HorarioController@update');
///////////////////////////////////////////////////////////////////
Route::get('campus', 'CampusController@index');
Route::get('campus/create', 'CampusController@create');
Route::get('campus/{id}/edit', 'CampusController@edit');
Route::post('campus/store', 'CampusController@store');
Route::post('campus/update', 'CampusController@update');
Route::post('campus/{id}/destroy', 'CampusController@destroy');


///////////////////////////////////////////////////////////////////
Route::get('docente', 'docenteController@index');
Route::get('docente/create', 'docenteController@create');
Route::get('docente/{id}/edit', 'docenteController@edit');
Route::post('docente/store', 'docenteController@store');
Route::post('docente/update', 'docenteController@update');
Route::post('docente/{id}/destroy', 'docenteController@destroy');
///////////////////////////////////////////////////////////////////
Route::get('laboratorio', 'laboratorioController@index');
Route::get('laboratorio/create', 'laboratorioController@create');
Route::get('laboratorio/{id}/edit', 'laboratorioController@edit');
Route::post('laboratorio/store', 'laboratorioController@store');
Route::post('laboratorio/update', 'laboratorioController@update');
Route::post('laboratorio/{id}/destroy', 'laboratorioController@destroy');
///////////////////////////////////////////////////////////////////
Route::get('parametro', 'ParametroController@index');
Route::get('parametro/create', 'ParametroController@create');
Route::get('parametro/{id}/edit', 'ParametroController@edit');
Route::post('parametro/store', 'ParametroController@store');
Route::post('parametro/update', 'ParametroController@update');
Route::post('parametro/{id}/destroy', 'ParametroController@destroy');
////////////////////////////////////////////PDF//////////////////////////
Route::get('control/pdfcontrol/{fecha}', 'ReportesController@pdfcontrol');
Route::get('parametro/{id}/pdf', 'ParametroController@pdf');


///////////////////////////////////////////////////////////////////
Route::get('materia', 'MateriaController@index');
Route::get('materia/create', 'MateriaController@create');
Route::get('materia/{id}/edit', 'MateriaController@edit');
Route::post('materia/store', 'MateriaController@store');
Route::post('materia/update', 'MateriaController@update');
Route::post('materia/{id}/destroy', 'MateriaController@destroy');
///////////////////////////////////////////////////////////////////
Route::get('reporte/horario/sala', 'ReportesController@horarioPorSalasIndex');
Route::post('reporte/horario/sala', 'ReportesController@horarioPorSalasPost');




Route::get('materiaxcarrera', 'ReportesController@materiaxcarrera');
Route::post('materiaxcarrera/store', 'ReportesController@store');
Route::get('materiaxcarrera/{per}/{car}/pdf', 'ReportesController@pdf');

Route::get('parametro/{id}/pdf', 'ParametroController@pdf');

///////////////////////////////////////////////////////////////////
// ESTAS SON LAS RUTAS QUE CREE PARA LOS REPORTES, PERO NADIE LAS HA UTILIZADO
Route::get('reporte/horario/docente', 'ReportesController@horarioPorDocente');
Route::get('reporte/fechacontrol', 'ReportesController@fechaControl');
Route::get('reporte/hojacontrol', 'ReportesController@hojaControl');
Route::post('reporte/hojacontrol', 'ReportesController@hojaControl');
Route::post('reporte/pdfcontrol', 'ReportesController@pdfcontrol');
Route::get('reporte/materia/carrera', 'ReportesController@materiaPorCarrera');
Route::get('reporte/eventos', 'ReportesController@eventosOcasionales');
