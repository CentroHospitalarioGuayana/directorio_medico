@if(Session::has('message'))
    <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <i class="icon fa fa-check"></i> {{Session::get('message')}}
         <!--a href="#" class="alert-link">Alert Link</a-->
    </div>
@endif
