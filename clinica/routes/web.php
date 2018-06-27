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
use app\Medico;

Route::get('/','FrontEndController@index');

Route::get('medico', 'MedicoController@medicos');

Route::post('medico','MedicoController@store');

Route::get('consultarMedico','MedicoController@consultarMedicos');

Route::get('consMedico','MedicoController@index');

Route::get('expediente','ExpedienteController@expedientes');

Route::post('expediente','ExpedienteController@store');

Route::get('consPaciente','ExpedienteController@index');

