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

    <link rel="shortcut icon" href="../assets/images/icons/favicon.png">

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
    {!!Html::style('assets/snippets/user-profile.css')!!}
    {!!Html::style('assets/snippets/mobile-navigation.css')!!}
    {!!Html::style('assets/applications/mailbox.css')!!}
    {!!Html::style('assets/themes/admin/layout.css')!!}
    {!!Html::style('assets/themes/admin/color-schemes/default.css')!!}
    {!!Html::style('assets/themes/components/default.css')!!}
    {!!Html::style('assets/themes/components/border-radius.css')!!}
    {!!Html::style('assets/helpers/responsive-elements.css')!!}
    {!!Html::style('assets/helpers/admin-responsive.css')!!}

    {!!Html::script('assets/js-core/jquery-core.js')!!}
    {!!Html::script('assets/js-core/jquery-ui-core.js')!!}
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
    <div id="sb-site">


        <div id="loading">
            <div class="svg-icon-loader">
              <img src="/img/svg-loaders/bars.svg" width="40" alt="">
            </div>
        </div>

        <div id="page-wrapper">
            <div id="mobile-navigation">
                <button id="nav-toggle" class="collapsed" data-toggle="collapse" data-target="#page-sidebar"><span></span></button>
            </div>
            <div id="page-sidebar">
                <div id="header-logo" class="logo-bg"><a href="index.html" class="logo-content-big" title="DelightUI">Delight <i>UI</i> <span>Material Design Dashboard Template</span></a> <a href="index.html" class="logo-content-small" title="DelightUI">Delight <i>UI</i> <span>Material Design Dashboard Template</span></a>                    <a id="close-sidebar" href="#" title="Close sidebar"><i class="glyph-icon icon-outdent"></i></a></div>

                <div class="scroll-sidebar">
                    <ul id="sidebar-menu">
                        <li class="header"><span>Principal</span></li>
                        <li><a href="index.html" title="Dashboard"><i class="glyph-icon icon-dashboard"></i> <span>Dashboard</span></a></li>
                        <li><a href="index.html" title="Admin Dashboard"><i class="glyph-icon icon-file-o"></i> <span>Layout</span></a></li>

                        <li class="header"><span>Medicos</span></li>
                        <li><a href="{{asset('/medicos')}}" title="Medicos"><i class="glyph-icon icon-user-md"></i> <span>Medicos</span></a>  </li>

                        <li><a href="{{asset('/horarios')}}" title="Horarios"><i class="glyph-icon icon-clock-o"></i> <span>Horarios</span></a></li>

                        <li><a href="{{asset('/especialidades')}}" title="Especialidades"><i class="glyph-icon icon-stethoscope"></i> <span>Especialidades</span></a></li>

                        <li class="header"><span>Usuarios</span></li>
                        <li><a href="javascript:void(0);" title="Pages"><i class="glyph-icon icon-users"></i> <span>Usuarios</span> </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li><a href="index-alt.html" title="Alternate dashboard"><span>Usuarios</span></a></li>
                                    <li><a href="view-profile.html" title="View profile"><span>Perfiles</span></a></li>
                                </ul>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>

            <div id="page-content-wrapper">
                <div id="page-content">
                    <div id="page-header">
                        <div id="header-nav-left"><a class="header-btn" id="logout-btn" href="lockscreen-3.html" title="Lockscreen page example"><i class="glyph-icon icon-linecons-lock"></i></a>
                            <div class="user-account-btn dropdown">
                                <a href="#" title="My Account" class="user-profile clearfix" data-toggle="dropdown"><img width="28" src="../assets/image-resources/gravatar.jpg" alt="Profile image"> <span>Usuario</span> <i class="glyph-icon icon-angle-down"></i></a>
                                <div class="dropdown-menu float-right">
                                    <div class="box-sm">
                                        <div class="login-box clearfix">
                                            <div class="user-img"><a href="#" title="" class="change-img">Change photo</a> <img src="../assets/image-resources/gravatar.jpg" alt=""></div>
                                            <div class="user-info"><span>Usuario <i>Tipo de usuario</i></span> </div>
                                        </div>
                                        <div class="divider"></div>
                                        <ul class="reset-ul mrg5B">
                                            <li><a href="#">Ver mi perfil</a></li>
                                            <li><a href="#">Modificar mis datos</a></li>
                                        </ul>
                                        <div class="button-pane button-pane-alt pad5L pad5R text-center">
                                          <a href="#" class="btn btn-flat display-block font-normal btn-danger"><i class="glyph-icon icon-power-off"></i> Salir</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="header-nav-right">
                            <a href="#" class="hdr-btn" id="fullscreen-btn" title="Fullscreen"><i class="glyph-icon icon-arrows-alt"></i></a>
                        </div>
                    </div>


                    {!!Html::script('assets/widgets/skycons/skycons.js')!!}
                    {!!Html::script('assets/widgets/datatable/datatable.js')!!}
                    {!!Html::script('assets/widgets/skycons/skycons.js')!!}
                    {!!Html::script('assets/widgets/datatable/datatable-bootstrap.js')!!}
                    {!!Html::script('assets/widgets/datatable/datatable-tabletools.js')!!}
                    {!!Html::script('assets/widgets/datatable/datatable-reorder.js')!!}

                    
<!-- Inicio del contenido -->
                    @yield('contenido')

<!-- fin del contenido -->

                </div>
            </div>
        </div>


        {!!Html::script('assets/widgets/dropdown/dropdown.js')!!}
        {!!Html::script('assets/widgets/tooltip/tooltip.js')!!}
        {!!Html::script('assets/widgets/popover/popover.js')!!}
        {!!Html::script('assets/widgets/progressbar/progressbar.js')!!}
        {!!Html::script('assets/widgets/button/button.js')!!}
        {!!Html::script('assets/widgets/collapse/collapse.js')!!}
        {!!Html::script('assets/widgets/superclick/superclick.js')!!}
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

    </div>
</body>

</html>
