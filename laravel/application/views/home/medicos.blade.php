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
                                    <a href="#"><span class="fs1" aria-hidden="true" data-icon="&#xe002;"></span> Urgencias</a>
                                </li>
                                <li>
                                    <a href="#">Medicos</a>
                                    
                                </li>
                            </ul>
                        </div>
                    </div>

                    <br>
                    <a href="#accSettings15" role="button" class="btn btn-info" data-toggle="modal" data-original-title="" style="margin-bottom=50px;"> Nuevo </a>
                                    <div id="accSettings15" class="modal hide fade" tabindex="-15" role="dialog" aria-labelledby="myModalLabel15" aria-hidden="true">

                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                ×
                                            </button>
                                            <h4 id="myModalLabel15">
                                                Registrar Medico
                                            </h4>
                                        </div>
                                        <form id="form_m" method="post" action="medicos/insert"> 
                                          <div class="modal-body">
                                              <div class="row-fluid"> 
                                                
                                                  <div class="control-group">
                                                    <label class="control-label">
                                                      Nombres
                                                    </label>
                                                    <div class="controls">
                                                      <input id="m-name" name="m-name" type="text" class="" placeholder="Nombres" required> 
                                                    </div>
                                                  </div>
                                                  <div class="control-group">
                                                    <label class="control-label">
                                                      Apellidos
                                                    </label>
                                                    <div class="controls">
                                                      <input id="m-ape" name="m-ape" type="text" class="" placeholder="Apellidos" required> 
                                                    </div>
                                                  </div>
                                                  <div class="control-group">
                                                    <label class="control-label">
                                                      Codigo
                                                    </label>
                                                    <div class="controls">
                                                      <input id="m-codigo" name="m-codigo" type="text" class="" placeholder="Codigo" required> 
                                                    </div>
                                                  </div>
                                                  <div class="control-group" id="codigoM" >

                                                    <label class="control-label">
                                                      Estado 
                                                    </label>
                                                    <div class="controls">
                                                      <select id="codigo" class="" name="estado" required>
                                                        <option value="1">
                                                          Disponible
                                                        </option>
                                                        <option value="2">
                                                          Ocupado
                                                      </select>  
                                                    </div>

                                                  </div>
                                                
                                              </div>
                                          </div>
                                          <div class="modal-footer">
                                              <button class="btn" data-dismiss="modal" aria-hidden="true">
                                                  Cancelar
                                              </button>
                                              <input type="submit" class="btn btn-primary" value="Guardar">
                                          </div>
                                        </form>
                                    </div>
                                  <br>

                    <div class="row-fluid">
                        <div class="span12">
                            <div class="widget">
                                <div class="widget-header">
                                    <div class="title">
                                        <span class="fs1" aria-hidden="true" data-icon="&#xe14a;"></span> Medicos
                                    </div>

                                </div>    
                                <div class="widget-body">
                                                                          
                                    <div id="dt_example" class="example_alt_pagination">
                                        <table class="table table-condensed table-striped table-hover table-bordered pull-left" id="data-table">    
                                          <thead>
                                                <tr>
                                                 <th style="width:20%">Nombres</th>
                                                 <th style="width:20%">Apellidos</th>
                                                 <th style="width:30%">Codigo</th>
                                                 <th style="width:20%" >Estado</th>
                                               
                                                </tr>

                                          </thead>
                                         <tbody>
                                          <?foreach($medicos as $medico):?>
                                            <tr class="gradeX">
                                                <td>{{$medico->nombremedico}}</td>
                                                <td>{{$medico->apellidomedico}}</td>
                                                <td>{{$medico->codigomedico}}</td>
                                                <?if($medico->estado==1):?> 
                                                  <td>Disponible</td>
                                                <?else:?> 
                                                  <td>Ocupado</td>
                                                <?endif;?>
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