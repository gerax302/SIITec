<?php

	session_start();
	require_once("conexion.php");
	$sql="SELECT * from Bitacora ";
	$res=mysql_query($sql,$con);
	$row=mysql_fetch_array($res);
	$nombre=$row['nombre'];
	$ip = $_SERVER['REMOTE_ADDR'];

	//AQUI SE TRUNCA UNA TABLA....SE BORRAN TODOS LOS CAMPOS DE LA TABLA QUE SE PASA COMO PARAMETRO
	$boorra ="truncate Documento ";
	mysql_query($boorra, $con);
	echo "Listo !";

?>