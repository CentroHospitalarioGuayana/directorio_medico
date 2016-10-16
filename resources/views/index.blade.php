@extends('layouts.directorio')

@section('titulo', 'Directorio Medico')

@section('contenido')

<!-- Cabecera de la Pagina -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Centro Hospitalario Guayana
            <small>Directorio Médico</small>
        </h1>
    </div>
</div>
<!-- /.row -->

<!-- Fila del proyecto -->

  @foreach($especialidades as $especialidad)
    <div class="col-md-3 portfolio-item">
        <div class="item-container">
            <h4>{{$especialidad->descripcion_especialidad}}</h4>
            <a href="{{asset('/especialidades')}}/{{$especialidad->id_especialidad}}">
                <img class="img-responsive" src="{{asset('/img/especialidades')}}/{{$especialidad->imagen}}" alt="">
            </a>
        </div>
    </div>
@endforeach

    <hr>

    <!-- Pagination -->
    <div class="row text-center">
        <div class="col-lg-12">
              {{$especialidades->links()}}
        </div>
    </div>
    <!-- /.row -->

@endsection
