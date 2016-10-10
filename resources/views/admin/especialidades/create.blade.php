@extends('layouts.admin')

@section('titulo','Nueva Especialidad')

@section('contenido')
<div id="page-title">
    <h2> <i class="glyph-icon icon-stethoscope"></i> Nueva Especialidad</h2>
    <p>Directorio Medico.</p>

</div>
@include('mensajes.msj_validacion')
  <div class="panel">
                  <div class="panel-body">
                      <h3 class="title-hero">Especialidad</h3>
                      <div class="example-box-wrapper">
                          {!!Form::open(['route'=>'especialidades.store','method'=>'POST', 'files'=> true, 'class'=>'form-horizontal bordered-row'])!!}

                            @include('admin.especialidades.formularios.form_especialidades')

                          {!!Form::close()!!}
                      </div>
                  </div>
</div>
@endsection
