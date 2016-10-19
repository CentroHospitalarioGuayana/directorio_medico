<?php

namespace directorio_medico\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class horarios_request extends FormRequest
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
          'id_horario',
          'fk_medico',
          'fk_especialidad',  
          'descripcion_horario',
          'hora_inicio' => 'required',
          'hora_fin' => 'required',
          'dia_lunes',
          'dia_martes',
          'dia_miercoles',
          'dia_jueves',
          'dia_viernes',
          'dia_sabado',
          'dia_domingo'
          ];
    }
}
