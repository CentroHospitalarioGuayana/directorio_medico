<?php

namespace directorio_medico;

use Illuminate\Database\Eloquent\Model;

class modelo_horarios extends Model
{
    protected $table= 'tbl_horarios';
    protected $Primarykey = 'id_horario';

    protected $fillable = [
              'fk_medico',
              'descripcion_horario',
              'hora_inicio',
              'hora_fin',
              'dia_lunes',
              'dia_martes',
              'dia_miercoles',
              'dia_jueves',
              'dia_viernes',
              'dia_sabado',
              'dia_domingo'];

    public $timestamps = false;
}
