<?php

namespace directorio_medico\Http\Controllers;

use Illuminate\Http\Request;

use directorio_medico\Http\Requests;
use directorio_medico\modelo_especialidades;

class FrontController extends Controller
{
    public function index()
    {
      $especialidades = modelo_especialidades::paginate(12);
    	return view('index',compact('especialidades'));
    }
    public function perfil()
    {
    	return view('admin.usuarios.perfil_usuario');
    }


}
