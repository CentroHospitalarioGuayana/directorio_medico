<?php

namespace directorio_medico;

use Illuminate\Database\Eloquent\Model;

class modelo_horarios extends Model
{
    protected $table= 'tbl_horarios';
    protected $Primarykey = 'id_horario';

    protected $fillable = [
              'descripcion_horario',
              'dia_lunes',
              'dia_martes',
              'dia_miercoles',
              'dia_jueves',
              'dia_viernes',
              'dia_sabado',
              'dia_domingo',
              'hora_inicio',
              'hora_fin'];
              
    public $timestamps = false;
}
