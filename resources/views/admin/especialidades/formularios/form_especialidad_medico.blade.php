<div class="form-group">
    {!!Form::label('fk_medico', 'ID medico', ['class' => 'col-sm-3 control-label'])!!}
    <div class="col-sm-6">
      {!!Form::text('fk_medico', null , ['class'=>'form-control', 'placeholder'=>'ID Medico'])!!}
    </div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label">Especialidad</label>      
        <div class="col-sm-6">
            {!!Form::select('fk_especialidad',$especialidades, null, ['multiple'=>'multiple', 'data-placeholder'=>'Click aqui para seleccionar las especialdiades', 'class'=>'chosen-select'])!!}
        </div>
</div>
<div class="form-group">
    <div class="col-sm-9 pull-right">
      {!!Form::submit('Guardar', ['class'=>'btn btn-alt btn-sm btn-hover btn-success'])!!}
      {!!Form::reset('Limpiar', ['class'=>'btn btn-alt btn-sm btn-hover btn-danger'])!!}
    </div>
</div>