{!!Form::hidden('fk_medico', null , ['class'=>'form-control', 'placeholder'=>' id medico',])!!}

<div class="form-group">
    {!!Form::label('descripcion_horario', 'Descripción', ['class' => 'col-sm-3 control-label'])!!}
    <div class="col-sm-6">
      {!!Form::text('descripcion_horario', null , ['class'=>'form-control', 'placeholder'=>'Nombre del horario'])!!}
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label">Dias</label>
    <div class="col-sm-8">
                <div class="checkbox checkbox-success">
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox110" class="custom-checkbox form-control">
                        Lunes
                    </label>
                </div>
                <div class="checkbox checkbox-success"><label class="checkbox-inline"><input type="checkbox" id="inlineCheckbox111" checked="checked" class="custom-checkbox form-control"> Checkbox success</label></div>
                <div class="checkbox checkbox-success"><label class="checkbox-inline"><input type="checkbox" id="inlineCheckbox112" checked="checked" class="custom-checkbox form-control"> Checkbox danger</label></div>
            </div>
        </div>

<div class="form-group">

    {!!Form::label('Dias', 'Dias', ['class' => 'col-sm-3 control-label'])!!}
    <div class="col-sm-8 ">
      <label class="checkbox-inline">
        {!!Form::checkbox('dia_lunes', 'si', ['class'=>'form-control', 'checked'=> false])!!}
        Lunes
      </label>
      <label class="checkbox-inline">
        {!!Form::checkbox('dia_martes', 'si', ['class'=>'form-control', 'checked'=> false])!!}
        Martes
      </label>
      <label class="checkbox-inline">
        {!!Form::checkbox('dia_miercoles', 'si', ['class'=>'form-control', 'checked'=> false])!!}
        Miercoles
      </label>
      <label class="checkbox-inline">
        {!!Form::checkbox('dia_jueves', 'si', ['class'=>'form-control', 'checked'=> false])!!}
        Jueves
      </label>
      <label class="checkbox-inline">
        {!!Form::checkbox('dia_viernes', 'si', ['class'=>'form-control', 'checked'=> false])!!}
        Viernes
      </label>
      <label class="checkbox-inline">
        {!!Form::checkbox('dia_sabado', 'si', ['class'=>'form-control', 'checked'=> false])!!}
        Sabado
      </label>
      <label class="checkbox-inline">
        {!!Form::checkbox('dia_domingo', 'si', ['class'=>'form-control', 'checked'=> false])!!}
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
