@extends('layouts.admin')

@section('titulo','Crear Usuario')

@section('contenido')
  {!!Html::script('assets/widgets/input-switch/inputswitch.js')!!}
             <script type="text/javascript">
                 /* Input switch */

                 $(function() {
                     "use strict";
                     $('.input-switch').bootstrapSwitch();
                 });
             </script>

  <div id="page-title">
      <h2> <i class="glyph-icon icon-user"></i> Nuevo Usuario</h2>
      <p>Directorio Medico.</p>

  </div>
  @include('mensajes.msj_validacion')
    <div class="panel">
                    <div class="panel-body">
                        <h3 class="title-hero">Usuario</h3>
                        <div class="example-box-wrapper">
                            {!!Form::open(['route'=>'usuarios.store','method'=>'POST', 'class'=>'form-horizontal bordered-row'])!!}

                                @include('admin.usuarios.formularios.form_usuarios')

                            {!!Form::close()!!}
                        </div>
                    </div>
  </div>
  @endsection
