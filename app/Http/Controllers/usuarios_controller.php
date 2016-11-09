<?php

namespace directorio_medico\Http\Controllers;

use Illuminate\Http\Request;

use directorio_medico\Http\Requests;
use directorio_medico\Http\Controllers\Controller;
use directorio_medico\Http\Requests\usuarios_request;
use directorio_medico\Http\Requests\usuarios_update_request;
use directorio_medico\Http\Requests\password_update_request;
use directorio_medico\modelo_usuarios;
use directorio_medico\modelo_perfiles;
use Redirect;
use Session;
use Auth;
use Hash;

class usuarios_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $usuarios = modelo_usuarios::usuarios_perfiles();
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
        return Redirect::to('/usuarios');

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

      return view('admin.usuarios.edit',compact('usuarios','perfiles'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(usuarios_update_request $request, $id_usuario)
    {
       $usuarios = modelo_usuarios::find($id_usuario);
       $usuarios->fill($request->all());
       $usuarios->save();

       Session::flash('message','El usuario ha sido modificado exitosamente');
       return Redirect::to('/usuarios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_usuario)
    {
        $usuarios = modelo_usuarios::find($id_usuario);
        \Storage::disk('usuarios')->delete($usuarios->foto);

        modelo_usuarios::destroy($id_usuario);

        Session::flash('message','El usuario ha sido eliminado exitosamente');
        return Redirect::to('/usuarios');
    }

    public function perfil_usuario()
    {
        return view('admin.usuarios.perfil_usuario');

    }

    public function perfil_usuario_update(usuarios_update_request $request){

      /*
        $usuarios = modelo_usuarios::find($request->$id_usuario);
        $usuarios->fill($request->all());
        $usuarios->save();
        */
        $usuarios = new modelo_usuarios;
        $usuarios->where('correo_e', '=', Auth::user()->correo_e)
             ->update(['nombres_u' => $request['nombres_u'], 'apellidos_u' => $request['apellidos_u'], 'foto'=>$request['foto']]);

        Session::flash('message','Sus datos han sido modificado exitosamente');
        return Redirect::to('/perfil');

    }


    public function password(){

    }

    public function password_update(password_update_request $request){

      if (Hash::check($request->password_actual, Auth::user()->password)){
                $usuarios = new modelo_usuarios();

                $usuarios->where('correo_e', '=', Auth::user()->correo_e)
                     ->update(['password' => bcrypt($request->password)]);

                     Session::flash('message','Sus datos han sido modificado exitosamente');
                     return Redirect::to('/perfil');
            }
            else{
              Session::flash('message-error','Clave actual incorrecta');
              return Redirect::to('/perfil');

            }

    }


}
