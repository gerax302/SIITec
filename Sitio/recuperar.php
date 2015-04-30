<?php 
	//CONTIENE LA LOGICA PARA RECUPERAR LA CONTRASEÑA DE UN USUARIO
 
	include "conexion.php";
  
	$nombreUsuario=$_POST['cajaUsuario'];  
	$preguntaSeguridad=$_POST['cajaPregunta'];
	$respuesta=$_POST['cajaRespuesta'];  	
	$valorNombre=$_POST["cajaUsuario"];
	$valorRespuesta=$_POST["cajaRespuesta"];

	$mensaje= "Tu contrasena es: ";	
	$mensajeIncorrecto= "Tus datos son incorrectos";

	$patron = '/^[a-zA-Z]*$/';
		
		
		echo $_POST["cajaPregunta"];
		
	$consulta="select pass from Usuario 
				where nombreUsuario='".$_POST["cajaUsuario"]."' and 
				preguntaSeguridad='".$_POST["cajaPregunta"]."'"."and 
				respuesta="."'".$_POST["cajaRespuesta"]."'";


	$res=mysql_query($consulta,$con);
	$row= mysql_fetch_array($res);
	$key=$row[0];	
	if($valorNombre=="" || $valorRespuesta=="")
	{
    	echo "<script type='text/javascript'> 
		alert('Un campo esta vacio ');
	    window.location='recuperarContrasena.php';</script>";
		
	}
	else
	{
		if(preg_match($patron,$valorNombre))
		{
			if (mysql_num_rows($res)==0)
			{
				echo "<script type='text/javascript'> 
				alert('".$mensajeIncorrecto.$key."'); 
				window.location='index.html';</script>";
			}
			else
			{
				echo "<script type='text/javascript'> 
				alert('".$mensaje.$key."'); 
				window.location='index.html';</script>";
			}  	      	
		}
		else
		{
			 echo "<script type='text/javascript'> 
			 alert('Uno de los campos no admite numeros');
			 window.location='recuperarContrasena.php';</script>";
		}
	}
?>