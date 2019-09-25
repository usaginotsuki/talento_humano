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

Route::get('periodo', 'PeriodoController@index');
Route::get('periodo/crear', 'PeriodoController@crear');
Route::post('periodo/guardar', 'PeriodoController@guardar');
Route::get('periodo/{periodo}', 'PeriodoController@actualizar');
Route::delete('periodo/delete', 'PeriodoController@delete');