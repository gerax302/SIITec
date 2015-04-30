<?php
	include "conexion.php";
	$pass=MD5($_POST["cajaContrasena"]);
	$recibido = ($_GET['id']);

	$valorNombre=$_POST["cajaNombre"];
	$valorApellidoPat=$_POST["cajaApellidoPat"];
	$valorApellidoMat=$_POST["cajaApellidoMat"];
	$valorRespuesta=$_POST["cajaRespuesta"];
	$valorContrasena=$_POST["cajaContrasena"];
		
	$patron = '/^[a-zA-Z |" "]*$/';

	$qNombre = "UPDATE Usuario set nombreUsuario='".$_POST["cajaNombre"]."' where idUsuario='$recibido'";
	$qMat = "UPDATE Usuario set apellidoPat='".$_POST["cajaApellidoPat"]."' where idUsuario='$recibido'";
	$qPat = "UPDATE Usuario set apellidoMat='".$_POST["cajaApellidoMat"]."' where idUsuario='$recibido'";
	$qContraNueva = "UPDATE Usuario set contrasena='".$pass."' where idUsuario='$recibido'";
	$qArea = "UPDATE Usuario set area='".$_POST["comboArea"]."' where idUsuario='$recibido'";
	$qPass = "UPDATE Usuario set pass='".$_POST["cajaContrasena"]."' where idUsuario='$recibido'";

	if($valorNombre=="")
	{
			$bandeNombre="false";
	  
	  		echo "<script type='text/javascript'> 
	 		alert('La caja del Nombre del usuario esta vacio ');
     		window.location='modificarUsuarios.php?id=$recibido';</script>";		
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
	 				alert('La caja del Nombre del usuario no acepta numeros');
     				window.location='modificarUsuarios.php?id=$recibido';</script>";
				}
	}
		  
	if($valorApellidoPat=="" )
	{
		$bandeApellidoPat="false";
		
		echo "<script type='text/javascript'> 
		alert('La caja del Apellido Paterno esta vacio ');
		window.location='modificarUsuarios.php?id=$recibido';</script>";
		
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
				window.location='modificarUsuarios.php?id=$recibido';</script>";
			}
	}		 
	 
	if($valorApellidoMat=="")
	{
		$bandeApellidoMat="false";
		echo "<script type='text/javascript'> 
		alert('La caja del Apellido Materno esta vacio ');
		window.location='modificarUsuarios.php?id=$recibido';</script>";
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
					window.location='modificarUsuarios.php?id=$recibido';</script>";
			}
		}	 
	
	if($valorRespuesta=="")
	{
		$bandeRespuesta="false";
		echo "<script type='text/javascript'> 
		alert('La caja Respuesta esta vacio ');
		window.location='modificarUsuarios.php?id=$recibido';</script>";
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
				window.location='modificarUsuarios.php?id=$recibido';</script>";					
		}
	}	 	 
	
	if($valorContrasena=="")
	{
		$bandeContraseña="false";
		
		echo "<script type='text/javascript'> 
		alert('La caja Contraseña esta vacio ');
		window.location='modificarUsuarios.php?id=$recibido';</script>";	
	}
	else
	{
		$bandeContraseña="true";		
	}	
		
	if($bandeNombre=="true" && $bandeApellidoPat=="true" && $bandeApellidoMat=="true" && $bandeRespuesta=="true" && 
	$bandeContraseña=="true")
	{
		$res = mysql_query($sql, $con);
		
		echo "<script type='text/javascript'> 
		alert('Se ha registrado el usuario'); 
		window.location='Principal.php';</script>";
	}
?>