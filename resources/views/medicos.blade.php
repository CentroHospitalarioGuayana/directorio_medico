@extends('layouts.directorio')

@section('titulo','Medicos')

@section('contenido')


<!-- Doctores de la especialidad -->

<div class="row">
    <div class="col-lg-12">
        <h2 class="page-header"><i class="glyph-icon icon-dashboard"></i> {{ $medicos->first()->descripcion_especialidad}}</h2>
    </div>
    @foreach($medicos as $medico)
        <div class="col-lg-4 col-sm-6 text-center">
            <div class="perfil-container">
                <img class="img-circle img-responsive img-center" src="{{asset('/img/medicos')}}/{{$medico->foto}}" alt="" width="100px">
                <h3>Dr.(a): {{$medico->nombres_m}} {{$medico->apellidos_m}}</h3>
                <h4>Consultorio: <small>{{$medico->consultorio}}</small> Ext: <small>{{$medico->tlf_f}}</small> <h4>
                <h4 class="label label-success">Atencion</h4>
                <h4>Lun,mie,vie <small>8:00 am a 11:00 am</small></h4>

                <!-- <button href="#" class="btn btn-primary" role="button">CITA</button> -->
            </div>
        </div>
    @endforeach
</div>

@endsection