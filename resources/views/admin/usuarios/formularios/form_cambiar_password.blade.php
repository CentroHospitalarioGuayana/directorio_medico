<div class="form-group">
  {{Form::label('password_actual', 'Clave Actual', ['class'=>'col-sm-3 control-label'])}}
    <div class="col-sm-6">
      {{Form::password('password_actual',  ['class'=>'form-control', 'placeholder'=>'Clave actual'])}}
    </div>
</div>
<div class="form-group">
    {{Form::label('paswword', 'Nueva clave', ['class'=>'col-sm-3 control-label'])}}
    <div class="col-sm-6">
        {{Form::password('password',  ['class'=>'form-control', 'placeholder'=>'Nueva clave'])}}
    </div>
</div>
<div class="form-group">
    {{Form::label('paswword', 'Confirme su clave', ['class'=>'col-sm-3 control-label'])}}
    <div class="col-sm-6">
        {{Form::password('password_confirmation',  ['class'=>'form-control', 'placeholder'=>'Confirme su clave'])}}
    </div>
</div>

<div class="button-pane mrg20T">
    {!!Form::submit('Actualizar Clave', ['class'=>'btn btn-alt btn-sm btn-hover btn-success'])!!}

</div>
