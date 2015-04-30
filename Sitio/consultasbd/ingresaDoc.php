<?php
include "conexion.php";
	// $consulta="show columns from itszas48_cdoc.Documento";
	//"describe itszas48_cdoc.Documento";
	//mysql_query($consulta, $con)or die ("problema con query");


///////////////////////////	///////////////////////////	///////////////////////////	///////////////////////////
mysql_query("insert into itszas48_cdoc.Documento(area, sesionUsuario) values('Direccion','hola')") or die ("no jalo");

mysql_query("select sesionUsuario from Documento ") or die ("no jalo");


//////////////////////////	///////////////////////////	///////////////////////////	///////////////////////////

 

?>