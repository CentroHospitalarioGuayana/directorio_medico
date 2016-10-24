<?php

namespace directorio_medico\Http\Controllers;

use Illuminate\Http\Request;

use directorio_medico\Http\Requests;
use directorio_medico\Http\Controllers\Controller;

use directorio_medico\modelo_usuarios;
use directorio_medico\modelo_perfiles;
use Redirect;
use Session;

class usuarios_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = modelo_usuarios::All();
        return view('admin.usuarios.usuarios',compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $perfiles = modelo_perfiles::pluck('descripcion_perfil','id_perfil');
        return view('admin.usuarios.create',compact('perfiles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(usuarios_request $request)
    {
        modelo_usuarios::create($request->All());

        Session::flash('message','El usuario ha sido creado exitosamente');
        Redirect::to('/usuarios');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_usuario)
    {
      $perfiles = modelo_perfiles::pluck('descripcion_perfil','id_perfil');
      $usuarios = modelo_usuarios::find($id_usuario);

      return view('admin.usuarios.edit',['usuarios'=>$usuarios],compact('perfiles'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       modelo_usuarios::edit($request->All());

       Session::flash('message','El usuario ha sido modificado exitosamente');
       Redirect::to('/usuarios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_usuario)
    {
        modelo_usuarios::destroy($id_usuario);

        Session::flash('message','El usuario ha sido eliminado exitosamente');
        Redirect::to('/usuarios');
    }
}
