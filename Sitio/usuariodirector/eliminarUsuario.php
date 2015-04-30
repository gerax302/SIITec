<?php 

 	
	session_start();
	require_once("conexion.php");
	$recibida = ($_GET['id']);
	/*$parametro=($_POST['idUsuario']);*/
   
	$id= 0 + $recibida;

	$sql="DELETE FROM `itszas48_cdoc`.`Usuario`  WHERE `Usuario`.`idUsuario`= $id  and $id!="."'4'";
	
	/*buscar el nombre de el usuario a eliminar*/
	$res=mysql_query($sql,$con);
	
	if($id=="4"){
		  echo "<script type='text/javascript'> 
		  	  alert('ERROR: El Usuario que se intenta eliminar es el administrador'); 
        window.location='MuestraUsuarios.php';</script>"; 
	
	}
	//$row=mysql_fetch_array($res);

	$ip = $_SERVER['REMOTE_ADDR'];
	/*actulaizar inmediatamente en cuanto el usuario haya sido eliminado */
	
	  echo "<script type='text/javascript'> 
		  	  alert('El usuario ha sido eliminado'); 
        window.location='MuestraUsuarios.php';</script>";  
    
	
?>