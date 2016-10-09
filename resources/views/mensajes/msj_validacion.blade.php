@if($errors-> has())

  <div class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <i class="icon fa fa-ban"></i> Los campos no pueden estar vacios:
      <ul>
        @foreach($errors->all() as $error)
          <li>{!!$error!!}</li>
        @endforeach
      </ul>
  </div>
@endif
