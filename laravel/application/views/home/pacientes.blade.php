<!DOCTYPE html>
<!--[if lt IE 7]>
  <html class="lt-ie9 lt-ie8 lt-ie7" lang="en">
<![endif]-->

<!--[if IE 7]>
  <html class="lt-ie9 lt-ie8" lang="en">
<![endif]-->

<!--[if IE 8]>
  <html class="lt-ie9" lang="en">
<![endif]-->

<!--[if gt IE 8]>
<!-->
<html lang="en">
    <!--
  <![endif]-->

    <head>
        <meta charset="utf-8">
        <title>Utb Hospital</title>
        <meta name="author" content="Srinu Basava">
        <meta content="width=device-width, initial-scale=1.0, user-scalable=no" name="viewport">
        <meta name="description" content="Moon Light Admin Admin UI">
        <meta name="keywords" content="Moon Light Admin, Admin UI, Admin Dashboard, Srinu Basava">
        {{ HTML::style('laravel/icomoon/style.css') }}
      {{ HTML::script('laravel/js/html5-trunk.js') }}

      <!--[if lte IE 7]>
        <script src="css/icomoon-font/lte-ie7.js"></script>
        <![endif]-->

        <!-- bootstrap css -->
        {{ HTML::style('laravel/css/main.css') }}
        {{ HTML::style('laravel/css/fullcalendar.css') }}
        {{ HTML::style('laravel/css/wysiwyg/bootstrap-wysihtml5.css') }}
        {{ HTML::style('laravel/css/wysiwyg/wysiwyg-color.css') }}
        {{ HTML::style('laravel/css/timepicker.css') }}
        {{ HTML::style('laravel/css/bootstrap-editable.css') }}
        {{ HTML::style('laravel/css/select2.css') }}
    </head>
    <body>
        <header>
            <a href="index.html" class="logo">Admin Utb Hospítal</a>
            <div id="mini-nav">
                <ul class="hidden-phone">

                    <li><a href="login.html">Logout</a></li>
                </ul>
            </div>
        </header>

        <div class="container-fluid">
            <div id="mainnav" class="hidden-phone hidden-tablet">
                <ul>

                     <li>
                        <a href="home">
                            <div class="icon">
                                <span class="fs1" aria-hidden="true" data-icon=""></span>
                            </div>
                            Urgencias
                        </a>
                    </li>
                    <li>
                        <a href="pacientes">
                            <div class="icon">
                                <span class="fs1" aria-hidden="true" data-icon=""></span>
                            </div>
                            Pacientes
                        </a>
                    </li>
                    <li>
                        <a href="medicos">
                            <div class="icon">
                                <span class="fs1" aria-hidden="true" data-icon=""></span>
                            </div>
                            Medicos
                        </a>
                    </li>
                    <li>
                        <a href="ordenes">
                            <div class="icon">
                                <span class="fs1" aria-hidden="true" data-icon=""></span>
                            </div>
                            Emitir Ordenes
                        </a>
                    </li>

                </ul>
            </div>

            <div class="dashboard-wrapper">
                <div class="main-container">
                    <div class="navbar hidden-desktop">
                        <div class="navbar-inner">
                            <div class="container">
                                <a data-target=".navbar-responsive-collapse" data-toggle="collapse" class="btn btn-navbar">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </a>
                                <div class="nav-collapse collapse navbar-responsive-collapse">
                                    <ul class="nav">
                                        <li>
                                            <a href="home">Urgencias</a>
                                        </li>
                                        <li>
                                            <a href="pacientes">Pacientes</a>
                                        </li>
                                        <li>
                                            <a href="medicos">Medicos</a>
                                        </li>
                                        <li>
                                            <a href="orden">Ordenes</a>
                                        </li>
                                        <li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row-fluid">
                        <div class="span12">
                            <ul class="breadcrumb-beauty">
                                <li>
                                    <a href="index.html"><span class="fs1" aria-hidden="true" data-icon="&#xe002;"></span> Urgencias</a>
                                </li>
                                <li>
                                    <a href="#">Pacientes</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <br>

                    <div class="row-fluid">
                        <div class="span12">
                            <div class="widget">
                                <div class="widget-header">
                                    <div class="title">
                                        <span class="fs1" aria-hidden="true" data-icon="&#xe14a;"></span> Pacientes
                                    </div>
                                </div>    

                                <div class="widget-body">
                                    <div id="dt_example" class="example_alt_pagination">
                                        <table class="table table-condensed table-striped table-hover table-bordered pull-left" id="data-table">    
                                            <thead>
                                                <tr>
                                                    <th style="width:10%">Identificacion</th>
                                                    <th style="width:20%">Nombres</th>
                                                    <th style="width:20%">Apellidos</th>
                                                    <th style="width:10%" >Fecha/Hora</th>
                                                    <th style="width:7%">Triage</th>
                                                    <th style="width:20%">Descripcion</th>
                                                    <th style="width:20%">Historial</th>
                                                </tr>

                                            </thead>
                                            <tbody>
                                                <?foreach($urgencias as $urgencia):?>
                                                    <tr class="gradeX">
                                                        <td>{{$urgencia->cedulapaciente}}</td>
                                                        <td>{{$urgencia->nombrepaciente}}</td>
                                                        <td>{{$urgencia->apellidopaciente}}</td>
                                                        <td>{{$urgencia->fechaurgencia}}</td>
                                                        <td >{{$urgencia->tipotriage}}</td>
                                                        <td >{{$urgencia->detallesurgencia}}</td>
                                                        <td ><a href="#">Ver</a> </td>

                                                    </tr>
                                                <?endforeach;?>
                                            </tbody>
                                        </table>

                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- dashboard-container -->
                    </div><!-- container-fluid -->
                    <div class="limp"></div>

                    <footer>
                        <p class="copyright">&copy; Moon Light Admin 2013</p>

                    </footer>

                    <br><br><br>



            {{ HTML::script('laravel/js/jquery.min.js') }}
                {{ HTML::script('laravel/js/jquery-ui-1.8.23.custom.min.js') }}


                <!-- morris charts -->
                {{ HTML::script('laravel/js/morris/morris.js') }}
                {{ HTML::script('laravel/js/morris/raphael-min.js') }}

                <!-- Flot charts -->
                {{ HTML::script('laravel/js/jquery.flot.js') }}
                {{ HTML::script('laravel/js/jquery.flot.resize.min.js') }}

                <!-- Calendar Js -->
                {{ HTML::script('laravel/js/fullcalendar.js') }}

                <!-- Tiny Scrollbar JS -->
                {{ HTML::script('laravel/js/tiny-scrollbar.js') }}

                <!-- custom Js -->

                {{ HTML::script('laravel/js/wysiwyg/wysihtml5-0.3.0.js') }}

                {{ HTML::script('laravel/js/bootstrap.js') }}
                {{ HTML::script('laravel/js/wysiwyg/bootstrap-wysihtml5.js') }}
                {{ HTML::script('laravel/js/date-picker/date.js') }}
                {{ HTML::script('laravel/js/date-picker/daterangepicker.js') }}
                {{ HTML::script('laravel/js/bootstrap-timepicker.js') }}

                <!-- Editable Inputs -->
                {{ HTML::script('laravel/js/bootstrap-editable.min.js') }}
                {{ HTML::script('laravel/js/select2.js') }}

                <!-- custom Js -->
                {{ HTML::script('laravel/js/custom-forms.js') }}


                {{ HTML::script('laravel/js/functions/functions.js') }}

    </body>
</html>