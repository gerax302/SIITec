<?php 
session_start();
require_once("conexion.php");


if($_SESSION["nombresesion"])
{
	?>
     <?php
require_once("conexion.php");
$consulta = "select * from Documento where estatus='Pendiente' or estatus='Trabajando' or estatus='Archivado'";
$res=mysql_query($consulta, $con);
$i=0;
$auxi=0;
$arreglo = array();
	while($row = @mysql_fetch_array($res))
	{
		$i=$i+1;
		$auxi=$i;
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>SANTec: Mostrar Usuarios</title>
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
	color: #090;
}
#body-sample-pages .navbar.navbar-inverse.navbar-static-top .navbar-inner.black-gradient .container-fluid .brand {
	font-family: Verdana, Geneva, sans-serif;
}
body,td,th {
	color: #000000;
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
        <p class="navbar-text pull-right"> <a id="user-popover" href="Principal.php" class="navbar-link user-info"> <i class="radmin-icon radmin-user"></i> <?php
	 
	  echo($_SESSION['nombresesion']);
		
	 ?> </a> <a href="salir.php" class="btn btn-mini btn-inverse navbar-link logout"> <i class="radmin-icon radmin-redo"></i> Cerrar Sesión </a> </p>
        <form class="navbar-search pull-right" />
        </form>
      </div>
    </div>
  </div>
</div>
<div class="row-fluid">
  <div class="span12">&nbsp;</div>
</div>
<div class="row-fluid hidden-phone hidden-tablet">
  <div class="span12 top-stats">
    <ul class="top-nav-boxes">
      <li class="first"> <a href="Principal.php"> <i class="radmin-bookmark"></i>Principal</a> </li>
      <li> <a href="AgregarDocumento.php"> <i class="radmin-pencil"></i> <span>Agregar Documento</span> </a> </li>
      <li>
        <div class="notifications-wrapper">
          <div class="notifications"> <strong><?php echo $auxi; ?></strong> </div>
        </div>
        <a href="Principal.php"> <i class="radmin-bell"></i> <span>Notificaciones</span> </a> </li>
      <li> <a href="ConsultasdeDocumentos.php"> <i class="radmin-cabinet"></i> <span>Consultas </span> </a> </li>
      <li id="color-switcher-control"> <a href="#"> <i class="radmin-cog"></i> <span>Temas</span> </a> </li>
    </ul>
    <div class="notifications-wrapper">
      <div class="color-switcher" id="color-switcher" style="display:none"> <small>Estilos</small> <br />
        <span class="default color-switcher-color"></span> <span class="pink color-switcher-color"></span> <span class="green color-switcher-color"></span> </div>
    </div>
  </div>
</div>
<div class="container-fluid main-container">
  <div class="row-fluid">
    <div class="span12">
      <div class="sidebar-nav">
					<ul class="nav nav-stacked left-menu">
						<li id="navigation-index">
							<a href="Principal.php">
								<span class="box">
									<i class="radmin-icon radmin-home"></i>
								</span>Inicio </a>
						</li>
						<li id="navigation-calendario"><a class="accordion-toggle" data-toggle="collapse" data-parent="#navigation-sample-pages" href="#collapse1">
							<span class="box">
								<i class="radmin-icon radmin-user"></i>
							</span>Usuarios</a>
							<div id="collapse1" class="accordion-body collapse">
							  <ul class="nav nav-stacked submenu">
							    <li>
							      <a href="MuestraUsuarios.php">
							        <span class="box">
							          <i class="radmin-icon radmin-clipboard-2"></i>
						            </span>Usuarios Registrados</a>
						        </li>
							    <li>
							      <a href="AltaUsuario.php">
							        <span class="box">
							          <i class="radmin-icon radmin-tree-view"></i>
						            </span>Agregar Usuario</a>
						        </li>
							 
						      </ul>
						  </div>
						</li>
						<li class="accordion" id="navigation-components">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="navigation-components" href="#collapse2">
								<span class="box">
									<i class="radmin-icon radmin-file"></i>
								</span>
								<span class="hidden-tablet hidden-phone">Documentos</span></a>
							<div id="collapse2" class="accordion-body collapse">
								<ul class="nav nav-stacked submenu">
									<li>
										<a href="MuestraDocumentos.php">
											<span class="box">
												<i class="radmin-icon radmin-grid-view"></i>
											</span>
										<span class="hidden-tablet hidden-phone">Documentos Registrados</span></a>
									</li>
									<li>
										<a href="AgregarDocumento.php">
											<span class="box">
												<i class="radmin-icon radmin-pencil"></i>
											</span>
											<span class="hidden-tablet hidden-phone">Agregar Documento</span></a>
									</li>
								
								</ul>
						  </div>
					  </li>
					</ul>
				</div>
      <div class="container-fluid content-wrapper">
        <div class="row-fluid">
          <div class="span12">
            <div class="hero-unit non-index">
              <h2>Usuarios Registrados</h2></div>
          </div>
        </div>
        <div class="row-fluid">
          <div class="span12"></div>
        </div>
        <class class="row-fluid">
        <div class="span12">
          <form action="registraUsuario.php" method="post" autocomplete="on" />
          
          <h3> 
          
<style type="text/css">
<!--
.estilo1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #FFFFFF;
}
</style>
<style type="text/css">
<!--
.estilo2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #000;
}
</style>
<meta charset="utf-8">
<title>Mostrar Usuarios</title>
          </h3>
          <table width="98%" class="table table-index">
            <thead>
              <tr>
                <th width="7%"><div align="center">Número</div></th>
                <th width="17%"><div align="center">Nombre</div></th>
                <th width="13%"><div align="center">Apellido Paterno</div></th>
                <th width="12%"><div align="center">Apellido Materno</div></th>
                <th width="13%"><div align="center">Área</div></th>
                <th width="15%"><div align="center">Identificador</div></th>
                <th width="12%"><div align="center">Modificar</div></th>
                 <th width="11%"><div align="center">Eliminar</div></th>
              </tr>
