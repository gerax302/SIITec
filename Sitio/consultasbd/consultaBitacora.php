<?php

	session_start();
	require_once("conexion.php");
	$sql="SELECT * from Bitacora ";
	$res=mysql_query($sql,$con);
	$row=mysql_fetch_array($res);
	$nombre=$row['nombre'];
	$ip = $_SERVER['REMOTE_ADDR'];

	$boorra ="truncate Documento ";
	mysql_query($boorra, $con);

	/*if (mysql_num_rows($res)==0)
	{
	  echo("<script type='text/javascript'> 
	  alert('No se ha guardado nada'); 
	  window.location='../index.html';</script>");
	}
	else
	{
      $consu=mysql_query("select * from Bitacora ");	
	  $cont=1;
	  echo "Nombres de los campos aqui....";
	  echo "<br>"; 
		while ($x = mysql_fetch_array($consu))
		{
			echo ($cont."    ".$x[0]."   ".$x[1]."   ".$x[2]."   ".$x[3]."  ".$x[4]."  "."  ".$x[5]."  ".$x[6]); 
			echo "<br>"; 
			$cont++;
		}
	}
	*/
?>