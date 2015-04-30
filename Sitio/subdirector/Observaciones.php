<?php 
session_start();
require_once("conexion.php");
if($_SESSION["nombresesion"])
{
	?>
<?php
require_once("conexion.php");
$consulta = "select * from Documento, Usuario where Documento.estatus='Asignado' and Usuario.nombreUsuario="."'".$_SESSION["nombresesion"]."' and Documento.area=Usuario.area";
$res=mysql_query($consulta, $con);
$i=0;
$auxi=0;
	while($row = @mysql_fetch_array($res))
	{
		$i=$i+1;
		$auxi=$i;
	}
	
	
	
$consulta2 = "select * from Documento, Usuario where  Documento.estatus='Rechazado'  and Usuario.nombreUsuario="."'".$_SESSION["nombresesion"]."' and Documento.area=Usuario.area";
$res2=mysql_query($consulta2, $con);
$i2=0;
$auxi2=0;
$guarda=0;
	while($row = @mysql_fetch_array($res2))
	{
		$i2=$i2+1;
		$auxi2=$i2;
	}
	$guarda=$auxi+$auxi2;
?>
<!DOCTYPE html>
<html lang="en">
<head>
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
<meta charset="utf-8" />
<title>SIITec: Principal</title>
<meta name="description" content="Página principal" />
<meta name="Elizabeth" content="Página principal" />
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
#body-index .navbar.navbar-inverse.navbar-static-top .navbar-inner.black-gradient .container-fluid .brand .rad {
	font-family: Verdana, Geneva, sans-serif;
}
#body-index .navbar.navbar-inverse.navbar-static-top .navbar-inner.black-gradient .container-fluid .brand .rad {
	font-family: Verdana, Geneva, sans-serif;
	color: #090;
}
#body-index .navbar.navbar-inverse.navbar-static-top .navbar-inner.black-gradient .container-fluid .brand {
	font-family: Verdana, Geneva, sans-serif;
}
#body-index .black-gradient .brand.pull-right .rad {
	font-family: Verdana, Geneva, sans-serif;
	color: #090;
}
#body-index .black-gradient .brand.pull-right {
	font-family: Verdana, Geneva, sans-serif;
}
#body-index .container-fluid.main-container .row-fluid .span12 .container-fluid.content-wrapper .table.table-index thead tr th {
	color: #006600;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body id="body-index">
<div class="navbar navbar-inverse navbar-static-top">
  <div class="navbar-inner black-gradient">
    <div class="container-fluid"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a> <a class="brand" href="Principal.php"> <span class="rad">SII</span>Tec </a>
      <div class="nav-collapse collapse">
        <p class="navbar-text pull-right"> <a id="user-popover" href="Principal.php" class="navbar-link user-info"> <i class="radmin-icon radmin-user"></i>
          <?php 
		  echo($_SESSION['nombresesion']);
		  ?>
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
<div class="row-fluid hidden-phone hidden-tablet">
  <div class="span12 top-stats">
    <ul class="top-nav-boxes">
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
              <li id="navigation"> <a href="Principal.php"> <span class="box"> <i class="radmin-icon radmin-home"></i> </span>Inicio <div class="notifications"> <strong><?php echo $auxi; ?></strong> </div>
            </a>  
              
<li id="navigation-index"> <a href="Observaciones.php"> <span class="box"> <i class="radmin-icon radmin-eye "></i> </span>Observaciones <div class="notifications-wrapper" >
	          <div class="notifications"> <strong><?php echo $auxi2; ?></strong> </div>
            </div></a>  </li> 
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
										<a href="grid.html">
											<span class="box">
												<i class="radmin-icon radmin-bars"></i>
											</span>
                                            <span class="hidden-tablet hidden-phone">Gráficas</span>
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
      </div>
      <div class="container-fluid content-wrapper">
        <div class="row-fluid">
          <div class="span12">
            <div class="hero-unit">
              <h1>Bienvenid@
                <?php
	echo ($_SESSION['nombresesion']);
?>
                </span></h1>
              <p> Sistema de Información Integral del Tecnológico. </p>
            </div>
          </div>
        </div>
        <div class="row-fluid">
          <div class="span12">
            <h2 align="center" class="welcome">Instituto Tecnológico Superior Zacatecas Sur<span class="text-info"></span></h2>
          </div>
        </div>
        <div class="squiggly-border"></div>
        <table class="table table-index">
          <thead>
            <tr>
              <th width="5%">Id</th>
              <th width="18%">Fecha de Inspección</th>
              <th width="21%">Descripción</th>  
              <th width="28%">Observaciones sobre el documento</th>
            </tr>
            
            
            <?php
require_once("conexion.php");

$consulta = "select * from Documento, Usuario where Usuario.area= Documento.area and Usuario.nombreUsuario=". "'". $_SESSION["nombresesion"] . "'" ;

$res=mysql_query($consulta, $con);
$i=0;
$arreglo = array();

	while($row = @mysql_fetch_array($res))
	{
		$i=$i+1;
		$Id=$row['idDocumento'];
?>
          </thead>
          <tbody>
            <tr>
              <td class="numbers"><p>
                  <label> <?php echo $row['idDocumento']; ?> </label>
                </p></td>
              <td class="text"><p>
                  <label><?php echo $row['fechaDeAsignacion']; ?> </label>
                </p></td>
              <td class="text">              <p>
                  <label><?php echo $row['descripcion']; ?> </label>
                </p></td>
              <td class="text">
<p>
                  
                  <span id="fullpost"><div align="justify"><pre style="overflow: auto; width: 200px; height: 60px;"><div align="left">
<span ><?php echo $row['descripcion']; ?> 
</span></div></pre></div>
                </p>              
              
</td>
              <td width="28%" class="text"><p>
                
                <div class="controls">
                <form action="modificaDocumentoLogico.php?id=<?php echo $Id ?> " method="post">
                  <select name="selecciona">
                    <option value="Pendiente">Pendiente</option>
                    <option value="Trabajando">Trabajando</option>
                    <option value="SolicitaLiberacion">Solicita Liberación</option>
                  </select>
                  <input type="submit" value="Actualizar">
                </form>
                </p></td>
            </tr>
            <tr>
              <?php
	}?>
          </tbody>
        </table>
        <div class="row-fluid">
          <div class="span12"></div>
        </div>
      </div>
    </div>
    <div class="row-fluid">
      <div class="span12">&nbsp;</div>
    </div>
  </div>
</div>

<!-- Footer -->

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

<!--[if lte IE 8]>
<script language="javascript" type="text/javascript" src="scripts/flot/excanvas.min.js"></script>
<![endif]--> 
<script type="text/javascript" src="scripts/flot/jquery.flot.js"></script> 
<script type="text/javascript" src="scripts/flot/jquery.flot.resize.js"></script> 
<script type="text/javascript" src="scripts/charts.js"></script> 
<script type="text/javascript">
	jQuery(function($){
		flot_sin_cos('flot-line-graph', flot_options_sin_cos);
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
	  window.location='../index.html';</script>");	
}
?>