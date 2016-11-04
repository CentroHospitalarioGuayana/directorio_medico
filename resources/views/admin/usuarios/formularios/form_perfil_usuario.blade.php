        <div class="form-group remove-border">
            {{Form::label('nombres_u', 'Nombres', ['class'=>'col-sm-3 control-label'])}}
            <div class="col-sm-6">
                {{Form::text('nombres_u','nombres_u',['class'=>'form-control', 'placeholder'=>'Nombres'])}}
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Last Name:</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="" placeholder="Last name...">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Email:</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="" placeholder="Email address...">
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
        <button class="btn btn-info">Save</button>
        <button class="btn btn-link font-gray-dark">Cancel</button>
    </div>
</div>