<?php
require_once("conexion.php");
$consulta = "select nombreUsuario, apellidoPat, apellidoMat, area, idUsuario from Usuario";
$res=mysql_query($consulta, $con);
$i=0;
$arreglo = array();
	while($row = @mysql_fetch_array($res))
	{
		$i=$i+1;
?>
            </thead>
            <tbody>
              <tr>
              
                <td class="numbers"><p align="center">
				<label> <?php echo $i; ?> </label>
                </p></td>
                
                <td class="text"><p align="center">
                <label> <?php echo $row['nombreUsuario']; ?> </label>
                </p></td>
                
                <td class="text"><p align="center">
     			<label><?php echo $row['apellidoPat']; ?> </label>
                </p></td>
                
                <td class="text"><p align="center">
				<label><?php echo $row['apellidoMat']; ?> </label>
                </p></td>
                
                <td class="text"><p align="center">
                <label><?php echo $row['area']; ?> </label>
                </p></td>
                    
                <td class="text"><p align="center">
                <label><?php echo $row['idUsuario']; 
	  		   		   $arreglo[$i-1]=$row['idUsuario']; 
					   $Id=$arreglo[$i-1];
					   $a = (String)Id;
				?> </label>
                </p></td>
                
                <td align="center"><p> <a href="modificarUsuarios.php?id=<?php echo $Id ?> "> <img src="pic/modificar.png" > </a> </p></td>
                         
               <td align="center"><p> <a href='MensajeElimina.php?id=<?php echo $Id ?>' ><img src="pic/eliminar.png" ></a></p></td>
                           
              </tr>
              <tr>
                <?php
	}?>
            </tbody>
          </table>
          <p>&nbsp;</p>
          <div class="hr"></div>
          <div class="hr"></div>
          </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<!-- Footer -->

<footer class="black-gradient"> <a class="brand pull-right" href="Principal.php"> <span class="rad">SII</span><span style="font-family: Verdana, Geneva, sans-serif">Tec</span></a>
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