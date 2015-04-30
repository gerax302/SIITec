<?php 
	session_start();
    require_once("conexion.php");
	
	$variable="33";
	$variable2="80";
    if($_SESSION["nombresesion"])
	{
		?>
        
        <?php 
		require_once("conexion.php");
		$consulta = "select * from Documento where area='Académica'";
		$consultaAdministrativa="select * from Documento where area='Administrativa'";
		$consultaPlaneacion="select * from Documento where area='Planeación y Vinculación'";
		
		//En esta parte se hace la consulta de al area academica
$res=mysql_query($consulta, $con);
$i=0;
$auxi=0;
$cuentaAsignadoAcademica=0;
$cuentaPendienteAcademica=0;
$cuentaTrabajandoAcademica=0;
$cuentaSolicitaAcademica=0;

$arreglo = array();
	while($row = @mysql_fetch_array($res))
	{
		$i=$i+1;
		$auxi=$i;
		
		if($row['estatus']=="Asignado" || $row['estatus']=="Abierto" ){
			
			$cuentaAsignadoAcademica++;
		}
		if($row['estatus']=="Pendiente"){
			
			$cuentaPendienteAcademica++;
		}
		if($row['estatus']=="Trabajando"){
			
			$cuentaTrabajandoAcademica++;
		}
		
		if($row['estatus']=="SolicitaLiberacion"){
			
			$cuentaSolicitaAcademica++;
		}
		
		
	}
	
	//En esta parte se hace la consulta de al area administratica
$res2=mysql_query($consultaAdministrativa, $con);
$i2=0;
$auxi2=0;
$cuentaAsignadoAdministrativa=0;
$cuentaPendienteAdministrativa=0;
$cuentaTrabajandoAdministrativa=0;
$cuentaSolicitaAdministrativa=0;

$arreglo = array();
	while($row = @mysql_fetch_array($res2))
	{
		$i2=$i+1;
		$auxi2=$i;
		
		if($row['estatus']=="Asignado" || $row['estatus']=="Abierto" ){
			
			$cuentaAsignadoAdministrativa++;
		}
		if($row['estatus']=="Pendiente"){
			
			$cuentaPendienteAdministrativa++;
		}
		if($row['estatus']=="Trabajando"){
			
			$cuentaTrabajandoAdministrativa++;
		}
		
		if($row['estatus']=="SolicitaLiberacion"){
			
			$cuentaSolicitaAdministrativa++;
		}
		
		
	}
	
	
		//En esta parte se hace la consulta de al area Planeacion y vinculacion
$res3=mysql_query($consultaPlaneacion, $con);
$i3=0;
$auxi3=0;
$cuentaAsignadoPlaneacion=0;
$cuentaPendientePlaneacion=0;
$cuentaTrabajandoPlaneacion=0;
$cuentaSolicitaPlaneacion=0;

$arreglo = array();
	while($row = @mysql_fetch_array($res3))
	{
		$i3=$i+1;
		$auxi3=$i;
		
		if($row['estatus']=="Asignado" || $row['estatus']=="Abierto" ){
			
			$cuentaAsignadoPlaneacion++;
		}
		if($row['estatus']=="Pendiente"){
			
			$cuentaPendientePlaneacion++;
		}
		if($row['estatus']=="Trabajando"){
			
			$cuentaTrabajandoPlaneacion++;
		}
		
		if($row['estatus']=="SolicitaLiberacion"){
			
			$cuentaSolicitaPlaneacion++;
		}
		
		
	}

	
		?>

<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8" />
	<title>SIITec: Gráfica</title>
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
	color: #FFCC33;
}
    .texto {
	font-family: Verdana, Geneva, sans-serif;
}
    .texto {
	font-family: Verdana, Geneva, sans-serif;
}
    #body-index .black-gradient .brand.pull-right .rad {
	font-family: Verdana, Geneva, sans-serif;
}
    #body-index .navbar.navbar-inverse.navbar-static-top .navbar-inner.black-gradient .container-fluid .brand .rad {
	font-family: Verdana, Geneva, sans-serif;
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
						<a id="user-popover" href="#" class="navbar-link user-info"> <i class="radmin-icon radmin-user"></i>
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
						<li div class="sidebar-nav">
							<a href="Principal.php">
								<span class="box">
									<i class="radmin-icon radmin-home"></i>
								</span>
								<span class="hidden-tablet hidden-phone">Principal</span>
							</a>
						</li>
                        
                        <li div class="sidebar-nav">
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
									<i class="radmin-icon radmin-user-3"></i>
								</span>
								<span class="hidden-tablet hidden-phone">Usuarios</span>
								<span class="label pull-right hidden-tablet hidden-phone">2</span>
							</a>
							<div id="collapse1" class="accordion-body collapse">
								<ul class="nav nav-stacked submenu">
									<li class="accordion" id="navigation-sample-pages">
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
											</span><span class="hidden-tablet hidden-phone">Modificar Usuarios</span></a>
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
									 <li id="navigation-index">
										<a href="grafica.php">
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
							  <h1>Instituto Tecnológico Superior Zacatecas Sur</h1>
								<p>
								Sistema de Información Integral del <span class="welcome"><span class="text-info">
                                </span>Tecnológico. </p>
								
							</div>
						</div>
					</div>

				  <div class="row-fluid">
						<div class="span12">
							<h2 class="welcome">
								Gráfica 
							    <div class="squiggly-border"></div>
							</h2>
						</div>
                        <table align="center">
                        <!--Esta parte gauarda los valores de la subireccion academica -->
                        <tr>
                        <td>
                        <input type="hidden" value="<?php echo $cuentaAsignadoAcademica;?>" name="campo1" id="asignadosAcademica">
                        </td>
                        <td>
                        <input type="hidden" value="<?php echo $cuentaPendienteAcademica;?>" name="campo2" id="pendientesAcademica">
                        </td>
                        <td>
                        <input type="hidden" value="<?php echo $cuentaTrabajandoAcademica;?>" name="campo3" id="trabajandoAcademica">
                        </td>
                         <td>
                        <input type="hidden" value="<?php echo $cuentaSolicitaAcademica;?>" name="campo4" id="liberaAcademica">
                        </td>
                        </tr>
                        <!--Aqui empeiza el area administrativa  -->
                        <tr>
                        <td>
                        <input type="hidden" value="<?php echo $cuentaAsignadoAdministrativa;?>" name="campo5" id="asignadosAdministrativa">
                        </td>
                        <td>
                        <input type="hidden" value="<?php echo $cuentaPendienteAdministrativa;?>" name="campo6" id="pendientesAdministrativa">
                        </td>
                        <td>
                        <input type="hidden" value="<?php echo $cuentaTrabajandoAdministrativa;?>" name="campo7" id="trabajandoAdministrativa">
                        </td>
                         <td>
                        <input type="hidden" value="<?php echo $cuentaSolicitaAdministrativa;?>" name="campo8" id="liberaAdministrativa">
                        </td>
                        </tr>
                        
                         <!--Aqui empeiza el area planeacion y vinculacion  -->
                        <tr>
                        <td>
                        <input type="hidden" value="<?php echo $cuentaAsignadoPlaneacion;?>" name="campo9" id="asignadosPlaneacion">
                        </td>
                        <td>
                        <input type="hidden" value="<?php echo $cuentaPendientePlaneacion;?>" name="campo10" id="pendientesPlaneacion">
                        </td>
                        <td>
                        <input type="hidden" value="<?php echo $cuentaTrabajandoPlaneacion;?>" name="campo11" id="trabajandoPlaneacion">
                        </td>
                         <td>
                        <input type="hidden" value="<?php echo $cuentaSolicitaPlaneacion;?>" name="campo12" id="liberaPlaneacion">
                        </td>
                        </tr>

                     
                        </table>
					</div>
