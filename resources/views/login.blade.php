@extends('layouts.login')

@section('titulo','Login')

@section('contenido')

  <div class="center-content">

        {!!Form::open(['route'=>'login.store', 'method'=> 'POST', 'class'=>'col-md-5 col-sm-5 col-xs-11 center-margin', 'id'=>'login-validation'])!!}

          <h3 class="text-center pad25B font-gray font-size-23">Directorio Medico <span class="opacity-80">v1.0</span></h3>

            @include('mensajes.msj_validacion')
            @include('mensajes.msj_error')

          <div id="login-form" class="content-box">
              <div class="content-box-wrapper pad20A">
                  <div class="form-group">
                      {!!Form::label('correo_e', 'Email:',  ['class'=>'exampleInputEmail1'])!!}
                      <div class="input-group input-group-lg"><span class="input-group-addon addon-inside bg-white font-primary"><i class="glyph-icon icon-envelope-o"></i></span>
                          {!!Form::email('correo_e', null,  ['class'=>'form-control','id'=>'exampleInputEmail1', 'placeholder'=>'Ingrese su email'])!!}

                      </div>
                  </div>
                  <div class="form-group">
                      {!!Form::label('clave', 'Clave:',  ['class'=>'exampleInputPassword1'])!!}
                      <div class="input-group input-group-lg"><span class="input-group-addon addon-inside bg-white font-primary"><i class="glyph-icon icon-unlock-alt"></i></span>
                          {!!Form::password('clave',['class'=>'form-control', 'id'=>'exampleInputPassword1', 'placeholder'=>'Ingrese su clave'])!!}
                      </div>
                  </div>
                  <div class="row">
                      <div class="checkbox-primary col-md-6" style="height: 20px">
                          <label>
                              <input type="checkbox" id="loginCheckbox1" class="custom-checkbox"> Recordarme</label>
                      </div>
                      <div class="text-right col-md-6"><a href="#" class="switch-button" switch-target="#login-forgot" switch-parent="#login-form" title="Recover password">Olvido su clave?</a></div>
                  </div>
              </div>
              <div class="button-pane">
                  {!!Form::submit('Entrar', ['class'=>'btn btn-block btn-primary'])!!}
              </div>
              {!!Form::close()!!}
          </div>

          {!!Form::open(['route'=>'login.store', 'method'=> 'POST', 'class'=>'col-md-5 col-sm-5 col-xs-11 center-margin', 'id'=>'login-validation'])!!}
          <div id="login-forgot" class="content-box modal-content hide">
              <div class="content-box-wrapper pad20A">
                  <div class="form-group">
                      {!!Form::label('correo_e', 'Email:',  ['class'=>'exampleInputEmail1'])!!}
                      <div class="input-group input-group-lg"><span class="input-group-addon addon-inside bg-white font-primary"><i class="glyph-icon icon-envelope-o"></i></span>
                        {!!Form::email('correo_e', null,  ['class'=>'form-control','id'=>'exampleInputEmail1', 'placeholder'=>'Ingrese su email'])!!}

                      </div>
                  </div>
              </div>
              <div class="button-pane text-center">
                  <button type="submit" class="btn btn-md btn-primary">Recuperar clave</button> <a href="#" class="btn btn-md btn-link switch-button" switch-target="#login-form" switch-parent="#login-forgot" title="Cancel">Cancel</a></div>
          </div>
          {!!Form::close()!!}
  </div>
@endsection
