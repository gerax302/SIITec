<?php
	session_start();
    include "conexion.php";
     $nombre= $_SESSION['nombresesion'];
	
	$recibido = ($_GET['id']);
	
	ini_set('date.timezone','America/Mexico_City'); 
    $hora= "".date("g:i A");
	
	date_default_timezone_set("'UTC'");
	$fecha= date ("Y/m/d");
		//INSERCIÓN A TABLA BITACORA
	$consulta = "select * from Documento  where idDocumento="."'".$recibido."'";
    $res2=mysql_query($consulta, $con);
		
		
		while($row = @mysql_fetch_array($res2))
	{
	 	$ingresa ="Insert into  itszased_cdoc.Bitacora(idBitacora,fechaDeModificacion,tipoDocumento,estatus,nombreUsuario, area, idDocumento, hora) values(null,  
		'".$fecha."', 
		'".$row["tipoDocumento"]."', 
		'".$_POST["selecciona"]."',
		'".$_SESSION["nombresesion"]."',
		'".$row["area"]."',
		'".$recibido."',
		'".$hora."'
		)";
	}
	$res1=mysql_query($ingresa, $con)or die ("problema con query ingresa");
	
	
	$qEstatus = "UPDATE Documento set estatus='".$_POST["selecciona"]."' where idDocumento='$recibido'";
	



	mysql_query($qEstatus, $con) or die ("problema con query estatus"
	);

				

	echo "<script type='text/javascript'> 
		  	  alert('El documento se ha modificado'); 
    window.location='Principal.php';</script>";
	
?>