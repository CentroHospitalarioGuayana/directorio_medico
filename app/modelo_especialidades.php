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


  


    public static function imagen_productos(){
      return DB::table('imgProd')
      ->join('detalleproducto', 'detalleproducto.id_detalle', '=', 'imgProd.id_detalle')
      ->select('detalleproducto.nombreProducto', 'imgProd.imgProd', 'imgProd.id_imgProd')
      ->paginate(6);

    }
}
