<?php

	$con=mysql_connect("localhost","itszased_super","TS0bax7JISob");		// usuario y contraseña de la BD
	$bd=mysql_select_db("itszased_cdoc",$con) 								//nombre de la BD
	OR DIE ("Fallo en el establecimiento de la conexión: ".mysql_error());	// catch
	
	
?>

