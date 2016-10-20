<!DOCTYPE html>
<html lang="es">

<head>
    <style>
        #loading .svg-icon-loader {
            position: absolute;
            top: 50%;
            left: 50%;
            margin: -50px 0 0 -50px;
        }
    </style>
    <meta charset="UTF-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>@yield('titulo')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../../assets/images/icons/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../../assets/images/icons/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../../assets/images/icons/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../../assets/images/icons/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="../../assets/images/icons/favicon.png">
    {!!Html::style('assets/helpers/animate.css')!!}
    {!!Html::style('assets/helpers/boilerplate.css')!!}
    {!!Html::style('assets/helpers/border-radius.css')!!}
    {!!Html::style('assets/helpers/grid.css')!!}
    {!!Html::style('assets/helpers/page-transitions.css')!!}
    {!!Html::style('assets/helpers/spacing.css')!!}
    {!!Html::style('assets/helpers/typography.css')!!}
    {!!Html::style('assets/helpers/utils.css')!!}
    {!!Html::style('assets/helpers/colors.css')!!}
    {!!Html::style('assets/material/ripple.css')!!}
    {!!Html::style('assets/elements/badges.css')!!}
    {!!Html::style('assets/elements/buttons.css')!!}
    {!!Html::style('assets/elements/content-box.css')!!}
    {!!Html::style('assets/elements/dashboard-box.css')!!}
    {!!Html::style('assets/elements/forms.css')!!}
    {!!Html::style('assets/elements/images.css')!!}
    {!!Html::style('assets/elements/info-box.css')!!}
    {!!Html::style('assets/elements/invoice.css')!!}
    {!!Html::style('assets/elements/loading-indicators.css')!!}
    {!!Html::style('assets/elements/menus.css')!!}
    {!!Html::style('assets/elements/panel-box.css')!!}
    {!!Html::style('assets/elements/response-messages.css')!!}
    {!!Html::style('assets/elements/responsive-tables.css')!!}
    {!!Html::style('assets/elements/ribbon.css')!!}
    {!!Html::style('assets/elements/social-box.css')!!}
    {!!Html::style('assets/elements/tables.css')!!}
    {!!Html::style('assets/elements/tile-box.css')!!}
    {!!Html::style('assets/elements/timeline.css')!!}
    {!!Html::style('assets/icons/fontawesome/fontawesome.css')!!}
    {!!Html::style('assets/icons/linecons/linecons.css')!!}
    {!!Html::style('assets/icons/spinnericon/spinnericon.css')!!}
    {!!Html::style('assets/widgets/accordion-ui/accordion.css')!!}
    {!!Html::style('assets/widgets/calendar/calendar.css')!!}
    {!!Html::style('assets/widgets/carousel/carousel.css')!!}
    {!!Html::style('assets/widgets/charts/justgage/justgage.css')!!}
    {!!Html::style('assets/widgets/charts/morris/morris.css')!!}
    {!!Html::style('assets/widgets/charts/piegage/piegage.css')!!}
    {!!Html::style('assets/widgets/charts/xcharts/xcharts.css')!!}
    {!!Html::style('assets/widgets/chosen/chosen.css')!!}
    {!!Html::style('assets/widgets/colorpicker/colorpicker.css')!!}
    {!!Html::style('assets/widgets/datatable/datatable.css')!!}
    {!!Html::style('assets/widgets/datepicker/datepicker.css')!!}
    {!!Html::style('assets/widgets/datepicker-ui/datepicker.css')!!}
    {!!Html::style('assets/widgets/daterangepicker/daterangepicker.css')!!}
    {!!Html::style('assets/widgets/dialog/dialog.css')!!}
    {!!Html::style('assets/widgets/dropdown/dropdown.css')!!}
    {!!Html::style('assets/widgets/dropzone/dropzone.css')!!}
    {!!Html::style('assets/widgets/file-input/fileinput.css')!!}
    {!!Html::style('assets/widgets/input-switch/inputswitch.css')!!}
    {!!Html::style('assets/widgets/input-switch/inputswitch-alt.css')!!}
    {!!Html::style('assets/widgets/ionrangeslider/ionrangeslider.css')!!}
    {!!Html::style('assets/widgets/jcrop/jcrop.css')!!}
    {!!Html::style('assets/widgets/jgrowl-notifications/jgrowl.css')!!}
    {!!Html::style('assets/widgets/loading-bar/loadingbar.css')!!}
    {!!Html::style('assets/widgets/maps/vector-maps/vectormaps.css')!!}
    {!!Html::style('assets/widgets/markdown/markdown.css')!!}
    {!!Html::style('assets/widgets/modal/modal.css')!!}
    {!!Html::style('assets/widgets/multi-select/multiselect.css')!!}
    {!!Html::style('assets/widgets/multi-upload/fileupload.css')!!}
    {!!Html::style('assets/widgets/nestable/nestable.css')!!}
    {!!Html::style('assets/widgets/noty-notifications/noty.css')!!}
    {!!Html::style('assets/widgets/popover/popover.css')!!}
    {!!Html::style('assets/widgets/pretty-photo/prettyphoto.css')!!}
    {!!Html::style('assets/widgets/progressbar/progressbar.css')!!}
    {!!Html::style('assets/widgets/range-slider/rangeslider.css')!!}
    {!!Html::style('assets/widgets/slidebars/slidebars.css')!!}
    {!!Html::style('assets/widgets/slider-ui/slider.css')!!}
    {!!Html::style('assets/widgets/summernote-wysiwyg/summernote-wysiwyg.css')!!}
    {!!Html::style('assets/widgets/tabs-ui/tabs.css')!!}
    {!!Html::style('assets/widgets/timepicker/timepicker.css')!!}
    {!!Html::style('assets/widgets/tocify/tocify.css')!!}
    {!!Html::style('assets/widgets/tooltip/tooltip.css')!!}
    {!!Html::style('assets/widgets/touchspin/touchspin.css')!!}
    {!!Html::style('assets/widgets/uniform/uniform.css')!!}
    {!!Html::style('assets/widgets/wizard/wizard.css')!!}
    {!!Html::style('assets/widgets/xeditable/xeditable.css')!!}
    {!!Html::style('assets/snippets/chat.css')!!}
    {!!Html::style('assets/snippets/files-box.css')!!}
    {!!Html::style('assets/snippets/login-box.css')!!}
    {!!Html::style('assets/snippets/notification-box.css')!!}
    {!!Html::style('assets/snippets/progress-box.css')!!}
    {!!Html::style('assets/snippets/todo.css')!!}
    {!!Html::style('assets/snippets/user-profile')!!}
    {!!Html::style('assets/snippets/mobile-navigation.css')!!}
    {!!Html::style('assets/applications/mailbox.css')!!}
    {!!Html::style('assets/themes/admin/layout.css')!!}
    {!!Html::style('assets/themes/admin/color-schemes/default.css')!!}
    {!!Html::style('assets/themes/components/default.css')!!}
    {!!Html::style('assets/themes/components/border-radius.css')!!}
    {!!Html::style('assets/helpers/responsive-elements.css')!!}
    {!!Html::style('assets/helpers/admin-responsive.css')!!}
    
    {!!Html::script('assets/js-core/jquery-ui-core.js')!!}
    {!!Html::script('assets/js-core/jquery-core.js')!!}
    {!!Html::script('assets/js-core/jquery-ui-widget.js')!!}
    {!!Html::script('assets/js-core/jquery-ui-mouse.js')!!}
    {!!Html::script('assets/js-core/jquery-ui-position.js')!!}
    {!!Html::script('assets/js-core/transition.js')!!}
    {!!Html::script('assets/js-core/modernizr.js')!!}
    {!!Html::script('assets/js-core/jquery-cookie.js')!!}
    
    <script type="text/javascript">
        $(window).load(function() {
            setTimeout(function() {
                $('#loading').fadeOut(400, "linear");
            }, 300);
        });
    </script>
