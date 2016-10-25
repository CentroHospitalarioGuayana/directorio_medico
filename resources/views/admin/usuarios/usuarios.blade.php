@extends('layouts.admin')

@section('titulo','Usuarios')

@section('contenido')
  <script type="text/javascript">
  /* Datatables export */

  /*
      $(document).ready(function() {
      var table = $('#datatable-tabletools').DataTable();
      var tt = new $.fn.dataTable.TableTools(table);

      $(tt.fnContainer()).insertBefore('#datatable-tabletools_wrapper div.dataTables_filter');

      $('.DTTT_container').addClass('btn-group');
      $('.DTTT_container a').addClass('btn btn-info btn-md');

      $('.dataTables_filter input').attr("placeholder", "Buscar...");

  });
  */

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

  <div id="page-title">
      <h2> <i class="glyph-icon icon-user"></i> Usuarios</h2>
      <p>Directorio Medico.</p>

  </div>
      @include('mensajes.msj_exitoso')
  <div class="panel">
      <div class="panel-body">
        <h3 class="title-hero">
              Usuarios
              <div class="pull-right">
                  <div class="pull-right">
                      <a class="btn btn-alt btn-sm btn-hover btn-info" href="{!!asset('/usuarios/create')!!}"><span>Nuevo</span> <i class="glyph-icon icon-plus"></i></a>
                  </div>
              </div>
            </h3>
          <div class="example-box-wrapper">
              <table id="datatable-tabletools" class="table table-striped table-bordered" cellspacing="0" width="100%">
                  <thead>
                      <tr>
                          <th>Id</th>
                          <th>Nombres</th>
                          <th>Perfil</th>
                          <th>Email</th>
                          <th>Login</th>
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
                    @foreach($usuarios as $usuario)
                      <tr>
                          <td>{{$usuario->id_usuario}}</td>
                          <td>{{$usuario->nombres_u}} {{$usuario->apellidos_u}}</td>
                          <td>{{$usuario->descripcion_perfil}}</td>
                          <td>{{$usuario->correo_e}}</td>
                          <td>{{$usuario->login}}</td>
                          <td>
                            {!!Html::decode(link_to_route('usuarios.edit', '<span>Editar</span> <i class="glyph-icon icon-pencil"></i>', $parameters = $usuario->id_usuario, $attributes = ['class' => 'btn btn-alt btn-sm btn-hover btn-success'], array())) !!}

                            <button class="btn btn-alt btn-sm btn-hover btn-danger" data-toggle="modal" data-target=".bs-example-modal-sm{{$usuario->id_usuario}}"><span>Eliminar</span> <i class="glyph-icon icon-trash"></i></button>
                            <!-- Modal eliminar usuario -->
                                  <div class="modal fade bs-example-modal-sm{{$usuario->id_usuario}}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-sm">
                                          <div class="modal-content">
                                              <div class="modal-header">
                                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                  <h4 class="modal-title">Eliminar</h4>
                                              </div>
                                              <div class="modal-body">
                                                    {!!Form::open(['route'=>['usuarios.destroy',$usuario->id_usuario],'method'=>'DELETE'])!!}
                                                    Desea eliminar el usuario? <BR>
                                                    <?php echo "<strong>".$usuario->nombres_u.' '.$usuario->apellidos_u."</strong>"; ?>
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
          </div>
      </div>
  </div>
  @endsection
