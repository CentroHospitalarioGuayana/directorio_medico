<div class="form-group">
    {!!Form::label('fk_medico', 'Medico', ['class' => 'col-sm-3 control-label'])!!}
    <div class="col-sm-6">
      {!!Form::text('fk_medico', null , ['class'=>'form-control', 'placeholder'=>' Medico'])!!}
    </div>
</div>

<div class="form-group">
    {!!Form::label('fk_especialidad', 'Especialidad', ['class' => 'col-sm-3 control-label'])!!}
    <div class="col-sm-6">
      {!!Form::text('fk_especialidad', null , ['class'=>'form-control', 'placeholder'=>' Especialidad'])!!}
    </div>
</div>

<div class="form-group">
    
    <div class="col-sm-6">
      {!!Form::hidden('descripcion_horario', null , ['class'=>'form-control', 'placeholder'=>'Nombre del horario'])!!}
    </div>
</div>

<div class="form-group">
     {!!Form::label('Dias', 'Dias', ['class' => 'col-sm-3 control-label'])!!}
    <div class="col-sm-6">

                <div class="checkbox-success checkbox-inline">
                    <label>
                        <div class="checker" id="uniform-inlineCheckbox111">
                            <span class="checked">
                                {!!Form::checkbox('dia_lunes', 'Lun', false, ['class'=>'custom-checkbox', 'id' => 'inlineCheckbox111'])!!}<i class="glyph-icon icon-check"></i>
                            </span>
                        </div> 
                        Lunes
                    </label>
                    <label>
                        <div class="checker" id="uniform-inlineCheckbox111">
                            <span class="checked">
                                {!!Form::checkbox('dia_martes', 'Mar', false, ['class'=>'custom-checkbox', 'id' => 'inlineCheckbox111'])!!}<i class="glyph-icon icon-check"></i>
                            </span>
                        </div> 
                        Martes
                    </label>
                    <label>
                        <div class="checker" id="uniform-inlineCheckbox111">
                            <span class="checked">
                                {!!Form::checkbox('dia_miercoles', 'Mie', false, ['class'=>'custom-checkbox', 'id' => 'inlineCheckbox111'])!!}<i class="glyph-icon icon-check"></i>
                            </span>
                        </div> 
                        Miercoles
                    </label>
                    <label>
                        <div class="checker" id="uniform-inlineCheckbox111">
                            <span class="checked">
                                {!!Form::checkbox('dia_jueves', 'Jue', false, ['class'=>'custom-checkbox', 'id' => 'inlineCheckbox111'])!!}<i class="glyph-icon icon-check"></i>
                            </span>
                        </div> 
                        Jueves
                    </label>
                     <label>
                        <div class="checker" id="uniform-inlineCheckbox111">
                            <span class="checked">
                                {!!Form::checkbox('dia_viernes', 'Vie', false, ['class'=>'custom-checkbox', 'id' => 'inlineCheckbox111'])!!}<i class="glyph-icon icon-check"></i>
                            </span>
                        </div> 
                        Viernes
                    </label>
                     <label>
                        <div class="checker" id="uniform-inlineCheckbox111">
                            <span class="checked">
                                {!!Form::checkbox('dia_sabado', 'Sab', false, ['class'=>'custom-checkbox', 'id' => 'inlineCheckbox111'])!!}<i class="glyph-icon icon-check"></i>
                            </span>
                        </div> 
                        Sabado
                    </label>
                     <label>
                        <div class="checker" id="uniform-inlineCheckbox111">
                            <span class="checked">
                                {!!Form::checkbox('dia_domingo', 'Dom', false, ['class'=>'custom-checkbox', 'id' => 'inlineCheckbox111'])!!}<i class="glyph-icon icon-check"></i>
                            </span>
                        </div> 
                        Domingo
                    </label>

                </div>

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
