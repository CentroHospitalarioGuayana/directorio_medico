<?php

namespace directorio_medico;

use Illuminate\Database\Eloquent\Model;
use DB;
class modelo_especialidades extends Model
{
  protected $table = 'tbl_especialidades';
  protected $primaryKey = 'id_especialidad';

  protected $fillable = [
                  'descripcion_especialidad',
                  'imagen'];

    public $timestamps = false;

   public function setimagenAttribute($imagen){
        if(!empty($imagen)){
            $name = $imagen->getClientOriginalName();
            $this->attributes['imagen'] = $name;
            \Storage::disk('especialidades')->put($name, \File::get($imagen));
          }
      }


  


    public static function especialidad_medico($id_especialidad){
      return DB::table('tbl_especialidad_medico')
          ->join('tbl_medicos', 'tbl_medicos.id_medico', '=', 'tbl_especialidad_medico.fk_medico')
          ->join('tbl_especialidades', 'tbl_especialidades.id_especialidad', '=', 'tbl_especialidad_medico.fk_especialidad')
          ->select('tbl_medicos.*',  'tbl_especialidades.descripcion_especialidad')
          ->where('tbl_especialidad_medico.fk_especialidad', '=', $id_especialidad)
          ->get();

    }
}
