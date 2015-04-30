<?php 

 	
	session_start();
	require_once("conexion.php");
	$recibida = ($_GET['idDocumento']);

	
	
	$comentario=$_POST["valores"]; 	
	
	$banderaLibera=$_REQUEST["si"]."".$_REQUEST["no"];
		
	if($banderaLibera=="Aceptar"){
	$consulta="delete from Documento where idDocumento='".$recibida ."';";
	
	mysql_query($consulta, $con);
	
	  echo "<script type='text/javascript'>  
        window.location='Principal.php?id=$comentario';</script>";
	}
	if($banderaLibera=="Reenviar"){
		
		
		
		 echo "<script type='text/javascript'>  
        window.location='Principal.php?id=$comentario';</script>"; 
	}
	
	
?>