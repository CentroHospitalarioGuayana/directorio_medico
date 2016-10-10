@extends('layouts.admin')

@section('titulo','Medicos')

@section('contenido')

<script type="text/javascript">
/* Datatables export */

$(document).ready(function() {
    var table = $('#datatable-tabletools').DataTable();
    var tt = new $.fn.dataTable.TableTools(table);

    $(tt.fnContainer()).insertBefore('#datatable-tabletools_wrapper div.dataTables_filter');

    $('.DTTT_container').addClass('btn-group');
    $('.DTTT_container a').addClass('btn btn-default btn-md');

    $('.dataTables_filter input').attr("placeholder", "Buscar...");

});

/* Datatables reorder */

$(document).ready(function() {
    $('#datatable-reorder').DataTable({
        dom: 'Rlfrtip'
    });

    $('#datatable-reorder_length').hide();
    $('#datatable-reorder_filter').hide();

});

$(document).ready(function() {
    $('.dataTables_filter input').attr("placeholder", "Buscar...");
});
</script>

<div id="page-title">
    <h2> <i class="glyph-icon icon-user-md"></i> Medicos</h2>
    <p>Directorio Medico.</p>
</div>

<div class="panel">
    <div class="panel-body">
      <h3 class="title-hero">
            Medicos
            <div class="pull-right">
                <div class="pull-right">
                    <button class="btn btn-alt btn-sm btn-hover btn-info"><span>Nuevo</span> <i class="glyph-icon icon-plus"></i></button>
                </div>
            </div>
          </h3>


        <div class="example-box-wrapper">

            <table id="datatable-tabletools" class="table table-striped table-bordered" cellspacing="0" width="100%">

                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Descripcion</th>
                        <th>Imagen</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <!--
                <tfoot>
                    <tr>
                      <th>Id</th>
                      <th>Descripcion</th>
                      <th>Imagen</th>
                    </tr>
                </tfoot>
              -->
                <tbody>
                  @foreach($medicos as $medico)
                    <tr>
                        <td>{{$medico->id_medico}}</td>
                        <td>{{$medico->nombres_m}} {{$medico->apellidos_m}}</td>
                        <td>{{$medico->direccion}}</td>
                        <td>
                          <button class="btn btn-alt btn-sm btn-hover btn-success"><span>Editar</span> <i class="glyph-icon icon-pencil"></i></button>
                          <button class="btn btn-alt btn-sm btn-hover btn-danger"><span>Eliminar</span> <i class="glyph-icon icon-trash"></i></button>
                        </td>

                    </tr>
                    @endforeach


                </tbody>
            </table>


        </div>


    </div>

</div>
@endsection
