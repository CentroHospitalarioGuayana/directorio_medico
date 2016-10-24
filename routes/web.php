<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
/*
Route::get('/', function () {
    return Redirect::to('/especialidades');
});
*/
Route::get('/', 'FrontController@index');
Route::resource('medicos','medicos_controller');
Route::resource('especialidades','especialidades_controller');
Route::resource('horarios','horarios_controller');
Route::resource('especialidad_medico','especialidad_medico_controller');
Route::resource('perfiles','perfiles_controller');
Route::resource('usuarios','usuarios_controller');

Route::resource('login','login_controller');

Route::get('cardiologos', 'FrontController@cardiologos');
Route::get('pediatras', 'FrontController@pediatras');
Route::get('ginecologos', 'FrontController@ginecologos');
Route::get('neurologos', 'FrontController@neurologos');
Route::get('nefrologos', 'FrontController@nefrologos');
