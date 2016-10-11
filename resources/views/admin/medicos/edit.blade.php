@extends('layouts.admin')

@section('titulo','Editar Medico')

@section('contenido')
<div id="page-title">
    <h2> <i class="glyph-icon icon-stethoscope"></i> Editar Medico</h2>
    <p>Directorio Medico.</p>

</div>
@include('mensajes.msj_validacion')
  <div class="panel">
                  <div class="panel-body">
                      <h3 class="title-hero">Medicos</h3>
                      <div class="example-box-wrapper">

                          {!!Form::model($medicos,['route'=>['medicos.update',$medicos->id_medico],'method'=>'PUT' ,'files'=> true, 'class'=>'form-horizontal bordered-row'])!!}

                            @include('admin.medicos.formularios.form_medicos')

                          {!!Form::close()!!}
                      </div>
                  </div>
</div>
@endsection
