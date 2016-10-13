<?php

namespace directorio_medico\Http\Controllers;

use Illuminate\Http\Request;

use directorio_medico\Http\Requests;
use directorio_medico\Http\Controllers\Controller;
use directorio_medico\Http\Requests\horarios_request;
use directorio_medico\modelo_horarios;
use Redirect;
use Session;


class horarios_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $horarios = modelo_horarios::All();

        return view('admin.horarios.horarios',compact('horarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.horarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(horarios_request $request)
    {
        modelo_horarios::create($request->All());

        /*modelo_horarios::create([
                    'id_horario'=> $request[''],
                    'descripcion_horario' => $request['descripcion_horario'],
                    'hora_inicio' => $request['hora_inicio'],
                    'hora_fin' => $request['hora_fin'],
                    'dia_lunes' => $request['dia_lunes'],
                    'dia_lunes' => $request['dia_martes']
                   ]);
*/
        Session::flash('message','El Horario ha sido creado exitosamente.');
        return Redirect::to('/horarios');
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
    public function destroy($id)
    {
        //
    }
}
