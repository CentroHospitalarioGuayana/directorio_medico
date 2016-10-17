<?php

namespace directorio_medico;

use Illuminate\Database\Eloquent\Model;

class modelo_especialidad_medico extends Model
{
    protected $table = 'tbl_especialidad_medico';
    protected $primaryKey = 'id_especialidad_medico';
    
    protected $fillable = [
                    'fk_medico',
                    'fk_especialidad'];
    
    public $timestamps = false;
}
