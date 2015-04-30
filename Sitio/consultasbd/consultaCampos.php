<?php
include "conexion.php";
	// $consulta="show columns from itszas48_cdoc.Documento";
	//"describe itszas48_cdoc.Documento";
	//mysql_query($consulta, $con)or die ("problema con query");


///////////////////////////	///////////////////////////	///////////////////////////	///////////////////////////
$resultado = mysql_query("SHOW COLUMNS FROM itszased_cdoc.Documento");
if (!$resultado) {
    echo 'No se pudo ejecutar la consulta: ' . mysql_error();
    exit;
}
if (mysql_num_rows($resultado) > 0) {
    while ($fila = mysql_fetch_assoc($resultado)) {
        print_r($fila);
		echo "<br>";
    }
}
//////////////////////////	///////////////////////////	///////////////////////////	///////////////////////////

 

?>