<?php

namespace directorio_medico\Http\Controllers;

use Illuminate\Http\Request;

use directorio_medico\Http\Requests;
use directorio_medico\Http\Controllers\Controller;
use Session;
use redirect;
use directorio_medico\modelo_especialidad_medico;
use directorio_medico\Http\Requests\especialidad_medico_request;

class especialidad_medico_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(especialidad_medico_request $request)
    {
        modelo_especialidad_medico::create($request->All());
        
        Session::flash('message','Especialidad Agregada');
        return Redirect::to('/medicos/create/');
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
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_especialidad_medico)
    {
        modelo_especialidad_medico::destroy($id_especialidad_medico);
    }
}
