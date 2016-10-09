@if(Session::has('message-error'))
  <div class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <i class="icon fa fa-ban"> </i> {{Session::get('message-error')}} <!--a href="#" class="alert-link">Alert Link</a-->
  </div>
@endif
