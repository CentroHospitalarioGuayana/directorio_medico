@extends('layouts.admin')

@section('titulo','Especialidades')

@section('contenido')

{!!Html::script('assets/widgets/modal/modal.js')!!}

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
    <h2> <i class="glyph-icon icon-stethoscope"></i> Especialidades</h2>
    <p>Directorio Medico.</p>
</div>

<div class="panel">
    <div class="panel-body">
      <h3 class="title-hero">
            Especialidades
            <div class="pull-right">
                <div class="pull-right">
                    <a class="btn btn-alt btn-sm btn-hover btn-info" href="{!!asset('/especialidades/create')!!}"><span>Nuevo</span> <i class="glyph-icon icon-plus"></i></a>
                </div>
            </div>
          </h3>
        <div class="example-box-wrapper">
      @if($especialidades->count())
            <table id="datatable-tabletools" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Imagen</th>
                        <th>Descripcion</th>
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
                  @foreach($especialidades as $especialidad)
                    <tr>
                        <td>{{$especialidad->id_especialidad}}</td>
                        <td>
                          <img src="img/especialidades/{{$especialidad->imagen}}" style: width="150 px;">
                        </td>
                        <td>{{$especialidad->descripcion_especialidad}}</td>
                        <td>
                          {!!Html::decode(link_to_route('especialidades.edit', '<span>Editar</span> <i class="glyph-icon icon-pencil"></i>', $parameters = $especialidad->id_especialidad, $attributes = ['class' => 'btn btn-alt btn-sm btn-hover btn-success'], array())) !!}

                          <button class="btn btn-alt btn-sm btn-hover btn-danger" data-toggle="modal" data-target=".bs-example-modal-sm{{$especialidad->id_especialidad}}"><span>Eliminar</span> <i class="glyph-icon icon-trash"></i></button>

                                <div class="modal fade bs-example-modal-sm{{$especialidad->id_especialidad}}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title">Eliminar</h4></div>
                                            <div class="modal-body">
                                              {!!Form::open(['route'=>['especialidades.destroy',$especialidad->id_especialidad],'method'=>'DELETE'])!!}
                                                  Desea eliminar la especialiad? <BR>
                                                  <?php echo "<strong>".$especialidad->descripcion_especialidad."</strong>"; ?>
                                            </div>
                                            <div class="modal-footer">

                                                {!!Form::submit('Si', array('class' => 'btn btn-danger'))!!}
                                                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                                {!!Form::close()!!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </td>

                    </tr>
                    @endforeach


                </tbody>
            </table>
            @else
              <strong>No existen especialidades</strong>
            @endif

        </div>
    </div>
</div>
@endsection
