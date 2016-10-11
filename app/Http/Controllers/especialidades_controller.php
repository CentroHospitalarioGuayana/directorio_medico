<?php

namespace directorio_medico\Http\Controllers;

use Illuminate\Http\Request;

use directorio_medico\Http\Requests;
use directorio_medico\Http\Controllers\Controller;
use directorio_medico\Http\Requests\especialidades_request;
use directorio_medico\modelo_especialidades;
use Session;
use Redirect;


class especialidades_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $especialidades = modelo_especialidades::All();
        return view('admin.especialidades.especialidades',compact('especialidades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view ('admin.especialidades.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(especialidades_request $request)
    {
      modelo_especialidades::create([
           'id_especialidad' =>$request[''],
           'descripcion_especialidad' =>$request['descripcion_especialidad'],
           'imagen' =>$request['imagen']
           ]);

           //$request->file('uploaded_file')->store($request['img_especialidad'], 'especialidades');

           Session::flash('message','La Especialidad Ha Sido Creada Exitosamente');
           return Redirect::to('/especialidades');
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
    public function edit($id_especialidad)
    {
        $especialidades = modelo_especialidades::find($id_especialidad);
        return view('admin.especialidades.edit',['especialidades'=>$especialidades]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id_especialidad, especialidades_request $request)
    {


          $especialidades = modelo_especialidades::find($id_especialidad);
          $especialidades->fill($request->all());
          $especialidades->save();

         Session::flash('message','La Especialida Ha Sido Eliminada Exitosamente');
         return Redirect::to('/especialidades');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_especialidad)
    {
        $especialidades = modelo_especialidades::find($id_especialidad);
        \Storage::disk('especialidades')->delete($especialidades->imagen);

        modelo_especialidades::destroy($id_especialidad);

        Session::flash('message','La Especialidad Ha Sido Eliminada Exitosamente');
        return Redirect::to('/especialidades');
    }
}
