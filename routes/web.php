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

Route::group(['middleware' => 'auth'], function()
{
  Route::resource('admin','admin_controller');
  Route::resource('medicos','medicos_controller');
  Route::resource('especialidades','especialidades_controller');
  Route::resource('horarios','horarios_controller');
  Route::resource('especialidad_medico','especialidad_medico_controller');
  Route::resource('perfiles','perfiles_controller');
  Route::resource('usuarios','usuarios_controller');
  Route::get('perfil', 'usuarios_controller@perfil_usuario');
});


Route::resource('login','login_controller');
Route::resource('logout','login_controller@logout');
