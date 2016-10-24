<?php

namespace directorio_medico;

use Illuminate\Database\Eloquent\Model;

class modelo_usuarios extends Model
{
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


    protected $hidden = ['password', 'remember_token'];


          public function setPasswordAttribute($valor){
              if(!empty($valor)){
                  $this->attributes['password'] = \Hash::make($valor);
              }
          }
}