</head>

<body>
    <div id="loading">
        <div class="svg-icon-loader"><img src="{{asset('img/svg-loaders/bars.svg')}}" width="40" alt=""></div>
    </div>
    <style type="text/css">
        html,
        body {
            height: 100%;
        }
    </style>
    <div class="center-vertical bg-black">
        <div class="center-content">
            <form action="{!!asset('/especialidades')!!}" id="login-validation" class="col-md-5 col-sm-5 col-xs-11 center-margin" method="pots" >
                <h3 class="text-center pad25B font-gray font-size-23">Directorio Medico <span class="opacity-80">v1.0</span></h3>
                <div id="login-form" class="content-box">
                    <div class="content-box-wrapper pad20A">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email:</label>
                            <div class="input-group input-group-lg"><span class="input-group-addon addon-inside bg-white font-primary"><i class="glyph-icon icon-envelope-o"></i></span>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Contraseña:</label>
                            <div class="input-group input-group-lg"><span class="input-group-addon addon-inside bg-white font-primary"><i class="glyph-icon icon-unlock-alt"></i></span>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                        </div>
                        <div class="row">
                            <div class="checkbox-primary col-md-6" style="height: 20px">
                                <label>
                                    <input type="checkbox" id="loginCheckbox1" class="custom-checkbox"> Recordarme</label>
                            </div>
                            <div class="text-right col-md-6"><a href="#" class="switch-button" switch-target="#login-forgot" switch-parent="#login-form" title="Recover password">Olvido su contraseña?</a></div>
                        </div>
                    </div>
                    <div class="button-pane">
                        {!!Form::submit('Entrar', ['class'=>'btn btn-block btn-primary'])!!}
                    </div>
                </div>
                <div id="login-forgot" class="content-box modal-content hide">
                    <div class="content-box-wrapper pad20A">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email :</label>
                            <div class="input-group input-group-lg"><span class="input-group-addon addon-inside bg-white font-primary"><i class="glyph-icon icon-envelope-o"></i></span>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                            </div>
                        </div>
                    </div>
                    <div class="button-pane text-center">
                        <button type="submit" class="btn btn-md btn-primary">Recuperar contraseña</button> <a href="#" class="btn btn-md btn-link switch-button" switch-target="#login-form" switch-parent="#login-forgot" title="Cancel">Cancel</a></div>
                </div>
            </form>
        </div>
    </div>
    
    {!!Html::script('assets/widgets/dropdown/dropdown.js')!!}
    {!!Html::script('assets/widgets/tooltip/tooltip.js')!!}
    {!!Html::script('assets/widgets/popover/popover.js')!!}
    {!!Html::script('assets/widgets/progressbar/progressbar.js')!!}
    {!!Html::script('assets/widgets/button/button.js')!!}
    {!!Html::script('assets/widgets/collapse/collapse.js')!!}
    {!!Html::script('assets/widgets/superclick/superclick.js')!!}
    {!!Html::script('assets/widgets/input-switch/inputswitch-alt.js')!!}
    {!!Html::script('assets/widgets/slimscroll/slimscroll.js')!!}
    {!!Html::script('assets/widgets/slidebars/slidebars.js')!!}
    {!!Html::script('assets/widgets/slidebars/slidebars-demo.js')!!}
    {!!Html::script('assets/widgets/charts/piegage/piegage.js')!!}
    {!!Html::script('assets/widgets/charts/piegage/piegage-demo.js')!!}
    {!!Html::script('assets/widgets/screenfull/screenfull.js')!!}
    {!!Html::script('assets/widgets/content-box/contentbox.js')!!}
    {!!Html::script('assets/widgets/material/material.js')!!}
    {!!Html::script('assets/widgets/material/ripples.js')!!}
    {!!Html::script('assets/widgets/overlay/overlay.js')!!}
    {!!Html::script('assets/js-init/widgets-init.js')!!}
    {!!Html::script('assets/themes/admin/layout.js')!!}
</body>

</html>