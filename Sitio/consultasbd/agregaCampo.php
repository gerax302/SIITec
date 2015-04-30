<?php
include "conexion.php";

	$accion = mysql_query("Alter table itszas48_cdoc.Documento ADD comentario VARCHAR(250) ;");
	if (!$accion) {
	    echo 'No se pudo ejecutar la consulta: ' . mysql_error();
	    exit;
	}
	else
	    echo 'Campo agregado' ;
?>