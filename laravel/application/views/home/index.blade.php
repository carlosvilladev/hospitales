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
      <title>UTB Hospital</title>
      <meta name="author" content="Srinu Basava">
      <meta content="width=device-width, initial-scale=1.0, user-scalable=no" name="viewport">
      

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
          <a href="index.html" class="logo">Admin UTB Hospítal</a>
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
                        <a href="home"> <span class="fs1" aria-hidden="true" data-icon=""></span> Urgencias</a>
                      </li>
                      <li>
                        <a href="#">Urgencias</a>
                      </li>
                    </ul>
                  </div>
                </div>

                <br>

                <div class="widget-body">

                 <form id="form_pac" class="form-horizontal no-margin well" method="post">
                  <h5 class="text-info">Informacion del Paciente</h5>
                  <br>
                  <div class="control-group">
                    <label class="control-label">
                      Identificacion
                    </label>
                      <div class="controls">
                        <input id="u-ced" name="u-ced" type="text" class="" placeholder="Identificacion" required> 
                        <a id="buscar_u" name="buscar_u" class="btn btn-info"> <span class="fs1" aria-hidden="true" data-icon=""></span>
                          Buscar
                        </a>
                        <img id="loader" src="laravel/img/loading-red.gif" alt="loading red" style="display:none;">
                      </div>
                    </div>
                    <hr>
                    <div class="control-group">
                      <label class="control-label">
                        Nombres
                      </label>
                      <div class="controls">
                        <input id="u-name" name="u-name" type="text" class="" placeholder="Nombres" required> 
                      </div>
                    </div>
                    
                    <div class="control-group">
                      <label class="control-label">
                        Apellidos
                      </label>
                      <div class="controls">
                        <input id="u-ape" name="u-ape" type="text" class="" placeholder="Apellidos" required> 
                      </div>
                    </div>

                    <div class="control-group">
                      <label class="control-label">
                        Edad
                      </label>
                      <div class="controls">
                        <input id="u-edad" name="u-edad" type="text" class="" placeholder="Edad" required> 
                      </div>
                    </div>
                
                    <div class="control-group">
                      <label class="control-label">
                        Sexo
                      </label>


                      <div class="controls">
                        <label class="radio inline">
                          <input type="radio" name="sexo" value="M" required>
                          Masculino
                        </label>
                        <label class="radio inline">
                          <input type="radio" name="sexo" value="F" required>
                          Femenino
                        </label>
                      </div>
                      
                      
                    </div>
                    
                    <div class="control-group">
                      <label class="control-label">
                        EPS
                      </label>
                      <div class="controls">
                        <input id="u-eps" name="u-eps" type="text" class="" placeholder="EPS" required> 
                      </div>
                    </div>

                    <div class="control-group" id="triageD" style="display:none;">

                      <label class="control-label">
                        Triage 
                      </label>
                      <div class="controls">
                        <select id="triage" class="" name="triage" required>
                          <option value="1">
                            Alta
                          </option>
                          <option value="2">
                            Media
                          </option>
                          <option value="3">
                            Baja
                          </option>
                        </select>  
                      </div>

                    </div>
                    <div class="control-group" id="detallesD" style="display:none;">
                        <label class="control-label">
                            Detalles
                        </label>
                        <div class="controls">
                            <textarea id="u-detalles"class="input-block-level no-margin" placeholder="Detalles" style="height: 112px; width:300px;" name="detallesU"></textarea>
                        </div>
                    </div>
                    <div class="control-group" id="medicoD" style="display:none;">

                      <label class="control-label">
                        Medico 
                      </label>
                      <div class="controls">
                        <select id="medico" class="" name="medico"  required>

                          <option value="0">
                           Medicos Disponibles
                          </option>
                        </select>  
                      </div>

                    </div>
                    <input type="hidden" id="idP" name="idP">
                    <div class="controls" id="guardar_pac" style="display:none;">
                      <button type="submit" id="guar_pac" class="btn btn-info"> <span class="fs1" aria-hidden="true" data-icon=""></span>
                        Registrar Paciente
                      </button> 
                    </div>
                    <div class="controls" id="guardar_urg" style="display:none;">
                      <a id="guar_ur" class="btn btn-info"> <span class="fs1" aria-hidden="true" data-icon=""></span>
                        Guardar Urgencia
                      </a> 
                    </div>
                    
                  </form>
                </div>





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