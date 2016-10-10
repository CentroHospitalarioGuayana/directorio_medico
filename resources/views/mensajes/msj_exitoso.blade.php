@if(Session::has('message'))
<div class="example-box-wrapper">
    <div class="alert alert-close alert-success">
        <a href="#" title="Close" class="glyph-icon alert-close-btn icon-remove"></a>
        <div class="bg-green alert-icon"><i class="glyph-icon icon-check"></i></div>
        <div class="alert-content">
            <h4 class="alert-title">Exito</h4>
            <p>{{Session::get('message')}}</p>
      </div>
    </div>
</div>
@endif
