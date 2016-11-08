        <div class="form-group remove-border">
            {{Form::label('nombres_u', 'Nombres', ['class'=>'col-sm-3 control-label'])}}
            <div class="col-sm-6">
                {{Form::text('nombres_u',Auth::user()->nombres_u,['class'=>'form-control', 'placeholder'=>'Nombres'])}}
            </div>
        </div>
        <div class="form-group">
            {{Form::label('apellidos_u', 'Apellidos', ['class'=>'col-sm-3 control-label'])}}
            <div class="col-sm-6">
                {{Form::text('apellidos_u',Auth::user()->apellidos_u,['class'=>'form-control', 'placeholder'=>'Apellidos'])}}
            </div>
        </div>
        <div class="form-group">
            {{Form::label('correo_e', 'Correo', ['class'=>'col-sm-3 control-label'])}}
            <div class="col-sm-6">
                {{Form::text('correo_e',Auth::user()->correo_e,['class'=>'form-control', 'placeholder'=>'Apellidos'])}}
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Profile Picture:</label>
            <div class="col-sm-6">
                <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px"></div>
                    <div><span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span> <span class="fileinput-exists">Change</span>
                        <input type="file" name="...">
                        </span> <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a></div>
                </div>
            </div>
        </div>
    <div class="button-pane mrg20T">
        {!!Form::submit('Guardar', ['class'=>'btn btn-alt btn-sm btn-hover btn-success'])!!}
        {!!Form::reset('Limpiar', ['class'=>'btn btn-alt btn-sm btn-hover btn-danger'])!!}
    </div>
</div>
