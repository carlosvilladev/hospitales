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
        <title>Utb Hospital Login</title>
        <meta name="author" content="Srinu Basava">
        <meta content="width=device-width, initial-scale=1.0, user-scalable=no" name="viewport">
        <meta name="description" content="Moon Light Admin Admin UI">
        <meta name="keywords" content="Moon Light Admin, Admin UI, Admin Dashboard, Srinu Basava">
        {{ HTML::style('laravel/css/main.css') }}
        {{ HTML::style('laravel/icomoon/style.css') }}
        {{ HTML::script('laravel/js/html5-trunk.js') }}
        <!--[if lte IE 7]>
          <script src="css/icomoon-font/lte-ie7.js"></script>
        <![endif]-->
    </head>
    <body>
        <h1 class="center-align-text">Ingreso Universitario UTB</h1>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span4 offset4">
                    <div class="signin">
                        <h1 class="center-align-text">Login</h1>
                        <br>
                        
                        <form id="form-login" action="login/log" class="signin-wrapper" method="post">
                            <div id="error-login" class="alert alert-error" style="display:none;">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>Error!</strong>
                                El usuario o contraseña es incorrecta
                            </div>
                            <div id="success-login" class="alert alert-success"  style="display:none;">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>&Eacute;xito!</strong>
                                Espere un momento
                            </div>
                            <div class="content">
                                <input type="text" id="user" name="user" placeholder="Usuario">
                                <input type="password" id="pass" name="pass" placeholder="Contraseña">
                            </div>
                            <div class="actions">
                                {{Form::submit('Login',array("class" => "btn btn-info pull-right"))}}
                                <span class="checkbox-wrapper">
                                    <a href="index-2.html" class="pull-left">Forgot Password</a>
                                </span>
                                <div class="clearfix"></div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

        {{ HTML::script('laravel/js/jquery.min.js') }}
        
        {{ HTML::script('laravel/js/bootstrap.js') }}
        {{ HTML::script('laravel/js/functions/functions.js') }}

    </body>
</html>