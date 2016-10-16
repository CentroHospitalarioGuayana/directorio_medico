<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('titulo')</title>

    <!-- Bootstrap Core CSS -->
    {!!Html::style('css/bootstrap.min.css')!!}

    <!-- Custom CSS -->
    {!!Html::style('css/4-col-portfolio.css')!!}
    {!!Html::style('assets/icons/fontawesome/fontawesome.css')!!}
    {!!Html::style('assets/icons/linecons/linecons.css')!!}
    {!!Html::style('assets/icons/spinnericon/spinnericon.css')!!}
    {!!Html::style('css/round-about.css')!!}



</head>

<body>

    <!-- Barra de Navegacion -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Agrupación para mejor visualización en equipos mobiles -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{asset('/')}}">Inicio</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Acerca de</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">elemento 1</a></li>
                            <li><a href="#">elemento 2</a></li>
                            <li><a href="#">elemento 3</a></li>
                            <li><a href="#">elemento 4</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Servicios</a>
                    </li>
                    <li>
                        <a href="#">Contactos</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Contenido de la pagina -->
    <div class="container img">


        <!-- Fila del proyecto -->
        <div class="row">
            @yield('contenido')
        </div>
        <!-- /.row -->
    <hr>
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Centro Hospitalario Guayana, C.A 2016</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    {!!Html::script('js/jquery.js')!!}

    <!-- Bootstrap Core JavaScript -->
    {!!Html::script('js/bootstrap.min.js')!!}
</body>

</html>
