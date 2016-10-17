<?php

namespace directorio_medico\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class especialidad_medico_request extends FormRequest
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
        return ['fk_medico' => 'required',
                'fk_especialidad' => 'required'];
    }
}
