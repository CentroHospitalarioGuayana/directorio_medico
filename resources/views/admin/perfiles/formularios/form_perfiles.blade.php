<div class="form-group">
    {!!Form::label('id_perfil', 'Id', ['class' => 'col-sm-3 control-label'])!!}
    <div class="col-sm-6">
        {!!Form::text('id_perfil', null , ['class'=>'form-control', 'placeholder'=>'Identificador de la perfil','disabled'=>'disabled'])!!}
    </div>
</div>

<div class="form-group">
    {!!Form::label('id_perfil', 'Nombre', ['class' => 'col-sm-3 control-label'])!!}
    <div class="col-sm-6">
        {!!Form::text('descripcion_perfil', null , ['class'=>'form-control', 'placeholder'=>'Nombre de la perfil'])!!}
    </div>
</div>

<div class="form-group">

    <div class="col-sm-9 pull-right">
        {!!Form::submit('Guardar', ['class'=>'btn btn-alt btn-sm btn-hover btn-success'])!!}
        {!!Form::reset('Limpiar', ['class'=>'btn btn-alt btn-sm btn-hover btn-danger'])!!}
    </div>
</div>
