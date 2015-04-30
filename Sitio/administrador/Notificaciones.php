<?php 
	session_start();
    
    if($_SESSION["nombresesion"])
	{
		?>
        
         <?php 
		require_once("conexion.php");
		$consulta = "select * from Documento where estatus='SolicitaLiberacion'";
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
	<title>SIITec: Notificaciones</title>
	<meta name="description" content="An admin template from Square Turtle Studios" />
	<meta name="author" content="Square Turtle Studios" />
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
	a:link {
	color: #006600;
}
    .texto {
	font-family: Verdana, Geneva, sans-serif;
}
    .texto {
	font-family: Verdana, Geneva, sans-serif;
}
    #body-index .black-gradient .brand.pull-right .rad {
	font-family: Verdana, Geneva, sans-serif;
	color: #090;
}
    #body-index .navbar.navbar-inverse.navbar-static-top .navbar-inner.black-gradient .container-fluid .brand .rad {
	font-family: Verdana, Geneva, sans-serif;
	color: #090;
}
    </style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body id="body-index">

	<div class="navbar navbar-inverse navbar-static-top">
		<div class="navbar-inner black-gradient">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="Principal.php">
				<span class="rad">SII</span><span class="texto">Tec</span> </a>
				<div class="nav-collapse collapse">
					<p class="navbar-text pull-right">
						<a id="user-popover" href="Principal.php" class="navbar-link user-info"> <i class="radmin-icon radmin-user"></i>
							<?php echo $_SESSION["nombresesion"];?>
						</a>
						<a href="salir.php" class="btn btn-mini btn-inverse navbar-link logout"> <i class="radmin-icon radmin-redo"></i>
							Cerrar Sesión
						</a>
					</p>
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
				<li class="first">
				</li>
				<li id="color-switcher-control">
				</li>
			</ul>

			<div class="notifications-wrapper">
					<br />
					<span class="default color-switcher-color">
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid main-container">

		<div class="row-fluid">
			<div class="span12">

				<div class="sidebar-nav">
					<ul class="nav nav-stacked left-menu">
						<li id="navigation">
						  <a href="Principal.php">
								<span class="box">
									<i class="radmin-icon radmin-home"></i>
								</span>
								<span class="hidden-tablet hidden-phone">Inicio</span>
						  </a>
						</li>
                        
                        <li id="navigation-index">
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
                        
                        
                        
						
                        
       <!-- AQUI ES LIMITE PPAL D NOTIFICACIONES -->
                        
					  <li class="accordion" id="navigation-sample-pages">
						<a class="accordion-toggle" data-toggle="collapse" data-parent="#navigation-sample-pages" href="#collapse1">
								<span class="box">
								<i class="radmin-icon radmin-file"></i>
								</span>
								<span class="hidden-tablet hidden-phone">Documentos</span>
								<span class="label pull-right hidden-tablet hidden-phone">2</span>
						</a>
							<div id="collapse1" class="accordion-body collapse">
								<ul class="nav nav-stacked submenu">
									<li>
									  <a href="AgregarDocumento.php">
											<span class="box">
												<i class="radmin-pencil"></i>
											</span>
											<span class="hidden-tablet hidden-phone">Agregar Documento</span>
										</a>
									</li>
									<li>
									  <a href="MuestraDocumentos.php">
											<span class="box">
												<i class="radmin-icon radmin-clipboard-2"></i>
											</span><span class="hidden-tablet hidden-phone">Modificar Documentos</span></a>
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
										<a href="grid.html">
											<span class="box">
												<i class="radmin-icon radmin-bars"></i>
											</span>
                                            <span class="hidden-tablet hidden-phone">Gráficas</span>
                                      </a>
									</li>
									<li>
										<a href="ConsultasdeDocumentos.php">
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
							  <h1 align="left">Instituto Tecnológico Superior Zacatecas Sur</h1>
								<p align="left">
									Sistema de Información Integral del Tecnológico.</p>
								
							</div>
						</div>
					</div>

					<div class="row-fluid">
						<div class="span12">
							<h2 class="welcome">
								
							<span class="text-info">Notificaciones</span></h2>
						</div>
					</div>

					<div class="row-fluid">
						<div class="span10">
							<h4 class="title">Solicitud de Revisión</h4>
							
							<table class="table table-index">
								<thead>
									<tr>
										<th>Usuario</th>
										<th >Documento</th>
                                        <th >Área</th>
                                        <th >Estado</th>
                                        <th >Revisar</th>
                                       
									</tr>
                                     <div class="squiggly-border"></div>
								</thead>
                               
								<tbody>
   
                                 <?php
			$consulta2 = "select  * from Documento where estatus='SolicitaLiberacion'";
