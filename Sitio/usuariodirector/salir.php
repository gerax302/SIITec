<?php
 
	session_start();
  	$destruirSesion = session_destroy (); 

  	if ($destruirSesion == true) 
    	header ("Location: ../index.html"); 
  	else 
    	echo "Algo ha ido mal..."; 

?>