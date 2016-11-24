<?php

namespace directorio_medico\Http\Controllers;

use Illuminate\Http\Request;

use directorio_medico\Http\Requests;
use directorio_medico\Http\Controllers\Controller;
use directorio_medico\modelo_medicos;
use directorio_medico\modelo_especialidades;
use directorio_medico\Http\Requests\medicos_request;
use Session;
use Redirect;

class medicos_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $medicos = modelo_medicos::All();
        return view('admin.medicos.medicos',compact('medicos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $especialidades = modelo_especialidades::pluck('descripcion_especialidad','id_especialidad');

        return view('admin.medicos.create',compact('especialidades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(medicos_request $request)
    {
        $id_medico = modelo_medicos::max_medico();
        modelo_medicos::create([
                  'id_medico' => $id_medico,
                  'ci_medico' => $request['ci_medico'],
                  'nombres_m' => $request['nombres_m'],
                  'apellidos_m' => $request['apellidos_m'],
                  'tlf_f' => $request['tlf_f'],
                  'tlf_m' => $request['tlf_m'],
                  'fecha_nac' => $request['fecha_nac'],
                  'foto' => $request['foto'],
                  'correo_e' => $request['correo_e'],
                  'direccion' => $request['direccion'],
                  'consultorio' => $request['consultorio'],
                  'sexo' => $request['sexo'],
                  'pacientes_particular' => $request['pacientes_particular'],
                  'pacientes_seguro' => $request['pacientes_seguro']
                  ]);

                  Session::flash('message','El Medico Se Ha Creado Exitosamente');
                  return Redirect::to('/medicos/'.$id_medico.'/edit');

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
    public function edit($id_medico)
    {
        $medicos = modelo_medicos::find($id_medico);
        $especialidades = modelo_especialidades::pluck('descripcion_especialidad','id_especialidad');
        return view('admin.medicos.edit',['medicos'=>$medicos],compact('especialidades'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id_medico, medicos_request $request)
    {
        $medicos = modelo_medicos::find($id_medico);
        $medicos->fill($request->all());
        $medicos->save();

        Session::flash('message','El Medico Se Ha Actualizado Exitosamente');
        return Redirect::to('/medicos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_medico)
    {
        $medicos = modelo_medicos::find($id_medico);
        \Storage::disk('medicos')->delete($medicos->foto);

        modelo_medicos::destroy($id_medico);

        Session::flash('message','El Medico Ha Sido Elminado Exitosamente');
        return Redirect::to('/medicos');
    }
}
