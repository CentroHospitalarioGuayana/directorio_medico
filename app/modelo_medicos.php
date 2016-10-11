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
                  'foto',
                  'tlf_f',
                  'tlf_m',
                  'correo_e',
                  'direccion',
                  'sexo',
                  'pacientes_particular',
                  'pacientes_seguro'];

    public $timestamps = false;

    public function setfotoAttribute($foto){
         if(!empty($foto)){
             $name = $foto->getClientOriginalName();
             $this->attributes['foto'] = $name;
             \Storage::disk('medicos')->put($name, \File::get($foto));
           }
      }
}
