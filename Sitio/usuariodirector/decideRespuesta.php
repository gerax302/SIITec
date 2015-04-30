<?php 

 	
	session_start();
	require_once("conexion.php");
	$recibida = ($_GET['idDocumento']);

	
	
	$comentario=$_POST["valores"]; 	
	
	$banderaLibera=$_REQUEST["si"]."".$_REQUEST["no"];
		
	if($banderaLibera=="Liberar"){
	$consulta="Update Documento set comentario='".$comentario."' where idDocumento='".$recibida."';";
	
	mysql_query($consulta, $con);
	
	  echo "<script type='text/javascript'>  
        window.location='Principal.php?id=$comentario';</script>";
	}
	if($banderaLibera=="Rechazar"){
	$consultaRechaza="Update Documento set estatus='rechazado' where idDocumento='".$recibida ."';";	
		
	mysql_query($consultaRechaza, $con);	
	$consulta2="Update Documento set comentario='".$comentario."' where idDocumento='".$recibida."';";
	
	mysql_query($consulta2, $con);
		
		 echo "<script type='text/javascript'>  
        window.location='Principal.php';</script>"; 
	}
	
	
?>