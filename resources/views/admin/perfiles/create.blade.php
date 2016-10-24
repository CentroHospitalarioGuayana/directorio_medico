@extends('layouts.admin')


@section('titulo','Crear Perfil')

@section('contenido')
  <div id="page-title">
      <h2> <i class="glyph-icon icon-stethoscope"></i> Nuevo Perfil</h2>
      <p>Directorio Medico.</p>

  </div>
  @include('mensajes.msj_validacion')
  <div class="panel">
      <div class="panel-body">
          <h3 class="title-hero">Perfil</h3>
          <div class="example-box-wrapper">
          {!!Form::open(['route'=>'perfiles.store', 'method'=> 'POST', 'class'=>'form-horizontal bordered-row'])!!}

              @include('admin.perfiles.formularios.form_perfiles')

          {!!Form::close()!!}
        </div>
      </div>  
</div>
@endsection
