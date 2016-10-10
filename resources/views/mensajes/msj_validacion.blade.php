@if($errors->any())
<div class="example-box-wrapper">
    <div class="alert alert-close alert-danger">
        <a href="#" title="Close" class="glyph-icon alert-close-btn icon-remove"></a>
        <div class="bg-red alert-icon"><i class="glyph-icon icon-ban"></i></div>
        <div class="alert-content">
            <h4 class="alert-title">Alerta</h4>
            <ul>
            @foreach($errors->getMessages() as $this_error)
                <li>{!!$this_error[0]!!}</li>
            @endforeach
            </ul>

      </div>
    </div>
</div>
@endif
<!--
<div class="example-box-wrapper">
    <div class="alert alert-close alert-success">
        <a href="#" title="Close" class="glyph-icon alert-close-btn icon-remove"></a>
        <div class="bg-green alert-icon"><i class="glyph-icon icon-ban"></i></div>
        <div class="alert-content">
            <h4 class="alert-title">Success message title</h4>
            <p>Information message box using the <code>.alert-success</code> color scheme. <a href="#" title="Link">Link</a></p>
      </div>
    </div>
</div>
-->
