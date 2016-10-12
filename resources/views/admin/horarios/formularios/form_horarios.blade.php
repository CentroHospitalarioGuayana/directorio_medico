<div class="form-group">
      {!!Form::label('id_horario', 'Id', ['class' => 'col-sm-3 control-label'])!!}
      <div class="col-sm-6">
        {!!Form::text('id_horario', null , ['class'=>'form-control', 'placeholder'=>'Identificador de la especialidad','disabled'=>'disabled'])!!}
      </div>
</div>

<div class="form-group">
    {!!Form::label('descripcion_horario', 'Descripción', ['class' => 'col-sm-3 control-label'])!!}
    <div class="col-sm-6">
      {!!Form::text('descripcion_horario', null , ['class'=>'form-control', 'placeholder'=>'Nombre del horario'])!!}
    </div>
</div>


<div class="form-group">
    {!!Form::label('Dias', 'Dias', ['class' => 'col-sm-3 control-label'])!!}
    <div class="col-sm-8">
      <label class="checkbox-inline">
        {!!Form::checkbox('dia_lunes', null, ['class'=>'form-control'])!!}
        Lunes
      </label>
      <label class="checkbox-inline">
        {!!Form::checkbox('dia_martes', null, ['class'=>'form-control'])!!}
        Martes
      </label>
      <label class="checkbox-inline">
        {!!Form::checkbox('dia_miercoles', null, ['class'=>'form-control'])!!}
        Miercoles
      </label>
      <label class="checkbox-inline">
        {!!Form::checkbox('dia_jueves', null, ['class'=>'form-control'])!!}
        Jueves
      </label>
      <label class="checkbox-inline">
        {!!Form::checkbox('dia_viernes', null, ['class'=>'form-control'])!!}
        Viernes
      </label>
      <label class="checkbox-inline">
        {!!Form::checkbox('dia_sabado', null, ['class'=>'form-control'])!!}
        Sabado
      </label>
      <label class="checkbox-inline">
        {!!Form::checkbox('dia_domingo', null, ['class'=>'form-control'])!!}
        Domingo
      </label>
    </div>
</div>

<div class="form-group">
    {!!Form::label('hora_inicio', 'Hora de inicio', ['class' => 'col-sm-3 control-label'])!!}
    <div class="col-sm-2">
        <div class="bootstrap-timepicker dropdown">
            {!!Form::text('hora_inicio', null , ['class'=>'timepicker-example form-control'])!!}

        </div>
    </div>
    {!!Form::label('hora_fin', 'Hora de fin', ['class' => 'col-sm-2 control-label'])!!}
    <div class="col-sm-2">
        <div class="bootstrap-timepicker dropdown">
            {!!Form::text('hora_fin', null , ['class'=>'timepicker-example form-control'])!!}

        </div>
    </div>
</div>


<div class="form-group">

    <div class="col-sm-9 pull-right">
      {!!Form::submit('Guardar', ['class'=>'btn btn-alt btn-sm btn-hover btn-success'])!!}
      {!!Form::reset('Limpiar', ['class'=>'btn btn-alt btn-sm btn-hover btn-danger'])!!}
    </div>
</div>
