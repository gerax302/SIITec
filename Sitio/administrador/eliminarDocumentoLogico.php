<?php 

 	
	session_start();
	require_once("conexion.php");
	$recibida = ($_GET['id']);
	
	/*$parametro=($_POST['idDocumento']);*/
	
     echo "<script type='text/javascript'> 
	 alert('El documento ha sido eliminado');
        window.location='MuestraDocumentos.php';</script>";  
	$id= 0+$recibida;
	$consultaEliminar="DELETE FROM `itszas48_cdoc`.`Documento`  WHERE `Documento`.`idDocumento`=$id ";
	
		/*buscar el documento a eliminar*/
		
	$res=mysql_query($consultaEliminar,$con);
	$row=mysql_fetch_array($res);

	$ip = $_SERVER['REMOTE_ADDR'];
	
	/*actulaizar inmediatamente en cuanto el documento haya sido eliminado */
    
?>