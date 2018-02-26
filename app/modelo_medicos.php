<?php

namespace directorio_medico;

use Illuminate\Database\Eloquent\Model;
use DB;

class modelo_medicos extends Model
{
  protected $table = 'tbl_medicos';
  protected $primaryKey = 'id_medico';

  protected $fillable = [
                  'id_medico',
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
                  'consultorio',
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

      public static function max_medico(){
        $max  = DB::table('tbl_medicos')
        ->max('id_medico');

        $max += 1;
        
        return $max;

      }

    public static function lista(){
        $lista_medicos = DB::select('select a.foto, a.nombres_m, a.apellidos_m , a.consultorio, a.tlf_f, a.tlf_m, c.descripcion_especialidad
                            from tbl_medicos a
                            Inner Join tbl_especialidad_medico b ON b.fk_medico = a.id_medico
                            Inner Join tbl_especialidades c ON c.id_especialidad = b.fk_especialidad');

        return $lista_medicos;
    }
}
