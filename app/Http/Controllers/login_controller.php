<?php

namespace directorio_medico\Http\Controllers;

use Illuminate\Http\Request;

use directorio_medico\Http\Requests;
use directorio_medico\Http\Requests\login_request;
use directorio_medico\Http\Controllers\Controller;
use Redirect;
use Session;
use Auth;
use App\modelo_usuarios;

class login_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(login_request $request)
    {
      //  if(Auth::attempt(['correo_e' => $request['correo_e'], 'clave'=> $request['clave'], 'estatus' => 'Activo'])){
        if(Auth::attempt(['correo_e' => $request['correo_e'], 'password'=> $request['password']])){
            return Redirect::to('/medicos');

          }
          else{
            Session::flash('message-error', 'Datos Incorrectos');
            return Redirect::to('/login');
          }
    }

    public function logout(){
      Auth::logout();
      return Redirect::to('/login');

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
