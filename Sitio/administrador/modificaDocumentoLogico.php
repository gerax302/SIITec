<?php
    session_start();
	include "conexion.php";
	$recibido = ($_GET['id']);
	
	$patron = '/^[a-zA-Z |" "]*$/';
					 
	$valorAsunto=$_POST["cajaAsunto"]; 
	$valorDescripcion=$_POST["cajaDescripcion"]; 
	$valorRemitente=$_POST["cajaRemitente"];
	$valorDependecia=$_POST["cajaDependencia"];

	if($valorAsunto=="" ||  $valorDescripcion=="" || $valorDependecia=="")
	{
    	echo "<script type='text/javascript'> 
		alert('Un campo esta vacio ');
	    window.location='MuestraDocumentos.php';</script>";
	}
	else
	{
		if(preg_match($patron,$valorAsunto) &&  preg_match($patron,$valorDescripcion) && preg_match($patron,$valorRemitente) && preg_match($patron,$valorDependencia))
		{		 
			date_default_timezone_set("'UTC'");
			$fecha= date ("Y/m/d");
	
			ini_set('date.timezone','America/Mexico_City'); 
		    $hora= "".date("g:i A");
	
			if (isset($_POST['area1'])=="Dirección")
			{
				//INSERCIÓN A TABLA BITACORA
				$ingresa ="Insert into  itszased_cdoc.Bitacora(idBitacora,fechaDeModificacion,tipoDocumento,estatus,nombreUsuario, area, idDocumento, hora) 
				values(
				null,  
				'".$fecha."', 
				'".$_POST["cajaAsunto"]."', 
				'".$_POST["comboEstatus"]."',
				'".$_SESSION["nombresesion"]."',
				'".$_POST['area1']."',
				'".$recibido."',
				'".$hora."'
				)";
				$res1=mysql_query($ingresa, $con)or die ("problema con query ingresa");
	
				//Tabla documento	
				$qFolio = "UPDATE Documento set folioDocumento='".$_POST["cajaFolio"]."' where idDocumento='$recibido'";
				$qAsunto = "UPDATE Documento set tipoDocumento='".$_POST["cajaAsunto"]."' where idDocumento='$recibido'";
				$qFechaDelDocumento = "UPDATE Documento set fechaDelDocumento='".$_POST["cajaFechaDocumento"]."' where 			idDocumento='$recibido'";
				$qFechaDeRecepcion = "UPDATE Documento set fechaDeRecepcion='".$_POST["cajaFechaRecepcion"]."' where idDocumento='$recibido'";
				$qFechaDeAsignacion = "UPDATE Documento set fechaDeAsignacion='".$_POST["cajaFechaAsignacion"]."' where idDocumento='$recibido'";
				$qFechaLimiteRespuesta = "UPDATE Documento set fechaLimite='".$_POST["cajaFechaRespuesta"]."' where idDocumento='$recibido'";
				$qFormato = "UPDATE Documento set formatoDelDocumento='".$_POST["comboFormato"]."' where idDocumento='$recibido'";
				$qRemit = "UPDATE Documento set nombreRemit='".$_POST["cajaRemitente"]."' where idDocumento='$recibido'";
				$qDepend = "UPDATE Documento set nombreDepend='".$_POST["cajaDependencia"]."' where idDocumento='$recibido'";
				$qDescripcion = "UPDATE Documento set descripcion='".$_POST["cajaDescripcion"]."' where idDocumento='$recibido'";
				$qEstatus = "UPDATE Documento set estatus='".$_POST["comboEstatus"]."' where idDocumento='$recibido'";
				$qArea = "UPDATE Documento set area='".$_POST["area1"]."' where idDocumento='$recibido'";

				mysql_query($qFolio, $con) or die ("problema con query folio");
				mysql_query($qAsunto, $con) or die ("problema con query asunto o tipo");
				mysql_query($qFechaDelDocumento, $con) or die ("problema con query fechadoc");
				mysql_query($qFechaDeRecepcion, $con) or die ("problema con query fecharecepcion");
				mysql_query($qFechaDeAsignacion, $con) or die ("problema con query fechaasignacion");
				mysql_query($qFechaLimiteRespuesta, $con) or die ("problema con query fechalimite");
				mysql_query($qFormato, $con) or die ("problema con query formato");
				mysql_query($qRemit, $con) or die ("problema con query remitente");
				mysql_query($qDepend, $con) or die ("problema con query Dependencia");
				mysql_query($qDescripcion, $con) or die ("problema con query descripcion");
				mysql_query($qEstatus, $con) or die ("problema con query estatus");
				mysql_query($qArea, $con) or die ("problema con query area");
		}
	
	if (isset($_POST['area2'])=="Académica")
	{
		//INSERCIÓN A TABLA BITACORA
		$ingresa ="Insert into itszased_cdoc.Bitacora(idBitacora,fechaDeModificacion,tipoDocumento,estatus,nombreUsuario, area, idDocumento) values(null,  
		'".$fecha."', 
		'".$_POST["cajaAsunto"]."', 
		'".$_POST["comboEstatus"]."',
		'".$_SESSION["nombresesion"]."',
		'".$_POST['area2']."',
		'".$recibido."'
		)";
		$res1=mysql_query($ingresa, $con)or die ("problema con query ingresa");
	
		//Tabla documento	
		$qFolio = "UPDATE Documento set folioDocumento='".$_POST["cajaFolio"]."' where idDocumento='$recibido'";
		$qAsunto = "UPDATE Documento set tipoDocumento='".$_POST["cajaAsunto"]."' where idDocumento='$recibido'";
		$qFechaDelDocumento = "UPDATE Documento set fechaDelDocumento='".$_POST["cajaFechaDocumento"]."' where 			idDocumento='$recibido'";
		$qFechaDeRecepcion = "UPDATE Documento set fechaDeRecepcion='".$_POST["cajaFechaRecepcion"]."' where idDocumento='$recibido'";
		$qFechaDeAsignacion = "UPDATE Documento set fechaDeAsignacion='".$_POST["cajaFechaAsignacion"]."' where idDocumento='$recibido'";
		$qFechaLimiteRespuesta = "UPDATE Documento set fechaLimite='".$_POST["cajaFechaRespuesta"]."' where idDocumento='$recibido'";
		$qFormato = "UPDATE Documento set formatoDelDocumento='".$_POST["comboFormato"]."' where idDocumento='$recibido'";
		$qRemit = "UPDATE Documento set nombreRemit='".$_POST["cajaRemitente"]."' where idDocumento='$recibido'";
		$qDepend = "UPDATE Documento set nombreDepend='".$_POST["cajaDependencia"]."' where idDocumento='$recibido'";
		$qDescripcion = "UPDATE Documento set descripcion='".$_POST["cajaDescripcion"]."' where idDocumento='$recibido'";
		$qEstatus = "UPDATE Documento set estatus='".$_POST["comboEstatus"]."' where idDocumento='$recibido'";
		$qArea = "UPDATE Documento set area='".$_POST["area2"]."' where idDocumento='$recibido'";

		mysql_query($qFolio, $con) or die ("problema con query folio");
		mysql_query($qAsunto, $con) or die ("problema con query asunto o tipo");
		mysql_query($qFechaDelDocumento, $con) or die ("problema con query fechadoc");
		mysql_query($qFechaDeRecepcion, $con) or die ("problema con query fecharecepcion");
		mysql_query($qFechaDeAsignacion, $con) or die ("problema con query fechaasignacion");
		mysql_query($qFechaLimiteRespuesta, $con) or die ("problema con query fechalimite");
		mysql_query($qFormato, $con) or die ("problema con query formato");
		mysql_query($qRemit, $con) or die ("problema con query remitente");
		mysql_query($qDepend, $con) or die ("problema con query Dependencia");
		mysql_query($qDescripcion, $con) or die ("problema con query descripcion");
		mysql_query($qEstatus, $con) or die ("problema con query estatus");
		mysql_query($qArea, $con) or die ("problema con query area");	
	}

	if (isset($_POST['area3'])=="Administrativa")
	{
		//INSERCIÓN A TABLA BITACORA
		$ingresa ="Insert into itszased_cdoc.Bitacora(idBitacora,fechaDeModificacion,tipoDocumento,estatus,nombreUsuario, area, idDocumento) values(null,  
		'".$fecha."', 
		'".$_POST["cajaAsunto"]."', 
		'".$_POST["comboEstatus"]."',
		'".$_SESSION["nombresesion"]."',
		'".$_POST['area3']."',
		'".$recibido."'
		)";
		$res1=mysql_query($ingresa, $con)or die ("problema con query ingresa");
	
		//Tabla documento	
		$qFolio = "UPDATE Documento set folioDocumento='".$_POST["cajaFolio"]."' where idDocumento='$recibido'";
		$qAsunto = "UPDATE Documento set tipoDocumento='".$_POST["cajaAsunto"]."' where idDocumento='$recibido'";
		$qFechaDelDocumento = "UPDATE Documento set fechaDelDocumento='".$_POST["cajaFechaDocumento"]."' where 			idDocumento='$recibido'";
		$qFechaDeRecepcion = "UPDATE Documento set fechaDeRecepcion='".$_POST["cajaFechaRecepcion"]."' where idDocumento='$recibido'";
		$qFechaDeAsignacion = "UPDATE Documento set fechaDeAsignacion='".$_POST["cajaFechaAsignacion"]."' where idDocumento='$recibido'";
		$qFechaLimiteRespuesta = "UPDATE Documento set fechaLimite='".$_POST["cajaFechaRespuesta"]."' where idDocumento='$recibido'";
		$qFormato = "UPDATE Documento set formatoDelDocumento='".$_POST["comboFormato"]."' where idDocumento='$recibido'";
		$qRemit = "UPDATE Documento set nombreRemit='".$_POST["cajaRemitente"]."' where idDocumento='$recibido'";
		$qDepend = "UPDATE Documento set nombreDepend='".$_POST["cajaDependencia"]."' where idDocumento='$recibido'";
		$qDescripcion = "UPDATE Documento set descripcion='".$_POST["cajaDescripcion"]."' where idDocumento='$recibido'";
		$qEstatus = "UPDATE Documento set estatus='".$_POST["comboEstatus"]."' where idDocumento='$recibido'";
		$qArea = "UPDATE Documento set area='".$_POST["area3"]."' where idDocumento='$recibido'";

		mysql_query($qFolio, $con) or die ("problema con query folio");
		mysql_query($qAsunto, $con) or die ("problema con query asunto o tipo");
		mysql_query($qFechaDelDocumento, $con) or die ("problema con query fechadoc");
		mysql_query($qFechaDeRecepcion, $con) or die ("problema con query fecharecepcion");
		mysql_query($qFechaDeAsignacion, $con) or die ("problema con query fechaasignacion");
		mysql_query($qFechaLimiteRespuesta, $con) or die ("problema con query fechalimite");
		mysql_query($qFormato, $con) or die ("problema con query formato");
		mysql_query($qRemit, $con) or die ("problema con query remitente");
		mysql_query($qDepend, $con) or die ("problema con query Dependencia");
		mysql_query($qDescripcion, $con) or die ("problema con query descripcion");
		mysql_query($qEstatus, $con) or die ("problema con query estatus");
		mysql_query($qArea, $con) or die ("problema con query area");	
	}	
	
	if (isset($_POST['area4'])=="Planeación y Vinculación")
	{
		//INSERCIÓN A TABLA BITACORA
		$ingresa ="Insert into itszased_cdoc.Bitacora(idBitacora,fechaDeModificacion,tipoDocumento,estatus,nombreUsuario, area, 		idDocumento) values(null,  
		'".$fecha."', 
		'".$_POST["cajaAsunto"]."', 
		'".$_POST["comboEstatus"]."',
		'".$_SESSION["nombresesion"]."',
		'".$_POST['area4']."',
		'".$recibido."'
		)";
		$res1=mysql_query($ingresa, $con)or die ("problema con query ingresa");
	
		//Tabla documento	
		$qFolio = "UPDATE Documento set folioDocumento='".$_POST["cajaFolio"]."' where idDocumento='$recibido'";
		$qAsunto = "UPDATE Documento set tipoDocumento='".$_POST["cajaAsunto"]."' where idDocumento='$recibido'";
		$qFechaDelDocumento = "UPDATE Documento set fechaDelDocumento='".$_POST["cajaFechaDocumento"]."' where 			idDocumento='$recibido'";
		$qFechaDeRecepcion = "UPDATE Documento set fechaDeRecepcion='".$_POST["cajaFechaRecepcion"]."' where idDocumento='$recibido'";
		$qFechaDeAsignacion = "UPDATE Documento set fechaDeAsignacion='".$_POST["cajaFechaAsignacion"]."' where idDocumento='$recibido'";
		$qFechaLimiteRespuesta = "UPDATE Documento set fechaLimite='".$_POST["cajaFechaRespuesta"]."' where idDocumento='$recibido'";
		$qFormato = "UPDATE Documento set formatoDelDocumento='".$_POST["comboFormato"]."' where idDocumento='$recibido'";
		$qRemit = "UPDATE Documento set nombreRemit='".$_POST["cajaRemitente"]."' where idDocumento='$recibido'";
		$qDepend = "UPDATE Documento set nombreDepend='".$_POST["cajaDependencia"]."' where idDocumento='$recibido'";
		$qDescripcion = "UPDATE Documento set descripcion='".$_POST["cajaDescripcion"]."' where idDocumento='$recibido'";
		$qEstatus = "UPDATE Documento set estatus='".$_POST["comboEstatus"]."' where idDocumento='$recibido'";
		$qArea = "UPDATE Documento set area='".$_POST["area4"]."' where idDocumento='$recibido'";

		mysql_query($qFolio, $con) or die ("problema con query folio");
		mysql_query($qAsunto, $con) or die ("problema con query asunto o tipo");
		mysql_query($qFechaDelDocumento, $con) or die ("problema con query fechadoc");
		mysql_query($qFechaDeRecepcion, $con) or die ("problema con query fecharecepcion");
		mysql_query($qFechaDeAsignacion, $con) or die ("problema con query fechaasignacion");
		mysql_query($qFechaLimiteRespuesta, $con) or die ("problema con query fechalimite");
		mysql_query($qFormato, $con) or die ("problema con query formato");
		mysql_query($qRemit, $con) or die ("problema con query remitente");
		mysql_query($qDepend, $con) or die ("problema con query Dependencia");
		mysql_query($qDescripcion, $con) or die ("problema con query descripcion");
		mysql_query($qEstatus, $con) or die ("problema con query estatus");
		mysql_query($qArea, $con) or die ("problema con query area");	
	}			

		echo "<script type='text/javascript'> 
		alert('El documento se ha modificado'); 
    	window.location='Principal.php';</script>";
	
	}
	else
	{
		echo "<script type='text/javascript'> 
		alert('Uno de los campos no admite numeros');
     	window.location='MuestraDocumentos.php';</script>";
	}
}
?>