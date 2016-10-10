<?php

namespace directorio_medico\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class especialidades_request extends FormRequest
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
              'id_especialidad',
              'descripcion_especialidad'=>'required',
              'imagen' => ''
              ];
    }
}
