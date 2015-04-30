<?php 
session_start();
	require_once("conexion.php");
	$recibido = ($_GET['id']);
	$consulta1="SELECT * from Usuario where idUsuario="."'".$recibido."'";
	$res=mysql_query($consulta1,$con);
	$valor1='Dirección';
	$valor2='Académica';
	$valor3='Administrativa';
	$valor4='Planeación y Vinculación';
	$check1;
	$check2;
	$check3;
	$check4;
	
	if($_SESSION["nombresesion"])
	{	   
		$consulta = "select * from Documento where estatus='Pendiente' or estatus='Trabajando' or estatus='Archivado'";
		$res1=mysql_query($consulta, $con);
		$i=0;
		$auxi=0;
		$arreglo = array();
			while($row = @mysql_fetch_array($res1))
			{
				$i=$i+1;
				$auxi=$i;
			}

				while($row = @mysql_fetch_array($res))
				{	
					$i=$i+1;
						if($valor1==$row['area'])
						{
							$check1="selected";
						}
						else if($valor2==$row['area'])
						{
							$check2="selected";
						}
						else if($valor3==$row['area'])	
						{
							$check3="selected";
						}
						else if($valor4==$row['area'])
						{
							$check4="selected";
						}		
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8" />
    <title>SIITec: Modificar Usuario</title>
    <meta name="description" content="Archivo que contieneel formulario con el que se permite ingresar usuarios al sistema" />
    <meta name="Gera" content="Formulario Alta usuario" />
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
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript" src="scripts/bootstrap.min.js"></script>
    <script type="text/javascript" src="scripts/jquery.cloneposition.js"></script>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
	<![endif]-->
    <!--[if lte IE 9]>
	<script src="scripts/placeholder.js" type="text/javascript"></script>
	<![endif]-->
    <script type="text/javascript" src="scripts/theme.js"></script>
    <link rel="stylesheet" type="text/css" href="css/radmin-plugins.css" />
    <style type="text/css">
#body-sample-pages .navbar.navbar-inverse.navbar-static-top .navbar-inner.black-gradient .container-fluid .brand .rad {
	font-family: Verdana, Geneva, sans-serif;
}
#body-sample-pages .navbar.navbar-inverse.navbar-static-top .navbar-inner.black-gradient .container-fluid .brand {
	font-family: Verdana, Geneva, sans-serif;
}
#body-sample-pages .black-gradient .brand.pull-right .rad {
	font-family: Verdana, Geneva, sans-serif;
}
#body-sample-pages .black-gradient .brand.pull-right {
	font-family: Verdana, Geneva, sans-serif;
}
</style>
    <!--[if lte IE 8]>
	<style>
				select, textarea, input[type="text"], input[type="password"], input[type="datetime"], input[type="datetime-local"], input[type="date"], input[type="month"], input[type="time"], input[type="week"], input[type="number"], input[type="email"], input[type="url"], input[type="search"], input[type="tel"], input[type="color"], .uneditable-input {
					min-height: 20px !important;
				}
			</style>
	<![endif]-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>
    <body id="body-sample-pages">
<div class="navbar navbar-inverse navbar-static-top">
      <div class="navbar-inner black-gradient">
    <div class="container-fluid"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a> <a class="brand" href="Principal.php"> <span class="rad">SII</span>Tec </a>
          <div class="nav-collapse collapse">
        <p class="navbar-text pull-right"> <a id="user-popover" href="Principal.php" class="navbar-link user-info"> <i class="radmin-icon radmin-user"></i>
          <hi>
<?php
	 
	echo($_SESSION['nombresesion']);
		
?>
            </span></hi>
          </a> <a href="salir.php" class="btn btn-mini btn-inverse navbar-link logout"> <i class="radmin-icon radmin-redo"></i> Cerrar Sesión </a> </p>
        <form class="navbar-search pull-right" />
            </form>
      </div>
        </div>
  </div>
    </div>
<div class="row-fluid">
      <div class="span12">&nbsp;</div>
    </div>

