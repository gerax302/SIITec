<?php 
session_start();
require_once("conexion.php");
$recibido = ($_GET['id']);
if($_SESSION["nombresesion"])
{
	?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>SANTec: Modificar Documento</title>
	<meta name="description" content="Archivo que contiene el formulario con el que se permite modificar el documentos que en un momento fue dado de alta en el sistema" />
	<meta name="Elizabeth" content="Formulario Modificar Documento" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- Styles -->
	<!-- Logo Font - Molle -->
	<link href="css/molle.css" rel="stylesheet" type="text/css" />

	<link href="css/bootstrap.css" rel="stylesheet" />
	<link rel="stylesheet" href="/css/icon-style.css" />
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
	<link rel="stylesheet" type="text/css" href="/css/radmin-plugins.css" />
	<style type="text/css">
	#body-sample-pages .navbar.navbar-inverse.navbar-static-top .navbar-inner.black-gradient .container-fluid .brand .rad {
	font-family: Verdana, Geneva, sans-serif;
	color: #090;
}
    #body-sample-pages .navbar.navbar-inverse.navbar-static-top .navbar-inner.black-gradient .container-fluid .brand {
	font-family: Verdana, Geneva, sans-serif;
}
    #body-sample-pages .black-gradient .brand.pull-right .rad {
	font-family: Verdana, Geneva, sans-serif;
	color: #090;
}
    #body-sample-pages .black-gradient .brand.pull-right {
	font-family: Verdana, Geneva, sans-serif;
}
    #body-sample-pages .container-fluid.main-container .row-fluid .span12 .container-fluid.content-wrapper .span12 fieldset .control-group .control-label {
	font-size: 14px;
}
    </style>
	<!--[if lte IE 8]>
	<style>
				select, textarea, input[type="text"], input[type="password"], input[type="datetime"], input[type="datetime-local"], input[type="date"], input[type="month"], input[type="time"], input[type="week"], input[type="number"], input[type="email"], input[type="url"], input[type="search"], input[type="tel"], input[type="color"], .uneditable-input {
					min-height: 20px !important;
				}
			</style>
	<![endif]-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body id="body-sample-pages">

	<div class="navbar navbar-inverse navbar-static-top">
		<div class="navbar-inner black-gradient">
			<div class="container-fluid"><a class="brand" href="index.html">
			<span class="rad">SII</span>Tec
				</a>
			  <div class="nav-collapse collapse">
			    <p class="navbar-text pull-right"> <a id="user-popover" href="#" class="navbar-link user-info"> <i class="radmin-icon radmin-user"></i>
			      <?php
	 
	  echo($_SESSION['nombresesion']);
		
	 ?>
			      </a> <a href="salir.php" class="btn btn-mini btn-inverse navbar-link logout"> <i class="radmin-icon radmin-redo"></i> Cerrar Sesión </a> </p>
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
			  <li class="first">
				  <a href="#">
					  <i class="radmin-bookmark"></i>
					  <span>Principal</span>
				  </a>
				</li>
				<li>
					<a href="#">
						<i class="radmin-pencil"></i>
					<span>Agregar Documento</span></a>
				
				</li>
				<li>
					<div class="notifications-wrapper">
						<div class="notifications"> <strong>12</strong>
						</div>
					</div>
					<a href="#">
						<i class="radmin-bell"></i>
						<span>Notificaciones</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="radmin-cabinet"></i>
						<span>Consultar </span>
					</a>
				</li>
				<li id="color-switcher-control">
					<a href="#">
						<i class="radmin-cog"></i>
						<span>Temas</span>
					</a>
				</li>
			</ul>

			<div class="notifications-wrapper">
				<div class="color-switcher" id="color-switcher" style="display:none">
					<small>Choose style</small>
					<br />
					<span class="default color-switcher-color"></span>
					<span class="pink color-switcher-color"></span>
					<span class="green color-switcher-color"></span>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid main-container">
		<div class="row-fluid">
			<div class="span12">

				<div class="sidebar-nav">
					<ul class="nav nav-stacked left-menu">
						<li id="navigation-index">
							<a href="index.html">
								<span class="box">
									<i class="radmin-icon radmin-home"></i>
								</span>
								<span class="hidden-tablet hidden-phone">Inicio</span>
							</a>
						</li>
						<li id="navigation-calendar"><a class="accordion-toggle" data-toggle="collapse" data-parent="#navigation-sample-pages" href="#collapse1">
							<span class="box">
								<i class="radmin-icon radmin-file"></i>
							</span>Documentos</a>
							<div id="collapse1" class="accordion-body collapse">
							  <ul class="nav nav-stacked submenu">
							    <li>
							      <a href="users.html">
							        <span class="box">
							          <i class="radmin-icon radmin-user"></i>
						            </span>
							        <span class="hidden-tablet hidden-phone">Documentos Registrados</span>
						          </a>
						        </li>
							    <li>
							      <a href="invoices.html">
							        <span class="box">
							          <i class="radmin-icon radmin-clipboard-2"></i>
						            </span>
							        <span class="hidden-tablet hidden-phone">Agregar Documentos</span>
						          </a>
						        </li>
                                
						      </ul>
						  </div>
						</li>
						
				  </ul>
				</div>
				<span class="controls">

				</span>
				<div class="container-fluid content-wrapper">

					<div class="row-fluid">
						<div class="span12">
							<div class="hero-unit non-index">
								<h2>Modificar Documento</h2>
								<p>
									En este apartado podrás  modificar los datos de los documentos.
								</p>
								<br />
								<p class="hidden-phone">
									
							  </p>
							</div>
						</div>
				  </div>
					<div class="row-fluid">
						<div class="span12"></div>
					</div>

					<class class="row-fluid">
						<div class="span12">
							<h4 class="title">Detalles del Documento</h4>
							<div class="squiggly-border"></div>
						  <form class="form-horizonta invoice-form"  action="modificaDocumentoLogico.php?id=<?php echo $recibido ?> " method="post" autocomplete="on"/>
								<fieldset>
								  <div class="control-group">Folio
								    <div class="controls">
									<input id="cajaFolio" class="input-large" type="text" name="cajaFolio" /></div>
								  </div>

								  <div class="control-group"><span class="control-label">Asunto</span>
