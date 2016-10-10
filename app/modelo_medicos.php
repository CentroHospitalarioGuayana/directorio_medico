<?php

namespace directorio_medico;

use Illuminate\Database\Eloquent\Model;

class modelo_medicos extends Model
{
  protected $table = 'tbl_medicos';
  protected $primaryKey = 'id_medico';

  protected $fillable = [
                  'ci_medico',
                  'nombres_m',
                  'apellidos_m',
                  'fecha_nac',
                  'edad',
                  'img_medico',
                  'tlf_f',
                  'tlf_m',
                  'correo_e',
                  'direccion',
                  'sexo',
                  'pacientes_particular',
                  'paciente_seguro'];

    public $timestamps = false;
}
