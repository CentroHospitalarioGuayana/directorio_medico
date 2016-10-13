@extends('layouts.admin')

@section('titulo','Nuevo Horario')

@section('contenido')
{!!Html::script('assets/widgets/timepicker/timepicker.js')!!}

            <script type="text/javascript">
                /* Timepicker */

                $(function() {
                    "use strict";
                    $('.timepicker-example').timepicker();
                });
            </script>


<div id="page-title">
    <h2> <i class="glyph-icon icon-clock-o"></i> Nuevo Horario</h2>
    <p>Directorio Medico.</p>

</div>
@include('mensajes.msj_validacion')
  <div class="panel">
                  <div class="panel-body">
                      <h3 class="title-hero">Especialidad</h3>
                      <div class="example-box-wrapper">
                          {!!Form::open(['route'=>'horarios.store','method'=>'POST', 'class'=>'form-horizontal bordered-row'])!!}

                              @include('admin.horarios.formularios.form_horarios')

                          {!!Form::close()!!}
                      </div>
                  </div>
</div>
@endsection