<!--INICIO DE LA GRÁFICA -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript" src="js/highcharts.js"></script>

<style type="text/css">
	${demo.css}
</style>

 
<script>

</script>

<script type="text/javascript">
var asignadosAcademica=parseInt(document.getElementById("asignadosAcademica").value);
var pendientesAcademica=parseInt(document.getElementById("pendientesAcademica").value);
var trabajandoAcademica=parseInt(document.getElementById("trabajandoAcademica").value);
var liberaAcademica=parseInt(document.getElementById("liberaAcademica").value);

var asignadosAdministrativa=parseInt(document.getElementById("asignadosAdministrativa").value);
var pendientesAdministrativa=parseInt(document.getElementById("pendientesAdministrativa").value);
var trabajandoAdministrativa=parseInt(document.getElementById("trabajandoAdministrativa").value);
var liberaAdministrativa=parseInt(document.getElementById("liberaAdministrativa").value);

var asignadosPlaneacion=parseInt(document.getElementById("asignadosPlaneacion").value);
var pendientesPlaneacion=parseInt(document.getElementById("pendientesPlaneacion").value);
var trabajandoPlaneacion=parseInt(document.getElementById("trabajandoPlaneacion").value);
var liberaPlaneacion=parseInt(document.getElementById("liberaPlaneacion").value);


