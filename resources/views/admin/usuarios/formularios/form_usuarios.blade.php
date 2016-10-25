
<div class="form-group">
      {!!Form::label('id_usuario', 'Id', ['class' => 'col-sm-3 control-label'])!!}
      <div class="col-sm-6">
        {!!Form::text('id_usuario', null , ['class'=>'form-control', 'placeholder'=>'Identificador de la especialidad','disabled'=>'disabled'])!!}
      </div>
</div>

<div class="form-group">
    {!!Form::label('nombres_u', 'Nombres', ['class' => 'col-sm-3 control-label'])!!}
    <div class="col-sm-6">
      {!!Form::text('nombres_u', null , ['class'=>'form-control', 'placeholder'=>'Nombres del usuario'])!!}
    </div>
</div>

<div class="form-group">
    {!!Form::label('apellidos_u', 'Apellidos', ['class' => 'col-sm-3 control-label'])!!}
    <div class="col-sm-6">
      {!!Form::text('apellidos_u', null , ['class'=>'form-control', 'placeholder'=>'Apellidos del usuario'])!!}
    </div>
</div>

<div class="form-group">
    {!!Form::label('sexo', 'Sexo', ['class' => 'col-sm-3 control-label'])!!}
    <div class="col-sm-6">
      {!!Form::select('sexo', ['Masculino' => 'Masculino', 'Femenino' => 'Femenino', 'Otro' => 'Otro'], null, ['class'=>'form-control'])!!}
    </div>
</div>

<div class="form-group">
    {!!Form::label('direccion', 'Direccion', ['class' => 'col-sm-3 control-label'])!!}
    <div class="col-sm-6">
      {!!Form::text('direccion', null , ['class'=>'form-control', 'placeholder'=>'Direccion'])!!}
    </div>
</div>

<div class="form-group">
    {!!Form::label('tlf_f', 'Telefono', ['class' => 'col-sm-3 control-label'])!!}
    <div class="col-sm-6">
      {!!Form::text('tlf_f', null , ['class'=>'form-control', 'placeholder'=>'Numero de telefono'])!!}
    </div>
</div>


<div class="form-group">
    {!!Form::label('correo_e', 'Correo Electronico', ['class' => 'col-sm-3 control-label'])!!}
    <div class="col-sm-6">
      {!!Form::text('correo_e', null , ['class'=>'form-control', 'placeholder'=>'Correo electronico'])!!}
    </div>
</div>

<div class="form-group">
    {!!Form::label('foto', 'Foto', ['class' => 'col-sm-3 control-label'])!!}
          <div class="col-sm-6">
              <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px"></div>
                        <div>
                          <span class="btn btn-default btn-file"><span class="fileinput-new">Seleciona la imagen</span> <span class="fileinput-exists">Cambiar</span>
                          {!!Form::file('foto', null , ['class'=>'form-control'])!!}
                        </span> <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remover</a>
                        </div>
                </div>
          </div>
</div>

<div class="form-group">
    {!!Form::label('login', 'Login', ['class' => 'col-sm-3 control-label'])!!}
    <div class="col-sm-6">
      {!!Form::text('login', null , ['class'=>'form-control', 'placeholder'=>'Login'])!!}
    </div>
</div>

<div class="form-group">
    {!!Form::label('clave', 'Clave', ['class' => 'col-sm-3 control-label'])!!}
    <div class="col-sm-6">
      {!!Form::password('clave', ['class'=>'form-control', 'placeholder'=>'Clave'])!!}
    </div>
</div>

<div class="form-group">
    {!!Form::label('fk_perfil', 'Perfil', ['class' => 'col-sm-3 control-label'])!!}
    <div class="col-sm-6">
      {!!Form::select('fk_perfil',$perfiles,null, ['class'=>'form-control'])!!}
    </div>
</div>

<div class="form-group">
    {!!Form::label('estatus', 'Estatus', ['class' => 'col-sm-3 control-label'])!!}
      <div class="col-sm-6">

        {!!Form::checkbox('estatus', null, false, ['class'=>'input-switch', 'data-on-color'=>'primary', 'data-size'=>'medium', 'data-on-text'=>'Activo', 'data-off-text'=>'Inactivo'])!!}
        <!--<input type="checkbox" data-on-color="primary"  class="input-switch"  data-size="medium" data-on-text="On" data-off-text="Off"> -->
      </div>
</div>

<div class="form-group">

    <div class="col-sm-9 pull-right">
      {!!Form::submit('Guardar', ['class'=>'btn btn-alt btn-sm btn-hover btn-success'])!!}
      {!!Form::reset('Limpiar', ['class'=>'btn btn-alt btn-sm btn-hover btn-danger'])!!}
    </div>
</div>
