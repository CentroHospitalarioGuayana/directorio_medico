@extends('layouts.admin')

@section('titulo','Nuevo Medico')

@section('contenido')

    {!!Html::script('assets/widgets/timepicker/timepicker.js')!!}
    {!!Html::script('assets/widgets/datepicker/datepicker.js')!!}
    {!!Html::script('assets/widgets/tabs/tabs.js')!!}
    {!!Html::script('assets/widgets/tabs/tabs-responsive.js')!!}
    {!!Html::script('assets/widgets/multi-select/multiselect.js')!!}

    {!!Html::script('assets/widgets/uniform/uniform.js')!!}
    {!!Html::script('assets/widgets/uniform/uniform-demo.js')!!}
    {!!Html::script('assets/widgets/chosen/chosen.js')!!}
    {!!Html::script('assets/widgets/chosen/chosen-demo.js')!!}

    <script type="text/javascript">
        /* Multiselect inputs */

        $(function() {
            "use strict";
            $(".multi-select").multiSelect();
            $(".ms-container").append('<i class="glyph-icon icon-exchange"></i>');
        });
    </script>

    <script type="text/javascript">
        /* Timepicker */

        $(function() {
            "use strict";
            $('.timepicker-example').timepicker();
        });
    </script>


    <script type="text/javascript">
      /* Datepicker bootstrap */

      $(function() {
          "use strict";
          $('.bootstrap-datepicker').bsdatepicker({
              format: 'yyyy-mm-dd'
          });
      });
    </script>




<script type="text/javascript">
    /* Responsive tabs */
    $(function() {
        "use strict";
        $('.nav-responsive').tabdrop();
    });
</script>

<div id="page-title">
    <h2> <i class="glyph-icon icon-stethoscope"></i> Nuevo Medico</h2>
    <p>Directorio Medico.</p>

</div>
@include('mensajes.msj_validacion')

<div class="panel">
    <div class="panel-body">
        <h3 class="title-hero">Medicos</h3>
        <div class="example-box-wrapper">
            <ul class="list-group list-group-separator row list-group-icons">
                <li class="col-md-3 active"><a href="#tab-1" data-toggle="tab" class="list-group-item"><i class="glyph-icon icon-user"></i> Datos</a></li>
                <li class="col-md-3"><a href="#tab-2" data-toggle="tab" class="list-group-item"><i class="glyph-icon  icon-stethoscope"></i> Especialidades</a></li>
                <li class="col-md-3"><a href="#tab-3" data-toggle="tab" class="list-group-item"><i class="glyph-icon icon-clock-o"></i> Horarios</a></li>

            </ul>
            <div class="tab-content">
                <div class="tab-pane fade active in" id="tab-1">
                    {!!Form::model($medicos,['route'=>['medicos.update',$medicos->id_medico],'method'=>'PUT' ,'files'=> true, 'class'=>'form-horizontal bordered-row'])!!}

                    @include('admin.medicos.formularios.form_medicos')

                    {!!Form::close()!!}
                </div>
                <div class="tab-pane fade" id="tab-2">
                    {!!Form::open(['route'=>'horarios.store','method'=>'POST', 'class'=>'form-horizontal bordered-row'])!!}

                     @include('admin.especialidades.formularios.form_especialidad_medico')

                    {!!Form::close()!!}
                </div>
                <div class="tab-pane fade" id="tab-3">
                    {!!Form::open(['route'=>'horarios.store','method'=>'POST', 'class'=>'form-horizontal bordered-row'])!!}
                    
                           @include('admin.horarios.formularios.form_horarios')

                    {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
