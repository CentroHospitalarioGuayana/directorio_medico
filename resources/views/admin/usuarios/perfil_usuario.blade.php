@extends('layouts.admin')

@section('titulo'.'Perfil')

@section('contenido')

  @php
  $perfil = directorio_medico\modelo_perfiles::find(Auth::user()->fk_perfil);

  $foto_usuario = Auth::user()->foto;

  @endphp

  @if(!Auth::user()->foto)
    @php
      $foto_usuario = "user-img-directorio.png";
    @endphp

  @endif

  {!!Html::script('assets/widgets/tabs/tabs.js')!!}
  {!!Html::script('assets/widgets/tabs/tabs-responsive.js')!!}

  <script type="text/javascript">
      /* Responsive tabs */
      $(function () {
          "use strict";
          $('.nav-responsive').tabdrop();
      });
  </script>

  <div class="row mailbox-wrapper">
          <div class="panel-layout">
              <div class="panel-box">
                  <div class="panel-content image-box">
                      <div class="ribbon">
                          <div class="bg-primary">Mi perfil</div>
                      </div>
                      <div class="image-content font-white">
                          <div class="meta-box meta-box-bottom">
                              <img src="{{asset('/img/usuarios')}}/{{$foto_usuario}}" alt="" class="meta-image img-bordered img-circle" width="80px" height="80px">
                              <h3 class="meta-heading">{{Auth::user()->nombres_u}} {{Auth::user()->apellidos_u}} </h3>
                              <h4 class="meta-subheading">{{$perfil->descripcion_perfil}}</h4>
                            </div>
                      </div>
                      <img src="{{asset('assets/image-resources/blurred-bg-13.jpg')}}" alt="" width="100%" height="180px">
                    </div>

              </div>
          </div>
          <div class="example-box-wrapper">
              <ul class="list-group row list-group-icons">
                  <li class="col-md-3 active"><a href="#tab-example-1" data-toggle="tab" class="list-group-item"><i class="glyph-icon icon-user"></i>Informacion personal</a></li>
                  <li class="col-md-3"><a href="#tab-example-2" data-toggle="tab" class="list-group-item"><i class="glyph-icon icon-unlock-alt"></i> Configuracion de acceso</a></li>
              </ul>
              <div class="tab-content">

              <div class="tab-pane pad0A fade active in" id="tab-example-1">
                  <div class="content-box">
                    {{Form::open(['route'=>'usuarios.perfil_usuario_update', 'method'=> 'POST', 'class'=>'form-horizontal pad15L pad15R bordered-row'])}}
                      @include('admin.usuarios.formularios.form_perfil_usuario')
                    {{Form::close()}}
                  </div>
              </div>

              <div class="tab-pane fade" id="tab-example-2">
                          <div class="content-box mrg15B">
                              <h3 class="content-box-header clearfix">Change Password</h3>
                              <div class="content-box-wrapper pad0T clearfix">
                                  <form class="form-horizontal pad15L pad15R bordered-row">
                                      <div class="form-group">
                                          <label class="col-sm-3 control-label">Old password:</label>
                                          <div class="col-sm-6">
                                              <input type="text" class="form-control" id="" placeholder="">
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-sm-3 control-label">New password:</label>
                                          <div class="col-sm-6">
                                              <input type="text" class="form-control" id="" placeholder="">
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-sm-3 control-label">Repeat password:</label>
                                          <div class="col-sm-6">
                                              <input type="text" class="form-control" id="" placeholder="">
                                          </div>
                                      </div>
                                  </form>
                              </div>
                              <div class="button-pane mrg20T">
                                  <button class="btn btn-success">Update Password</button>
                              </div>
                          </div>
                      </div>
          </div>
      </div>
  </div>
@endsection
