
<div class="form-group">
      {!!Form::label('id_medico', 'Id', ['class' => 'col-sm-3 control-label'])!!}
      <div class="col-sm-6">
        {!!Form::text('id_medico', null , ['class'=>'form-control', 'placeholder'=>'Identificador de la especialidad','disabled'=>'disabled'])!!}
      </div>
</div>

<div class="form-group">
    {!!Form::label('ci_medico', 'Documento de identidad', ['class' => 'col-sm-3 control-label'])!!}
    <div class="col-sm-6">
      {!!Form::text('ci_medico', null , ['class'=>'form-control','placeholder'=>'Documento de identidad'])!!}
    </div>
</div>

<div class="form-group">
    {!!Form::label('nombres_m', 'Nombres', ['class' => 'col-sm-3 control-label'])!!}
    <div class="col-sm-6">
      {!!Form::text('nombres_m', null , ['class'=>'form-control', 'placeholder'=>'Nombres del medico'])!!}
    </div>
</div>

<div class="form-group">
    {!!Form::label('apellidos_m', 'Apellidos', ['class' => 'col-sm-3 control-label'])!!}
    <div class="col-sm-6">
      {!!Form::text('apellidos_m', null , ['class'=>'form-control', 'placeholder'=>'Apellidos del medico'])!!}
    </div>
</div>

<div class="form-group">
    {!!Form::label('sexo', 'Sexo', ['class' => 'col-sm-3 control-label'])!!}
    <div class="col-sm-6">
      {!!Form::text('sexo', null , ['class'=>'form-control', 'placeholder'=>'Sexo'])!!}
    </div>
</div>

<div class="form-group">
    {!!Form::label('direccion', 'Consultorio', ['class' => 'col-sm-3 control-label'])!!}
    <div class="col-sm-6">
      {!!Form::text('direccion', null , ['class'=>'form-control', 'placeholder'=>'Sexo'])!!}
    </div>
</div>

<div class="form-group">
    {!!Form::label('tlf_f', 'Extension', ['class' => 'col-sm-3 control-label'])!!}
    <div class="col-sm-6">
      {!!Form::text('tlf_f', null , ['class'=>'form-control', 'placeholder'=>'Numero de extension'])!!}
    </div>
</div>

<div class="form-group">
    {!!Form::label('tlf_m', 'Telefono movil', ['class' => 'col-sm-3 control-label'])!!}
    <div class="col-sm-6">
      {!!Form::text('tlf_m', null , ['class'=>'form-control', 'placeholder'=>'Telefono movil'])!!}
    </div>
</div>

<div class="form-group">
    {!!Form::label('correo_e', 'Correo Electronico', ['class' => 'col-sm-3 control-label'])!!}
    <div class="col-sm-6">
      {!!Form::text('correo_e', null , ['class'=>'form-control', 'placeholder'=>'Correo electronico'])!!}
    </div>
</div>

<div class="form-group">
        {!!Form::label('fecha_nac', 'Fecha de nacimiento', ['class' => 'col-sm-3 control-label'])!!}
    <div class="col-sm-6">
        <div class="input-prepend input-group"><span class="add-on input-group-addon"><i class="glyph-icon icon-calendar"></i></span>
            {!!Form::text('fecha_nac', null , ['class'=>'bootstrap-datepicker form-control', 'placeholder'=>'Fecha de nacimiento', 'data-date-format'=>'yy/mm/dd'])!!}
            <!-- <input type="text" class="bootstrap-datepicker form-control" value="02/16/12" data-date-format="mm/dd/yy"> -->
        </div>
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
    {!!Form::label('pacientes_particular', 'N° de pacientes particulares', ['class' => 'col-sm-3 control-label'])!!}
    <div class="col-sm-6">
      {!!Form::number('pacientes_particular', null , ['class'=>'form-control', 'placeholder'=>'Pacientes particulares'])!!}
    </div>
</div>

<div class="form-group">
    {!!Form::label('pacientes_seguro', 'N° de pacientes por seguro', ['class' => 'col-sm-3 control-label'])!!}
    <div class="col-sm-6">
      {!!Form::number('pacientes_seguro', null , ['class'=>'form-control', 'placeholder'=>'Pacientes por seguro'])!!}
    </div>
</div>

<div class="form-group">

    <div class="col-sm-9 pull-right">
      {!!Form::submit('Guardar', ['class'=>'btn btn-alt btn-sm btn-hover btn-success'])!!}
      {!!Form::reset('Limpiar', ['class'=>'btn btn-alt btn-sm btn-hover btn-danger'])!!}
    </div>
</div>
