<?php

namespace directorio_medico\Http\Controllers;

use Illuminate\Http\Request;
use directorio_medico\Http\Requests\perfiles_request;
use directorio_medico\modelo_perfiles;

use directorio_medico\Http\Requests;
use directorio_medico\Http\Controllers\Controller;
use Session;
use Redirect;

class perfiles_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct(){
           $this->middleware('auth');
     }
      
    public function index()
    {
      $perfiles = modelo_perfiles::All();

      return view('admin.perfiles.perfiles',compact('perfiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.perfiles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(perfiles_request $request)
    {
        modelo_perfiles::create($request->all());

        Session::flash('message','El perfil ha sido creado exitosamente');
        return Redirect::to('/perfiles');
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
    public function edit($id_perfil)
    {
        $perfiles = modelo_perfiles::find($id_perfil);

        return view('admin.perfiles.edit',compact('perfiles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id_perfil, perfiles_request $request)
    {

        $perfiles = modelo_perfiles::find($id_perfil);
        $perfiles->fill($request->all());
        $perfiles->save();

        Session::flash('message','El perfil ha sido actualizado exitosamente');

        return Redirect::to('/perfiles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_perfil)
    {
        modelo_perfiles::destroy($id_perfil);

        Session::flash('message','El perfil ha sido eliminado exitosamente');
        return Redirect::to('/perfiles');
    }
}
