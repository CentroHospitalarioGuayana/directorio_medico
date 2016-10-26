@extends('layouts.admin')

@section('titulo','Dashboard')

@section('contenido')

  <div id="page-title">
      <h2> <i class="glyph-icon icon-dashboard"></i> Dashboard</h2>
      <p>Directorio Medico.</p>

  </div>
  <div class="row">
        <div class="col-md-4">
          <a href="{{asset('/medicos')}}" title="Medicos" class="tile-box tile-box-shortcut btn-primary">
            <span class="bs-badge badge-absolute">{{$medicos}}</span>
              <div class="tile-header">medicos</div>
              <div class="tile-content-wrapper"><i class="glyph-icon icon-user-md"></i></div>
          </a>
        </div>

            <div class="col-md-4">
                <a href="{{asset('/especialidades')}}" title="Especialidades" class="tile-box tile-box-shortcut btn-success">
                  <span class="bs-badge badge-absolute">{{$especialidades}}</span>
                  <div class="tile-header">especialidades</div>
                  <div class="tile-content-wrapper"><i class="glyph-icon icon-stethoscope"></i></div>
                </a>
          </div>

        <div class="col-md-4">
            <a href="{{asset('/usuarios')}}" title="Usuarios" class="tile-box tile-box-shortcut btn-warning">
              <span class="bs-badge badge-absolute">{{$usuarios}}</span>
              <div class="tile-header">usuarios</div>
              <div class="tile-content-wrapper"><i class="glyph-icon icon-users"></i></div>
            </a>
        </div>
  </div>
@endsection
