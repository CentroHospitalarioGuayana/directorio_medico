<?php

namespace directorio_medico;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use DB;

class modelo_usuarios extends Model implements AuthenticatableContract,AuthorizableContract, CanResetPasswordContract
{
  use Authenticatable, Authorizable, CanResetPassword;

    protected $table = 'tbl_usuarios';

    protected $primaryKey = 'id_usuario';

    protected $fillable = [
        'id_usuario',
        'nombres_u',
        'apellidos_u',
        'foto',
        'sexo',
        'correo_e',
        'tlf_f',
        'direccion',
        'login',
        'clave',
        'fk_perfil',
        'estatus'
    ];


    protected $hidden = ['clave', 'remember_token'];

          public function setClaveAttribute($valor){
              if(!empty($valor)){
                  $this->attributes['clave'] = \Hash::make($valor);
              }
          }

          public static function usuarios_perfiles(){
              return DB::table('tbl_usuarios')
              ->join('tbl_perfiles', 'tbl_perfiles.id_perfil', '=', 'tbl_usuarios.fk_perfil')
              ->select('tbl_usuarios.*', 'tbl_perfiles.descripcion_perfil')
              ->get();
          }
}
