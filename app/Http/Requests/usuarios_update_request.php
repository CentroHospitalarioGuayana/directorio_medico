<?php

namespace directorio_medico\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class usuarios_update_request extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          'id_usuario',
          'nombres_u' => 'required',
          'apellidos_u' => 'required',
          'foto',
          'sexo',
          'correo_e' => 'required|email|',
          'tlf_f',
          'direccion',
          'login' => 'required',
          'clave'=> '',
          'fk_perfil' => 'required',
          'estatus'
        ];
    }
}