<div class="container-fluid main-container">
      <div class="row-fluid">
    <div class="span12">
         <div class="sidebar-nav">
					<ul class="nav nav-stacked left-menu">
						<li id="">
							<a href="Principal.php">
								<span class="box">
									<i class="radmin-icon radmin-home"></i>
								</span>
								<span class="hidden-tablet hidden-phone">Principal</span>
							</a>
						</li>
                        
                        <li id="">
							<a href="Notificaciones.php">
								<span class="box">
									<i class="radmin-icon radmin-bell"></i>
								</span>
								<span class="hidden-tablet hidden-phone">Notificaciones</span>
                                
                                    <div class="notifications-wrapper" >
	          <div class="notifications"> <strong><?php echo $auxi; ?></strong> </div>
            </div>
							</a>
						</li>
                        
						<li class="accordion" id="navigation-sample-pages">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#navigation-sample-pages" href="#collapse1">
								<span class="box">
                              
									<i class="radmin-icon radmin-user-3"></i>
                                
								</span>
								<span class="hidden-tablet hidden-phone">Usuarios</span>
								<span class="label pull-right hidden-tablet hidden-phone">2</span>
							</a>
							<div id="collapse1" class="accordion-body collapse">
								<ul class="nav nav-stacked submenu">
									  <li id="navigation-index">
										<a href="AltaUsuario.php">
											<span class="box">
												<i class="radmin-icon radmin-user"></i>
											</span>
											<span class="hidden-tablet hidden-phone">Agregar Usuario</span>
										</a>
									</li>
									<li>
										<a href="MuestraUsuarios.php">
											<span class="box">
												<i class="radmin-icon radmin-cog"></i>
											</span><span class="hidden-tablet hidden-phone">Mostrar Usuarios</span></a>
									</li>
									<li class="submenu-last">
										
									</li>
								</ul>
							</div>
						</li>
						<li class="accordion" id="navigation-components">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="navigation-components" href="#collapse2">
								<span class="box">
									<i class="radmin-icon radmin-book"></i>
								</span>
								<span class="hidden-tablet hidden-phone">Consultas</span>
								<span class="label pull-right hidden-tablet hidden-phone">2</span>
							</a>
							<div id="collapse2" class="accordion-body collapse">
								<ul class="nav nav-stacked submenu">
									<li>
										<a href="grafica.php">
											<span class="box">
												<i class="radmin-icon radmin-bars"></i>
											</span>
                                            <span class="hidden-tablet hidden-phone">Gráfica</span>
                                            </a>
									</li>
									<li>
										<a href="icons.html">
											<span class="box">
												<i class="radmin-icon radmin-file"></i>
											</span>
											<span class="hidden-tablet hidden-phone">Documentos</span>
										</a>
								</ul>
							</div>
						</li>
					</ul>
				</div>         <div class="container-fluid content-wrapper">
        <div class="row-fluid">
              <div class="span12">
            <div class="hero-unit">
                            <h1>Instituto Tecnológico Superior Zacatecas Sur</h1>
								<p>
									Sistema de Información Integral del Tecnológico.  
								</p>
								
							</div>
          </div>
            </div>
        <div class="row-fluid">
              <!--<div class="span12"></div> -->
            </div>
        <class class="row-fluid">
        <div class="span12">
              <h2 class="welcome">
								
								<span class="text-info">Modificar Usuario</span></h2>
                            							<div class="squiggly-border"></div>
              <form class="form-horizonta invoice-form"  action="modificaUsuario.php?id=<?php echo $recibido ?> " method="post" autocomplete="on"/>
          
              <fieldset>
            <div class="control-group">Nombre
                  <div class="controls">
                <input id="cajaNombre" class="input-large" type="text" name="cajaNombre" value="<?php echo $row ['nombreUsuario']; ?>" pattern="[a-z| A-Z | | áéíóúñÁÉÍÓÚÑ]*$"/>
              </div>
                </div>
            <div class="control-group"><span class="control-label">Apellido Paterno</span>
                  <div class="controls">
                <input id="cajaApellidoPat" class="input-large" type="text" name="cajaApellidoPat"  value="<?php echo $row ['apellidoPat']; ?>" pattern="[a-z| A-Z | | áéíóúñÁÉÍÓÚÑ]*$"/>
              </div>
                </div>
            <div class="control-group"><span class="control-label">Apellido Materno</span>
                  <div class="controls">
                <input id="cajaApellidoMat" class="input-large" type="text" name="cajaApellidoMat" value="<?php echo $row ['apellidoMat']; ?>" pattern="[a-z| A-Z | | áéíóúñÁÉÍÓÚÑ]*$"/>
              </div>
                </div>
            <div class="control-group"><span class="control-label">Contraseña Nueva</span>
                  <div class="controls">
                <input id="cajaContrasena" class="input-large" type="text" name="cajaContrasena" value="<?php echo $row ['pass']; ?>" pattern="[a-z| A-Z | | áéíóúñÁÉÍÓÚÑ]*$"/>
              </div>
                </div>
            <div class="control-group"><span class="control-label">Área</span>
                  <div class="controls">
                <select id="comboArea" name="comboArea" >
                      <option value="Dirección" id="1"  <?php echo $check1;?>> Dirección
                  <option value="Académica" id="2"  <?php echo $check2;?>> Académica
                  <option value="Administrativa" id="3"  <?php echo $check3;?> > Administrativa
                  <option value="Planeación y Vinculación" id="4"  <?php echo $check4;?>> Planeación y Vinculación
                </select>
              </div>
                </div>
            <div class="hr"></div>
            
            <!--	<h6>&nbsp;</h6>-->
            <div class="hr"></div>
            <div class="form-actions pull-left">
                  <input class="btn btn-info" type="submit" value="Guardar" />
                </div>
          </fieldset>
              </form>
            </div>
      </div>
        </div>
  </div>
    </div>
</div>

<!-- Footer -->
<?php
	}?>
