<?php

namespace directorio_medico\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class medicos_request extends FormRequest
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
        return ['ci_medico' => 'size:6',
                'nombres_m'=> 'required',
                'apellidos_m' =>'required',
                'fecha_nac',
                'edad',
                'foto',
                'tlf_f' => 'required',
                'tlf_m' => 'required',
                'correo_e' =>'email',
                'direccion',
                'sexo',
                'pacientes_particular',
                'pacientes_seguro' ];
    }
}
