<?php

	session_start();
	require_once("conexion.php");
	$sql="SELECT * from Usuario ";
	$res=mysql_query($sql,$con);
	$row=mysql_fetch_array($res);
	$nombre=$row['nombre'];
	$ip = $_SERVER['REMOTE_ADDR'];

	if (mysql_num_rows($res)==0)
	{
	  echo("<script type='text/javascript'> 
	  alert('Esto no es valido'); 
	  window.location='../index.html';</script>");
	}
	else
	{
      $consu=mysql_query("select * from Usuario ");	
	  $cont=1;
	  echo "Conteo				Nombre				Ap			Am			Area			CalveUsuario";
	  echo "<br>"; 
		while ($x = mysql_fetch_array($consu))
		{
			echo ($cont."    ".$x[1]."   ".$x[2]."   ".$x[3]."   ".$x[5]."  "."  ".$x[6]."  ".$x[7] .$x[0]."  ".$x[8]); 
			echo "<br>"; 
			$cont++;
		}
	}
?>