$res1=mysql_query($consulta2, $con);
$i=0;
$auxi2=0;
$arreglo = array();
 
date_default_timezone_set("'UTC'");
			$fecha= date ("Y-m-d");
	while($row = @mysql_fetch_array($res1))
	{
		$i=$i+1;
		$auxi2=$i;
	
		$i=$i+1;
		
	
$fechaLimite =date ($row['fechaLimite']);	
$interval=(($fecha-$datetime2)/86400);
$dt_Ayer1dias= date('Y-m-d', strtotime('+1 day')) ;
$dt_Ayer2dias= date('Y-m-d', strtotime('+2 day')) ;
$dt_Ayer3dias= date('Y-m-d', strtotime('+3 day')) ;
$dt_Ayer4dias= date('Y-m-d', strtotime('+4 day')) ;
$dt_Ayer5dias= date('Y-m-d', strtotime('+5 day')) ;
$dt_Ayer6dias= date('Y-m-d', strtotime('+6 day')) ;
$dt_Ayer7dias= date('Y-m-d', strtotime('+7 day')) ;

   if($fechaLimite==$fecha){
	   $diasExpira="Expirado";
   }

   if($fechaLimite==$dt_Ayer1dias){
		//rojo
			$color2="#FA8072";
			$diasExpira="1 día";
   }
   if($fechaLimite==$dt_Ayer2dias){
		//rojo
			$color2="#FA8072";
			$diasExpira="2 días";
   }
   if($fechaLimite==$dt_Ayer3dias){
		//rojo
			$color2="#FA8072";
			$diasExpira="3 días";
   }
   
   if($fechaLimite==$dt_Ayer4dias){
		//amarillo
			$color2="#FFFF66";
			$diasExpira="4 días";
   }
   if($fechaLimite==$dt_Ayer5dias){
		//amarillo
			$color2="#FFFF66";
			$diasExpira="5 días";
   }
   
   
    if($fechaLimite==$dt_Ayer6dias){
		//verde
			$color2="#98FB98";
			$diasExpira="6 días";
   }
    if($fechaLimite==$dt_Ayer7dias){
		//verde
			$color2="#98FB98";
			$diasExpira="Una semana";
   }
		
		$area= $row['area']; 
		$asunto= $row['tipoDocumento'];
		$nombre=$row['sesionUsuario'];
		$nombreDependencia=$row['nombreDepend'];
		$nombreRemitente=$row['nombreRemit'];
		$Descripcion=$row['descripcion'];
		$fechaDocumento=$row['fechaDelDocumento']; 
		$idDocumento=$row['idDocumento'];
		
		
?>
									<tr>
										<td  bgcolor="<?php echo $color2; ?>" class="text"><?php echo $nombre; ?></td>
										<td bgcolor="<?php echo $color2; ?>" class="text"><?php echo $asunto; ?></td>
                                        <td bgcolor="<?php echo $color2; ?>" class="text"><?php echo $area; ?></td>
                                        <td bgcolor="<?php echo $color2; ?>" class="text"><?php echo $diasExpira; ?></td>
                                        <td bgcolor="<?php echo $color2; ?>" class="text"><p><a href= "RevisaNotificaciones.php?asunto=<?php echo $asunto ?>&dependencia=<?php echo $nombreDependencia ?>&remitente=<?php echo $nombreRemitente ?>&area=<?php echo $area ?>&descripcion=<?php echo $Descripcion ?>&usuario=<?php echo $nombre ?>&fechalimite=<?php echo $fechaLimite;?>&fechadocumento=<?php echo $fechaDocumento;?>&idDocumento=<?php echo $idDocumento;?>">
                                        <button class="btn btn-small" type="button">Revisar</button> </a> </p></td>
									</tr>
									
                                <?php
	
	}
                               ?>     
                               
                           
                                    
                                 
								</tbody>
							</table>
						</div>

					</div>

					<div class="row-fluid">
						<div class="span12">&nbsp;</div>
					</div>
			  </div>

		<div class="row-fluid">
			<div class="span12">&nbsp;</div>
		</div>

	</div>
</div>

<!-- Footer -->

<footer class="black-gradient">
	<a class="brand pull-right" href="Principal.php">
	<span class="rad">SII</span><span class="texto">Tec</span> </a>
	<div class="square-turtle pull-left">
		<p>
			2014 &copy; Todos los derechos reservados -
			<a href="http://www.itszas.edu.mx/" target="_blank">SYSTeam</a>
		</p>
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