$(document).ready(document).ready(function () {
    $('#container').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Documentos '
        },
        subtitle: {
            text: 'Sistema de Información Integral del TEC'
        },
        xAxis: {
            categories: ['Académica','Administrativa', 'Planeación y Vinculación', 'Marco']
        },
        yAxis: {
            min: 0,
            title: { text: 'Cantidad (total)'}
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f} documentos</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Asignado',
            data: [asignadosAcademica,asignadosAdministrativa, asignadosPlaneacion,4]
		

        }, {
            name: 'Pendientes',
            data: [pendientesAcademica, pendientesAdministrativa, pendientesPlaneacion, 5.0]

        }, {
            name: 'Trabajando',
            data: [trabajandoAcademica, trabajandoAdministrativa, trabajandoPlaneacion, 33]

        }, {
            name: 'En espera de respuesta',
            data: [liberaAcademica, liberaAdministrativa,liberaPlaneacion, 20]

        }]
    });
});
</script>

<script src="js/highcharts.js"></script>
<script src="js/modules/exporting.js"></script>

<div id="container" style="min-width: 320px; height: 400px; margin: 0 auto"></div>
<!--FIN DE LA GRÁFICA --> 
    
    
					<div class="row-fluid">
					  <div class="row-fluid">
						<div class="span12">
							
						  <div class="squiggly-border"></div>
							<div class="row-fluid">
							  <div class="span12"></div>
							</div>
							<div class="row-fluid">
							  <div class="span12"></div>
							</div>

							<div class="row-fluid">
								<div class="span12">
									<div class="span1 hidden-phone"></div>
								</div>
							</div>

						</div>
					</div>

					<div class="align-center">
						<div class="span12">Copyright © 2014. Instituto Tecnológico Superior Zacatecas Sur

Av. Tecnológico # 100 Tlaltenango, Zac

Col. Las Moritas, C.P. 99700

Tel. (s) 01 (437) 9541834, 9540675, 9541030 Fax 9540760

E-mail: Webmaster@itszas.edu.mx</div>
					</div>					

					

					<div class="row-fluid">
						
						<div class="span2"></div>
					</div>

					<!-- <div class="row-fluid">
					<div class="shadow-bottom"></div>
				</div>
				-->
			</div>
		</div>
        
		<div class="row-fluid">
			<div class="span12">&nbsp;</div>
		</div>

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
			<a href="http://itszas.edu.mx" target="_blank">SYSTeam</a>
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

		
