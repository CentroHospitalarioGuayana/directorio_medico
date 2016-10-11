@extends('layouts.admin')

@section('titulo','Nuevo Medico')

@section('contenido')

{!!Html::script('assets/widgets/datepicker/datepicker.js')!!}
            <script type="text/javascript">
                /* Datepicker bootstrap */

                $(function() {
                    "use strict";
                    $('.bootstrap-datepicker').bsdatepicker({
                        format: 'yyyy-mm-dd'
                    });
                });
            </script>

<div id="page-title">
    <h2> <i class="glyph-icon icon-stethoscope"></i> Nuevo Medico</h2>
    <p>Directorio Medico.</p>

</div>
@include('mensajes.msj_validacion')
  <div class="panel">
                  <div class="panel-body">
                      <h3 class="title-hero">Medico</h3>
                      <div class="example-box-wrapper">
                          {!!Form::open(['route'=>'medicos.store','method'=>'POST', 'files'=> true, 'class'=>'form-horizontal bordered-row'])!!}

                            @include('admin.medicos.formularios.form_medicos')

                          {!!Form::close()!!}
                      </div>
                  </div>
</div>
@endsection
