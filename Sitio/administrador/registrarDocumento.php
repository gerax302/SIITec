<?php
	session_start();
	include "conexion.php";
	$remitente="idRemit";
	
	$patron = '/^[a-zA-Z |" "]*$/';
					 
	$asuntoVacia="false";
	$descripcionVacia="false";
	$dependenciaVacia="false";
	$asuntoConNumeros="false";
	$remitenteConNumeros="false";
	
	$valorFolio=$_POST["cajaFolio"]; 
	$valorAsunto=$_POST["cajaAsunto"]; 
	$valorDescripcion=$_POST["cajaDescripcion"]; 
	$valorRemitente=$_POST["cajaRemitente"];
	$valorDependecia=$_POST["cajaDependencia"];
	
	$fechaDocumento= $_POST["cajaFechaDocumento"]; 
	$fechaRecepcion=$_POST["cajaFechaRecepcion"];
	$fechaAsignacion=$_POST["cajaFechaAsignacion"];
	$fechaRespuesta=$_POST["cajaFechaRespuesta"];
     
	$valorEstatus=$_POST["comboEstatus"];
	$valorFormato=$_POST["comboFormato"];
	
	
	
	
	if($valorEstatus=="Asignado"){
				$seleccionAsignado="selected";
			}
	if($valorEstatus=="Abierto"){
				$seleccionAbierto="selected";
			}
			
			
	
	if($valorFormato=="Físico"){
				$seleccionFormato2="selected";
			}
	if($valorFormato=="Digital"){
				$seleccionFormato1="selected";
			}


	if (isset($_POST['area1'])=="Dirección") 
		  {
			  $valorArea1="checked";
			  
			  
require_once("conexion.php");
$consulta = "Select * from  Usuario where area='Dirección'";
$res=mysql_query($consulta, $con);
$i=0;
$auxi=0;
$arreglo = array();
	while($row = @mysql_fetch_array($res))
	{
		$i=$i+1;
		$auxi=$i;
		$nombre1=$row['nombreUsuario'];
		
	}




		  }
		  
		  if (isset($_POST['area2'])=="Académica") 
		  {
			  $valorArea2="checked";
			  
			  require_once("conexion.php");
$consulta = "Select * from  Usuario where area='Académica'";
$res=mysql_query($consulta, $con);
$i=0;
$auxi=0;
$arreglo = array();
	while($row = @mysql_fetch_array($res))
	{
		$i=$i+1;
		$auxi=$i;
		$nombre2=$row['nombreUsuario'];
		
	}

		  }
		  
		  if (isset($_POST['area3'])=="Administrativa") 
		  {
			  $valorArea3="checked";
			  
			    require_once("conexion.php");
$consulta = "Select * from  Usuario where area='Administrativa'";
$res=mysql_query($consulta, $con);
$i=0;
$auxi=0;
$arreglo = array();
	while($row = @mysql_fetch_array($res))
	{
		$i=$i+1;
		$auxi=$i;
		$nombre3=$row['nombreUsuario'];
		
	}
		  }
		  if (isset($_POST['area4'])=="Planeación y Vinculación") 
		  {
			  $valorArea4="checked";
			  

$consulta = "Select * from  Usuario where area='Planeación y Vinculación'";
$res=mysql_query($consulta, $con);
$i=0;
$auxi=0;
$arreglo = array();
	while($row = @mysql_fetch_array($res))
	{
		$i=$i+1;
		$auxi=$i;
		$nombre4=$row['nombreUsuario'];
		
	}
		  }
		  
		  
		  
    
	  if($fechaDocumento>$fechaRecepcion)
		{
			echo "<script type='text/javascript'> 
		 alert('La fecha del documento no puede ser mayor a la fecha de recepción');
		window.location='AgregarDocumento.php?Folio=$valorFolio&Asunto=$valorAsunto&FechaDocumento=$fechaDocumento&FechaRecepcion=$fechaRecepcion&FechaAsignacion=$fechaAsignacion&FechaRespuesta=$fechaRespuesta&Formato1=$seleccionFormato1&Formato2=$seleccionFormato2&Remitente=$valorRemitente&Dependencia=$valorDependecia&area1=$valorArea1&area2=$valorArea2&area3=$valorArea3&area4=$valorArea4&Descripcion=$valorDescripcion&Estatus1=$seleccionAbierto&Estatus2=$seleccionAsignado ';</script>";
	
		}
	if($fechaDocumento>$fechaAsignacion)
		{
			echo "<script type='text/javascript'> 
		 alert('La fecha del documento no puede ser mayor a la fecha de Asignación');
		window.location='AgregarDocumento.php?Folio=$valorFolio&Asunto=$valorAsunto&FechaDocumento=$fechaDocumento&FechaRecepcion=$fechaRecepcion&FechaAsignacion=$fechaAsignacion&FechaRespuesta=$fechaRespuesta&Formato1=$seleccionFormato1&Formato2=$seleccionFormato2&Remitente=$valorRemitente&Dependencia=$valorDependecia&area1=$valorArea1&area2=$valorArea2&area3=$valorArea3&area4=$valorArea4&Descripcion=$valorDescripcion&Estatus1=$seleccionAbierto&Estatus2=$seleccionAsignado ';</script>";	
		}
		if($fechaDocumento>$fechaRespuesta)
		{
			echo "<script type='text/javascript'> 
		 alert('La fecha del documento no puede ser mayor a la fecha de Respuesta');
window.location='AgregarDocumento.php?area1=$valorArea1&area2=$valorArea2&area3=$valorArea3&area4=$valorArea4';</script>";		
		}
		
		if($fechaRecepcion>$fechaAsignacion)
		{
			echo "<script type='text/javascript'> 
		 alert('La fecha de Recepción no puede ser mayor a la fecha de Asignación');
	window.location='AgregarDocumento.php?Folio=$valorFolio&Asunto=$valorAsunto&FechaDocumento=$fechaDocumento&FechaRecepcion=$fechaRecepcion&FechaAsignacion=$fechaAsignacion&FechaRespuesta=$fechaRespuesta&Formato1=$seleccionFormato1&Formato2=$seleccionFormato2&Remitente=$valorRemitente&Dependencia=$valorDependecia&area1=$valorArea1&area2=$valorArea2&area3=$valorArea3&area4=$valorArea4&Descripcion=$valorDescripcion&Estatus1=$seleccionAbierto&Estatus2=$seleccionAsignado ';</script>";		
		}
		if($fechaAsignacion>$fechaRespuesta)
		{
			echo "<script type='text/javascript'> 
		 alert('La fecha de Asignación no puede ser mayor a la fecha Limite');
	window.location='AgregarDocumento.php?Folio=$valorFolio&Asunto=$valorAsunto&FechaDocumento=$fechaDocumento&FechaRecepcion=$fechaRecepcion&FechaAsignacion=$fechaAsignacion&FechaRespuesta=$fechaRespuesta&Formato1=$seleccionFormato1&Formato2=$seleccionFormato2&Remitente=$valorRemitente&Dependencia=$valorDependecia&area1=$valorArea1&area2=$valorArea2&area3=$valorArea3&area4=$valorArea4&Descripcion=$valorDescripcion&Estatus1=$seleccionAbierto&Estatus2=$seleccionAsignado ';</script>";		
		}
		if($fechaRecepcion>$fechaRespuesta)
		{
			echo "<script type='text/javascript'> 
		 alert('La fecha de Recepción no puede ser mayor a la fecha Limite');		 	window.location='AgregarDocumento.php?Folio=$valorFolio&Asunto=$valorAsunto&FechaDocumento=$fechaDocumento&FechaRecepcion=$fechaRecepcion&FechaAsignacion=$fechaAsignacion&FechaRespuesta=$fechaRespuesta&Formato1=$seleccionFormato1&Formato2=$seleccionFormato2&Remitente=$valorRemitente&Dependencia=$valorDependecia&area1=$valorArea1&area2=$valorArea2&area3=$valorArea3&area4=$valorArea4&Descripcion=$valorDescripcion&Estatus1=$seleccionAbierto&Estatus2=$seleccionAsignado ';</script>";	
		}
		
 //validacion de  las cajas de registrar documento	
	if($valorAsunto=="")
	{
		 $asuntoVacia="true";
		 echo "<script type='text/javascript'> 
		 alert('El campo \"Asunto\" se encuentra vacio ');
	window.location='AgregarDocumento.php?Folio=$valorFolio&FechaDocumento=$fechaDocumento&FechaRecepcion=$fechaRecepcion&FechaAsignacion=$fechaAsignacion&FechaRespuesta=$fechaRespuesta&Formato1=$seleccionFormato1&Formato2=$seleccionFormato2&Remitente=$valorRemitente&Dependencia=$valorDependecia&area1=$valorArea1&area2=$valorArea2&area3=$valorArea3&area4=$valorArea4&Descripcion=$valorDescripcion&Estatus1=$seleccionAbierto&Estatus2=$seleccionAsignado ';</script>";
		
	}else{
		$asuntoVacia="false";
	}

	if($valorDescripcion=="")
	{
		 $descripcionVacia="true";
		 echo "<script type='text/javascript'> 
		 alert('El campo \"Descripcion\" se encuentra vacio ');			window.location='AgregarDocumento.php?Folio=$valorFolio&Asunto=$valorAsunto&FechaDocumento=$fechaDocumento&FechaRecepcion=$fechaRecepcion&FechaAsignacion=$fechaAsignacion&FechaRespuesta=$fechaRespuesta&Formato1=$seleccionFormato1&Formato2=$seleccionFormato2&Remitente=$valorRemitente&Dependencia=$valorDependecia&area1=$valorArea1&area2=$valorArea2&area3=$valorArea3&area4=$valorArea4&Estatus1=$seleccionAbierto&Estatus2=$seleccionAsignado ';</script>";
		 
 		
	}else{
		$descripcionVacia="false";
	}
	
	if($valorDependecia=="")
	{
		$dependenciaVacia="true";
		 echo "<script type='text/javascript'> 
		 alert('El campo \"Dependencia\" se encuentra vacio ');
		 	window.location='AgregarDocumento.php?Folio=$valorFolio&Asunto=$valorAsunto&FechaDocumento=$fechaDocumento&FechaRecepcion=$fechaRecepcion&FechaAsignacion=$fechaAsignacion&FechaRespuesta=$fechaRespuesta&Formato1=$seleccionFormato1&Formato2=$seleccionFormato2&Remitente=$valorRemitente&area1=$valorArea1&area2=$valorArea2&area3=$valorArea3&area4=$valorArea4&Descripcion=$valorDescripcion&Estatus1=$seleccionAbierto&Estatus2=$seleccionAsignado ';</script>";
 		 
	}else{
		$dependenciaVacia="false";
		
	}
		//VALIDAR NUMERICOS 
			// validar el asunto
		if(preg_match($patron,$valorAsunto) )
		{
			$asuntoConNumeros=false;
		}
		else
		{
			echo "<script type='text/javascript'> 
	 		alert('El campo \"Asunto\" no admite numeros');
	        	window.location='AgregarDocumento.php?';</script>";
			$asuntoConNumeros=true;
		}
		//validar remitente
		if(preg_match($patron, $valorRemitente) && preg_match($patron,$valorDependencia))
		{
			$remitenteConNumeros=false;
		
		}
		else
		{
			echo "<script type='text/javascript'> 
	 		alert('El campo \"Remitente\" no admite numeros');
	        	window.location='AgregarDocumento.php?';</script>";
			$remitenteConNumeros=true;
		}			

		
		// si todo se ingreso correctamente lo pasamos a la BD
		if($asuntoVacia=="false" && $descripcionVacia="false" && $dependenciaVacia=="false" && $asuntoConNumeros==false && $remitenteConNumeros==false)
		{
			
		  if (isset($_POST['area1'])=="Dirección") 
		  {
			  
			  $sql = " insert into itszased_cdoc.Documento(idDocumento, tipoDocumento, fechaDelDocumento, fechaDeRecepcion, fechaDeAsignacion, fechaLimite, folioDocumento, formatoDelDocumento, descripcion, estatus, idRemit,nombreDepend,nombreRemit,area, sesionUsuario) values(
				  null,  
				  '".$_POST["cajaAsunto"]."', 
				  '".$_POST["cajaFechaDocumento"]."', 
				  '".$_POST["cajaFechaRecepcion"]."',
				  '".$_POST["cajaFechaAsignacion"]."',
				  '".$_POST["cajaFechaRespuesta"]."',
				  '".$_POST["cajaFolio"]."', 
				  '".$_POST["comboFormato"]."',
				  '".$_POST["cajaDescripcion"]."', 
				  '".$_POST["comboEstatus"]."',
				  '".$remitente."',
				  '".$_POST["cajaDependencia"]."',
				  '".$_POST["cajaRemitente"]."',
				  '".$_POST["area1"]."',
				  '".$nombre1."'
				  )";
				  $res = mysql_query($sql, $con)or die ("problema con 1er query");	
				 
			  }
			  if (isset($_POST['area2'])=="Académica")
			  {
				  $sql = " insert into itszased_cdoc.Documento(idDocumento, tipoDocumento, fechaDelDocumento, fechaDeRecepcion, 	fechaDeAsignacion, fechaLimite, folioDocumento, formatoDelDocumento, descripcion, estatus, idRemit,nombreDepend,nombreRemit,area, sesionUsuario) values(
				  null,  
				  '".$_POST["cajaAsunto"]."', 
				  '".$_POST["cajaFechaDocumento"]."', 
				  '".$_POST["cajaFechaRecepcion"]."',
				  '".$_POST["cajaFechaAsignacion"]."',
				  '".$_POST["cajaFechaRespuesta"]."',
				  '".$_POST["cajaFolio"]."', 
				  '".$_POST["comboFormato"]."',
				  '".$_POST["cajaDescripcion"]."', 
				  '".$_POST["comboEstatus"]."',
				  '".$remitente."',
				  '".$_POST["cajaDependencia"]."',
				  '".$_POST["cajaRemitente"]."',
				  '".$_POST["area2"]."',
				  '".$nombre2."'
				  )";
				  $res = mysql_query($sql, $con)or die ("problema con 2da query");						    
			  }
			  if (isset($_POST['area3'])=="Administrativa")
			  {
				  	 $sql = " insert into itszased_cdoc.Documento(idDocumento, tipoDocumento, fechaDelDocumento, fechaDeRecepcion, 	fechaDeAsignacion, fechaLimite, folioDocumento, formatoDelDocumento, descripcion, estatus, idRemit,nombreDepend,nombreRemit,area, sesionUsuario) values(
				  null,  
				  '".$_POST["cajaAsunto"]."', 
				  '".$_POST["cajaFechaDocumento"]."', 
				  '".$_POST["cajaFechaRecepcion"]."',
				  '".$_POST["cajaFechaAsignacion"]."',
				  '".$_POST["cajaFechaRespuesta"]."',
				  '".$_POST["cajaFolio"]."', 
				  '".$_POST["comboFormato"]."',
				  '".$_POST["cajaDescripcion"]."', 
				  '".$_POST["comboEstatus"]."',
				  '".$remitente."',
				  '".$_POST["cajaDependencia"]."',
				  '".$_POST["cajaRemitente"]."',
				  '".$_POST["area3"]."',
				  '".$nombre3."'
				  )";
					$res = mysql_query($sql, $con)or die ("problema con 3er query ");		    
			  }
			  if (isset($_POST['area4'])=="Planeación y Vinculación")
			  {
				    $sql = " insert into itszased_cdoc.Documento(idDocumento, tipoDocumento, fechaDelDocumento, fechaDeRecepcion, fechaDeAsignacion, fechaLimite, folioDocumento, formatoDelDocumento, descripcion, estatus, idRemit,nombreDepend,nombreRemit,area,sesionUsuario) values(
					null,  
					'".$_POST["cajaAsunto"]."', 
					'".$_POST["cajaFechaDocumento"]."', 
					'".$_POST["cajaFechaRecepcion"]."',
					'".$_POST["cajaFechaAsignacion"]."',
					'".$_POST["cajaFechaRespuesta"]."',
					'".$_POST["cajaFolio"]."', 
					'".$_POST["comboFormato"]."',
					'".$_POST["cajaDescripcion"]."', 
					'".$_POST["comboEstatus"]."',
					'".$remitente."',
					'".$_POST["cajaDependencia"]."',
					'".$_POST["cajaRemitente"]."',
					'".$_POST["area4"]."',
					'".$nombre4."'
					)";
					$res = mysql_query($sql, $con) or die ("problema con 4ta query ");		    
			  	}			
				echo "<script type='text/javascript'> 
				alert('Se ha registrado el documento'); 
				window.location='Principal.php';</script>";			  
		}

?>