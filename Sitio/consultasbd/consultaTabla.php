<?php

	session_start();
	require_once("conexion.php");
	$sql="SELECT * from Usuario ";
	$res=mysql_query($sql,$con);
	$row=mysql_fetch_array($res);

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
	  echo "Nombres de los campos aqui....";
	  echo "<br>"; 
		while ($x = mysql_fetch_array($consu))
		{
			echo ($cont."    ".$x[0]."   ".$x[1]."   ".$x[2]."   ".$x[3]."  ".$x[4]."  ".$x[5] .$x[6]."  ".$x[7]."  ".$x[8]."  ".$x[9]."  ".$x[10]."  ".$x[11]."  ".$x[12]."  ".$x[13]." ".$x[14]." ".$x[15]); 
			echo "<br>"; 
			$cont++;
		}
	}
?>