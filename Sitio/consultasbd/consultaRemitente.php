<?php

	session_start();
	require_once("conexion.php");
	$sql="SELECT * from Remitente ";
	$res=mysql_query($sql,$con);
	$row=mysql_fetch_array($res);
	$nombre=$row['nombre'];
	$ip = $_SERVER['REMOTE_ADDR'];

	if (mysql_num_rows($res)==0)
	{
	  echo("<script type='text/javascript'> 
	  alert('No se ha guardado nada'); 
	  window.location='../index.html';</script>");
	}
	else
	{
      $consu=mysql_query("select idRemit,nombreDepend,nombreRemit from Remitente");	
	  echo "Nombres de los campos aqui....";
	  echo "<br>"; 
		while ($x = mysql_fetch_array($consu))
		{
			echo ("    ".$x[0]."    ".$x[1]."   ".$x[2]."   "); 
			echo "<br>"; 
		}
	}
?>