<?php
	include "conexion.php";
	//echo ("entra al registro");
	$pass=MD5($_POST["cajaContrasena"]);
	$sql = " insert into itszased_cdoc.Usuario(idUsuario, nombreUsuario, apellidoPat, apellidoMat, contrasena, area, preguntaSeguridad, respuesta, pass) values(
		null, 
		'".$_POST["cajaNombre"]."', 
		'".$_POST["cajaApellidoPat"]."',      	
		'".$_POST["cajaApellidoMat"]."', 
		'".$pass."', 
		'".$_POST["cajaArea"]."',
		'".$_POST["seleccionaPregunta"]."',
		'".$_POST["cajaRespuesta"]."',
		'".$_POST["cajaContrasena"]."'
		)";
	
	
	    $valorNombre=$_POST["cajaNombre"];
		$valorApellidoPat=$_POST["cajaApellidoPat"];
		$valorApellidoMat=$_POST["cajaApellidoMat"];
		$valorRespuesta=$_POST["cajaRespuesta"];
		$valorContrasena=$_POST["cajaContrasena"];
		$valorArea=$_POST["cajaArea"];
		$valorPregunta=$_POST["seleccionaPregunta"];
		
		
		
		$bandeNombre="false";
		$bandeApellidoPat="false";
		$bandeApellidoMat="false";
		$bandeRespuesta="false";
		$bandeContrasena="false";
		
		if($valorArea=="Dirección"){
				$seleccionDireccion="selected";
			}
		if($valorArea=="Académica"){
			 $seleccionAcademica="selected";
			}
		if($valorArea=="Administrativa"){
			 $seleccionAdministrativa="selected";
			}
		if($valorArea=="Planeación y Vinculación"){
			 $seleccionPlanVinculacion="selected";
			}
			
			
			
			
		if($valorPregunta=="1"){
			 $seleccionPregunta1="selected";
			}
			
		if($valorPregunta=="2"){
			 $seleccionPregunta2="selected";
			}
		if($valorPregunta=="3"){
			 $seleccionPregunta3="selected";			
			}
				
				
		$patron = '/^[a-zA-Z]|" "*$/';

	if($valorNombre=="")
	{
		
			$bandeNombre="false";
	  
	  		echo "<script type='text/javascript'> 
	 		alert('La caja del Nombre del usuario esta vacio ');
     		window.location='AltaUsuario.php?Paterno=$valorApellidoPat&Materno=$valorApellidoMat&Password=$valorContrasena &Respuesta=$valorRespuesta&Area1=$seleccionDireccion&Area2=$seleccionAcademica&Area3=$seleccionAdministrativa&Area4=$seleccionPlanVinculacion&Pregunta1=$seleccionPregunta1&Pregunta2=$seleccionPregunta2&Pregunta3=$seleccionPregunta3  ';</script>";	
			}
			else
			{
				$bandeNombre="true";
				if(preg_match($patron,$valorNombre) )
				{
					$bandeNombre="true";
       
				}
				else
				{
	 				$bandeNombre="false";
	 
	 				echo "<script type='text/javascript'> 
	 				alert('La caja del Nombre del usuario no acepta numeros');     				window.location='AltaUsuario.php?Paterno=$valorApellidoPat&Materno=$valorApellidoMat&Password=$valorContrasena &Respuesta=$valorRespuesta&Area1=$seleccionDireccion&Area2=$seleccionAcademica&Area3=$seleccionAdministrativa&Area4=$seleccionPlanVinculacion&Pregunta1=$seleccionPregunta1&Pregunta2=$seleccionPregunta2&Pregunta3=$seleccionPregunta3 ';</script>";	
	
	
				}


	}
		  
	
	if($valorApellidoPat=="" )
	{
		
		$bandeApellidoPat="false";
		
		echo "<script type='text/javascript'> 
		alert('La caja del Apellido Paterno esta vacio ');
		window.location='AltaUsuario.php?Nombre=$valorNombre&Materno=$valorApellidoMat&Password=$valorContrasena &Respuesta=$valorRespuesta&Area1=$seleccionDireccion&Area2=$seleccionAcademica&Area3=$seleccionAdministrativa&Area4=$seleccionPlanVinculacion&Pregunta1=$seleccionPregunta1&Pregunta2=$seleccionPregunta2&Pregunta3=$seleccionPregunta3 ';</script>";
		}
		else
		{
			$bandeApellidoPat="true";
			
			if(preg_match($patron,$valorApellidoPat))
			{
       			$bandeApellidoPat="true";
 			}
			else
			{
				$bandeApellidoPat="false";
				
				echo "<script type='text/javascript'> 
				alert('La caja del Apellido Paterno no acepta numeros');
					window.location='AltaUsuario.php?Nombre=$valorNombre&Materno=$valorApellidoMat&Password=$valorContrasena &Respuesta=$valorRespuesta&Area1=$seleccionDireccion&Area2=$seleccionAcademica&Area3=$seleccionAdministrativa&Area4=$seleccionPlanVinculacion&Pregunta1=$seleccionPregunta1&Pregunta2=$seleccionPregunta2&Pregunta3=$seleccionPregunta3 ';</script>";
			}

}	 
	 
	if($valorApellidoMat=="")
	{
		$bandeApellidoMat="false";
		echo "<script type='text/javascript'> 
		alert('La caja del Apellido Materno esta vacio ');
			window.location='AltaUsuario.php?Nombre=$valorNombre&Paterno=$valorApellidoPat&Password=$valorContrasena&Respuesta=$valorRespuesta&Area1=$seleccionDireccion&Area2=$seleccionAcademica&Area3=$seleccionAdministrativa&Area4=$seleccionPlanVinculacion&Pregunta1=$seleccionPregunta1&Pregunta2=$seleccionPregunta2&Pregunta3=$seleccionPregunta3 ';</script>";
		}
		else
		{
			$bandeApellidoMat="true";
			
			if(preg_match($patron,$valorApellidoMat))
			{
				$bandeApellidoMat="true";
				}
				else
				{
					$bandeApellidoMat="false";
					echo "<script type='text/javascript'> 
					alert('La caja del Apellido Materno no acepta numeros');
		window.location='AltaUsuario.php?Nombre=$valorNombre&Paterno=$valorApellidoPat&Password=$valorContrasena &Respuesta=$valorRespuesta&Area1=$seleccionDireccion&Area2=$seleccionAcademica&Area3=$seleccionAdministrativa&Area4=$seleccionPlanVinculacion&Pregunta1=$seleccionPregunta1&Pregunta2=$seleccionPregunta2&Pregunta3=$seleccionPregunta3 ';</script>";
			}

	}	 
	
	if($valorRespuesta=="")
	{
		$bandeRespuesta="false";
		echo "<script type='text/javascript'> 
		alert('La caja Respuesta esta vacio ');
		window.location='AltaUsuario.php?Nombre=$valorNombre&Paterno=$valorApellidoPat&Materno=$valorApellidoMat&Password=$valorContrasena&Area1=$seleccionDireccion&Area2=$seleccionAcademica&Area3=$seleccionAdministrativa&Area4=$seleccionPlanVinculacion&Pregunta1=$seleccionPregunta1&Pregunta2=$seleccionPregunta2&Pregunta3=$seleccionPregunta3 ';</script>";
		}
		else
		{
			$bandeRespuesta="true";	
			if(preg_match($patron,$valorRespuesta))
			{
				$bandeRespuesta="true";	   
				}
				else
				{
					$bandeRespuesta="false";
					
					echo "<script type='text/javascript'> 
					alert(''La caja de Respuesta no acepta numeros');
		window.location='AltaUsuario.php?Nombre=$valorNombre&Paterno=$valorApellidoPat&Materno=$valorApellidoMat&Password=$valorContrasena&Area1=$seleccionDireccion&Area2=$seleccionAcademica&Area3=$seleccionAdministrativa&Area4=$seleccionPlanVinculacion&Pregunta1=$seleccionPregunta1&Pregunta2=$seleccionPregunta2&Pregunta3=$seleccionPregunta3 ';</script>";
					
			}
	}	 	 
	
	if($valorContrasena=="")
	{
		$bandeContraseña="false";
		
		echo "<script type='text/javascript'> 
		alert('La caja Contraseña esta vacio ');
window.location='AltaUsuario.php?Nombre=$valorNombre&Paterno=$valorApellidoPat&Materno=$valorApellidoMat&Respuesta=$valorRespuesta&Area1=$seleccionDireccion&Area2=$seleccionAcademica&Area3=$seleccionAdministrativa&Area4=$seleccionPlanVinculacion&Pregunta1=$seleccionPregunta1&Pregunta2=$seleccionPregunta2&Pregunta3=$seleccionPregunta3 ';</script>";
		
		}
		else
		{
			$bandeContraseña="true";
			
	}	
		
	if($bandeNombre=="true" && $bandeApellidoPat=="true" && 
	$bandeApellidoMat=="true" && $bandeRespuesta=="true" && 
	$bandeContraseña=="true")
	{
		
		$res = mysql_query($sql, $con);
		
		echo "<script type='text/javascript'> 
		alert('Se ha registrado el usuario'); 
window.location='AltaUsuario.php?Nombre=$valorNombre&Paterno=$valorApellidoPat&Materno=$valorApellidoMat&Respuesta=$valorRespuesta&Area1=$seleccionDireccion&Area2=$seleccionAcademica&Area3=$seleccionAdministrativa&Area4=$seleccionPlanVinculacion&Pregunta1=$seleccionPregunta1&Pregunta2=$seleccionPregunta2&Pregunta3=$seleccionPregunta3 ';</script>";
	}
	
?>