<div class="controls">
			    <input id="cajaAsunto" class="input-large" type="text" name="cajaAsunto" /></div>
									</div>
                                    
<div class="control-group">
										<label class="control-label" for="invoice-last-name">Fecha del Documento   </label>
										<div class="controls">
											<input type="date" name="cajaFechaDocumento">
                                            
              </div>
                                            
								  </div>                                    

<div class="control-group">
  <label class="control-label" for="invoice-last-name2">Fecha de Recepción</label>
  <div class="controls">
    <input type="date" name="cajaFechaRecepcion">
  </div>
</div>
<div class="control-group">
    <label class="control-label" for="invoice-last-name3">Fecha de Asignación</label>
    <div class="controls">
      <input type="date" name="cajaFechaAsignacion">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="invoice-last-name4">Fecha Límite de Respuesta</label>
    <div class="controls">
      <input type="date" name="cajaFechaRespuesta">
    </div>
  </div>
  
<div class="control-group">
  <label class="control-label" for="invoice-last-name">Formato</label>
            <div class="controls">
              <select id="comboFormato" name="comboFormato">
                <option value="Físico" id="1">
                Físico
                <option value="Digital" id="2">
                Digital
                </select>
            </div>
      </div>
          <div class="control-group"><span class="control-label">Remitente </span>
  <div class="controls">
			  <input id="cajaRemitente" class="input-large" type="text" name="cajaRemitente" /></div>
								  </div>
                                  <div class="control-group">
 <label class="control-label" for="invoice-last-name5">Dependencia</label>
<div class="controls">
    <input id="cajaDependencia" class="input-large" type="text" name="cajaDependencia" />
  </div>
</div>
<div class="control-group">
            <label class="control-label" for="invoice-last-name">Área</label>
            <div class="controls">
              <select id="comboArea" name="comboArea">
                <option value="Dirección" id="1">
                Dirección
                <option value="Académica" id="2">
                Académica
                <option value="Administrativa" id="3"/>
	            Administrativa
                <option value="Planeación y Vinculación" id="4"/>
	            Planeación y Vinculación
              </select>
            </div>
          </div>

								  <div class="control-group">
										<label class="control-label" for="invoice-last-name">Descripción</label>
										<div class="controls">
									  <input id="cajaDescripcion" class="input-large" type="text" name="cajaApellidoPat" /></div>
									</div>
                                  <div class="control-group">
            <label class="control-label" for="invoice-last-name">Estatus</label>
            <div class="controls">
              <select id="comboEstatus" name="comboEstatus">
                <option value="Abierto" id="1">
                Abierto
                <option value="Asignado" id="2">
                Asignado
                </select>
            </div>
          </div>
                                  <div class="hr"></div>

									<h6>&nbsp;</h6>
									<div class="hr"></div>

								  <div class="form-actions pull-right">
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

	<footer class="black-gradient">
		<a class="brand pull-right" href="index.html">
		<span class="rad">SII</span>Tec
		</a>
		<div class="square-turtle pull-left">
			<p>
				© Todos los Derechos Reservados  reserved SYSTeam 2014
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