@if(count($errors) > 0)
<div class="example-box-wrapper">
    <div class="alert alert-close alert-danger">
        <a href="#" title="Close" class="glyph-icon alert-close-btn icon-remove"></a>
        <div class="bg-red alert-icon"><i class="glyph-icon icon-ban"></i></div>
        <div class="alert-content">
            <h4 class="alert-title">Alerta</h4>
            <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
            </ul>

      </div>
    </div>
</div>
@endif
