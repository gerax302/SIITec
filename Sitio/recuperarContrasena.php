<?php 
$recibido = ($_GET['id']);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8" />
    <title>SIITEC</title>
    <meta name="description" content="Login" />
    <meta name="Gera" content="Login Screen" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Styles -->
    <!-- Logo Font - Molle -->
    <link href="css/molle.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/icon-style.css" />
    <!--[if lte IE 7]>
	<script src="../scripts/lte-ie7.js"></script>
	<![endif]-->
    <link href="css/bootstrap-responsive.css" rel="stylesheet" />
    <link href="css/radmin.css" rel="stylesheet" id="main-stylesheet" />
    <link href="css/radmin-responsive.css" rel="stylesheet" />
    <style type="text/css">
#body-login .container-fluid .row-fluid .span4.login-span .login-radmin.align-center .brand .rad {
	font-family: Verdana, Geneva, sans-serif;
	color: #006600;
}
#body-login .container-fluid .row-fluid .span4.login-span .login-radmin.align-center .brand {
	font-family: Verdana, Geneva, sans-serif;
}
#body-login .container-fluid .row-fluid .span4.login-span .login-wrapper .login-inner .control-group .login-inner .form-actions p #recuperar {
	color: #060;
}
a:link {
	color: #009900;
}
a:hover {
	color: #009900;
}
#texto {
	color: #006600;
}
    </style>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap.min.js"></script>
    <script type="text/javascript" src="jquery.cloneposition.js"></script>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
	<![endif]-->
    <!--[if lte IE 9]>
	<script src="scripts/placeholder.js" type="text/javascript"></script>
	<![endif]-->
    <script type="text/javascript" src="scripts/theme.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>
    <body id="body-login">
    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span4"></div>
        <div class="span4 login-span">
          <div class="login-radmin align-center">
            <h1 class="brand"> <span class="rad">SII</span><span style="color: #666; font-family: Verdana, Geneva, sans-serif;">Tec</span> </h1>
          </div>
          <div class="login-wrapper">
            <div class="login-inner">
              <h2 class="sign-in">Recuperar Contraseña</h2>
              <small class="muted">Necesita completar los siguientes campos. </small>
              <div class="squiggly-border"></div>
              <div class="control-group">
                <form action="recuperar.php" method="post" name="formRecuperar" id="formRecuperar">
                  <label class="control-label" for="usuario"> Usuario </label>
                  <div class="controls">
                    <input id="cajaUsuario" class="input-large" type="text" name="cajaUsuario" />
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="pregunta">Selecciona pregunta de seguridad</label>
                    <div class="controls">
                      <select id="cajaPregunta" name="cajaPregunta">
                        <option value="1" id="1"> ¿Cuál es el lugar de nacimiento de la madre?
                        <option value="2" id="2"> ¿Cuál fue su primer trabajo?
                        <option value="3" id="3"/>
                        
	            ¿Cuál es el nombre de su mejor amigo?	
                      
                      </select>
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="respuesta">Respuesta </label>
                    <div class="controls">
                      <input id="cajaRespuesta" class="input-large" type="text" name="cajaRespuesta" />
                    </div>
                  </div>
                  <div class="hr">
                    <p class="tab-content">
                      <input name="btnRecuperar" type="submit" id="btnRecuperar" value="Recuperar" href="recuperarContrasena.php" />
                    </p>
                  </div>
                </form>
                <div class="hr"></div>
                <div class="login-inner">
                  <div class="form-actions">
                    <p><a class="text" href="index.html" id="recuperar">Volver al <span id="texto">inicio</span></a></a></p>
                  </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="span4"></div>
      </div>
    </div>
</body>
</html>
<?php

?>