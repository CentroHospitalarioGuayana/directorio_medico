<?php

namespace directorio_medico;

use Illuminate\Database\Eloquent\Model;

class modelo_perfiles extends Model
{
  
    protected $table = 'tbl_perfiles';

    protected $primaryKey = 'id_perfil';

    protected $fillable =[
          'id_perfil',
          'descripcion_perfil'
    ];
}
