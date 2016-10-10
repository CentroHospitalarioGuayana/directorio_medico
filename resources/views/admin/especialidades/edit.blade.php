@extends('layouts.admin')

@section('titulo','Editar Especialidad')

@section('contenido')
<div id="page-title">
    <h2> <i class="glyph-icon icon-stethoscope"></i> Editar Especialidad</h2>
    <p>Directorio Medico.</p>
</div>

  <div class="panel">
                  <div class="panel-body">
                      <h3 class="title-hero">Elements</h3>
                      <div class="example-box-wrapper">

                          {!!Form::model($especialidades,['route'=>['especialidades.update',$especialidades->id_especialidad],'method'=>'PUT' ,'files'=> true, 'class'=>'form-horizontal bordered-row'])!!}

                            @include('admin.especialidades.formularios.form_especialidades')

                          {!!Form::close()!!}
                      </div>
                  </div>
</div>
@endsection
