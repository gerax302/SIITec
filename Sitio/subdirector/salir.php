<?php 
session_start();
  $p = session_destroy (); 

  if ($p == true) 
    header ("Location: ../index.html"); 
  else 
    echo "Algo ha ido mal..."; 

?>