@extends('layouts.directorio')

@section('titulo','Medicos')

@section('contenido')


    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatable-tabletools').DataTable({
                "language": {
                    "lengthMenu": "Mostrar _MENU_ Registros",
                    "zeroRecords": "No hubo resultados",
                    "sInfo":"Registros del _START_ al _END_ de un total de _TOTAL_ registros",
                    "info": "Pagina _PAGE_ de _PAGES_ de _MAX_ registros ",
                    "infoEmpty": "No hay registros disponibles",
                    "infoFiltered": "(Filtrados a partir de _MAX_ registros)",
                    "oPaginate": {
                        "sNext":     "»",
                        "sPrevious": "«"
                    }
                }
            });
            $('.DTTT_container').addClass('btn-group');
            $('.DTTT_container a').addClass('btn btn-info btn-md');
            $('.dataTables_filter input').attr("placeholder", "Buscar...");
        });
    </script>

    <div class="panel">
        <div class="panel-body">
            <h3 class="title-hero">
                Medicos
            </h3>

            @include('mensajes.msj_exitoso')
            <div class="example-box-wrapper">

                <table id="datatable-tabletools" class="table table-striped table-bordered" cellspacing="0" width="100%">

                    <thead>
                    <tr>
                        <th>Foto</th>
                        <th>Nombres y apellidos</th>
                        <th>Consultorio</th>
                        <th>Extensión</th>
                        <th>Numero</th>
                        <th>Especialidad</th>
                        <th>Horario</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($lista_medicos as $medico)
                        <tr>
                            <td>
                                <img src="img/medicos/{{$medico->foto}}" style: width="150 px;">
                            </td>
                            <td>{{$medico->nombres_m}} {{$medico->apellidos_m}}</td>
                            <td>{{$medico->consultorio}}</td>
                            <td>{{$medico->tlf_f}}
                            <td>{{$medico->tlf_m}}</td>
                            <td>{{$medico->descripcion_especialidad}}</td>
                            <td></td>

                        </tr>
                    @endforeach


                    </tbody>
                </table>


            </div>


        </div>

    </div>
@endsection