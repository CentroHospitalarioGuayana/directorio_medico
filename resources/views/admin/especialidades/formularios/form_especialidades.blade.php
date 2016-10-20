<div class="form-group">
      {!!Form::label('id_especialidad', 'Id', ['class' => 'col-sm-3 control-label'])!!}
      <div class="col-sm-6">
        {!!Form::text('id_especialidad', null , ['class'=>'form-control', 'placeholder'=>'Identificador de la especialidad','disabled'=>'disabled'])!!}
      </div>
</div>

<div class="form-group">
    {!!Form::label('id_especialidad', 'Nombre', ['class' => 'col-sm-3 control-label'])!!}
    <div class="col-sm-6">
      {!!Form::text('descripcion_especialidad', null , ['class'=>'form-control', 'placeholder'=>'Nombre de la especialidad'])!!}
    </div>
</div>

<div class="form-group">
    {!!Form::label('imagen', 'Imagen', ['class' => 'col-sm-3 control-label'])!!}
          <div class="col-sm-6">
              <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px"></div>
                        <div>
                          <span class="btn btn-primary btn-file"><span class="fileinput-new">Seleciona la imagen</span> <span class="fileinput-exists">Cambiar</span>
                          {!!Form::file('imagen', null , ['class'=>'form-control'])!!}
                        </span> <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remover</a>
                        </div>
                </div>
          </div>
</div>

<div class="form-group">

    <div class="col-sm-9 pull-right">
      {!!Form::submit('Guardar', ['class'=>'btn btn-alt btn-sm btn-hover btn-success'])!!}
      {!!Form::reset('Limpiar', ['class'=>'btn btn-alt btn-sm btn-hover btn-danger'])!!}
    </div>
</div>