<footer class="black-gradient"> <a class="brand pull-right" href="Principal.php"> <span class="rad">SII</span>Tec </a>
      <div class="square-turtle pull-left">
    <p> 2014 &copy; Todos los derechos reservados - <a href="http://www.itszas.edu.mx/" target="_blank">SYSTeam</a> </p>
  </div>
    </footer>
<!-- Javascript --> 

<!-- Sparklines --> 
<script type="text/javascript" src="scripts/sparkline.js"></script> 
<script type="text/javascript">
     	switcher_div = $('#color-switcher');
		switcher_control = $('#color-switcher-control');
		switcher_is_transitioning = false;
		
		switcher_div_style = {
			'width': switcher_control.children('a:first').width(),
			'z-index': 2,
			'top': '+=78px',
			'left': '-=5px'
		};
		
		switcher_control_style = {
			'z-index': 3,
			'position': 'relative'
		};

		
		
		function get_flot_colors() {
		    if(radmin_current_theme === 'pink') {
		        return ['#E63E5D', '#97AF22', '#9D3844', '#533436', '#082D35'];
		    } else if(radmin_current_theme === 'green') {
		        return ['#42826C', '#FFC861', '#A5C77F', '#6d9f00', '#002F32'];
		    } else {
		        return ['#49AFCD', '#FF6347', '#38849A', '#BF4A35', '#999', '#555'];
		    }
		
		    return ['#49AFCD', '#FF6347', '#38849A', '#BF4A35', '#999', '#555'];
		}
		
		function get_sparkline_colors(){
			if(radmin_current_theme === 'pink') {
		        return ['#E63E5D', '#97AF22'];
		    } else if(radmin_current_theme === 'green') {
		        return ['#42826C', '#FFC861'];
		    } else {
		        return ['#49AFCD', '#FF6347'];
		    }
		
		    return ['#49AFCD', '#FF6347'];
		}
     
	    var sparkline_colors = get_sparkline_colors();
	    
    	/**
		 *  Jquery Load Event
		 *
		 */
		jQuery(function($){
			// format date inputs
			$( "a[rel=popover]" ).popover();
			
 	        $('.bar1-sparkline').sparkline([12, 8, 10, 13, 15, -6, -8, 10, 18, 10, -8, -7 ], {type: 'bar', barColor: sparkline_colors[0], negBarColor: sparkline_colors[1], barWidth: '5', height: '20'} );
	       
	        $('.bar2-sparkline').sparkline([ [5,6],[7,9],[9,5],[6,2],[10,4],[6,7],[5,4],[6,7] ], {type: 'bar',stackedBarColor: sparkline_colors, barWidth: '5', height: '20'} );
	       
	        $('.discrete-sparkline').sparkline([ 12,11,13,14,13,12,11,12,13,14,15,16,15,14,13,14,15,16,17,18,17,16,17 ], {type: 'discrete', lineColor: sparkline_colors[0], height: '20'} );
	       
	        $('.line-sparkline').sparkline([ 12,11,13,14,13,12,11,12,13,14,15,16,15,14,13,12,11,12,13,14,15,16,17,18 ], {type: 'line', lineColor: sparkline_colors[0], fillColor: sparkline_colors[0], height: '20'} );
	        
	        $('#user-popover').popover();
	        
	        /**
	         * Sets active and expands menu items based on id of body tag of current page
	         * e.g. <body id="body-index-page"> will result in the menu item with the id="navigation-index-page" having the 
	         * class 'active' added, subsequently it will look for a child div with a class of collapse and add the class 'in' 
	         * and set the height to auto
	         */
	        var body_id = $('body').attr('id');
			if(body_id != null){
				var nav_element = $('#navigation-' + body_id.replace('body-',''));
	        	nav_element.addClass('active');
	        	if(nav_element.has('div.collapse')){
	        		var child_nav = nav_element.find('div.collapse');
	        		child_nav.addClass('in');
	        		child_nav.css('height: auto;');
	        		
	        	}
	        	
	        }
	        
	        //hide the top-stats when the arrow is clicked
	        var item = $('.top-stats');
	        var target = $('#hide-top-stats');
	        if(item.length > 0 && target.length > 0){
   		        target.on('click', function() {
					item.css('position', 'relative');
					item.animate({
					    left: '-=1200',
		  		  	}, 1000, function() {
					    // Animation complete.
					    item.hide('slow');
					});
				});
			}
			
			//display the color-switcher and change theme (plus anything with comments of //used in theming logic )
			position_color_switcher(true);
			switcher_div.show();
			
			switcher_control.on('click', toggle_color_switcher);
			
			$(window).resize(function() {
				switcher_div.hide();
			});
			
			$('.color-switcher-color').bind('click', set_theme_url);
			
			
		});
		
    </script>
</body>
</html>
<?php
}
else
{
	echo("<script type='text/javascript'> 
	alert('No existe ninguna sesion abierta, favor de AUTENTIFICARSE'); 
	window.location='index.html';</script>");	
}
?>