<?php


	session_start();
	require_once("conexion.php");
	$pass=MD5($_POST["password"]);
	$sql="select * from Usuario where nombreUsuario='".$_POST["username"]."' and contrasena='".$pass."'";
	$res=mysql_query($sql,$con);
	$row=mysql_fetch_array($res);
	
	$nombre=$row['nombreUsuario'];
	// el usuario con el id #1 debe ser el administrador para poder enviarlo a esa carpeta
	
	$id=$row['idUsuario'];
	if (mysql_num_rows($res)==0)
	{
		  echo("<script type='text/javascript'> 
		  alert('El Usuario o la Contrase\u00F1a es incorrecto'); 
		  window.location='index.html';</script>");
	}
	else
	{
		$_SESSION["nombresesion"]=$nombre;
		if(strcmp($id, '1')==0)
		{
			echo("<script type='text/javascript'>  	  	  
			/*alert('Soy el Administrador');*/  	  
		    window.location='UsuarioDirector/Principal.php';</script>");		
		}
		
		else if(strcmp($id, '2')==0)
		{
			echo("<script type='text/javascript'> 
			/*alert('No soy el Administrador');*/  	  	  
		    window.location='Administrador/Principal.php';</script>");	
		}
		else if(strcmp($id, '1')!=0 && strcmp($id, '2')!=0)
		{
			echo("<script type='text/javascript'> 
			/*alert('No soy el Administrador');*/  	  	  
		    window.location='Subdirector/Principal.php';</script>");		
		}
	
	}

?>