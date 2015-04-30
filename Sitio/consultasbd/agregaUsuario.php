<?php
	include "conexion.php";
	$pass=MD5(yadira123);
	$accion = mysql_query("insert into itszas48_cdoc.Usuario(idUsuario, nombreUsuario, apellidoPat, apellidoMat, contrasena, area, preguntaSeguridad, respuesta, pass)
values(	null, 
		'Yadira', 
		'Figueroa',      	
		'Gonzales', 
		'".$pass."', 
		'Administrativa',
		'¿Cuál es el nombre de tu mejor amigo?',
		'yadirita',
		'yadira123'
		)");
	if (!$accion) {
	    echo 'No se pudo ejecutar la consulta: ' . mysql_error();
	    exit;
	}
	else
	    echo 'Usuario agregado' ;
?>