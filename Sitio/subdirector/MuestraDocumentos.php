<!doctype html>
<html>
<head>
<style type="text/css">
<!--
.estilo1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #FFFFFF;
}
</style>

<style type="text/css">
<!--
.estilo2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #000;
}
</style>
<meta charset="utf-8">
<title>Mostrar Documentos</title>
</head>

<body>
<body background="pic/fondo.png">

<h1> <div align="center"> <img src="pic/logosantec.png" width="300" height="160"> </div> </h1>

<table width="1024" align="center" border ="1" bgcolor="#FFFFFF">
<tr>
  <th bgcolor="#003300"class="estilo1" width="100" scope="col">Identificador</th>
  <th bgcolor="#003300" class="estilo1" width="200" scope="col"> Asunto </th>
  <th bgcolor="#003300" class="estilo1" width="205" scope="col"> Fecha del Documento </th>
  <th bgcolor="#003300" class="estilo1" width="205" scope="col"> Fecha de Recepción </th>
  <th bgcolor="#003300" class="estilo1" width="180" scope="col"> Fecha de Asiganación </th>
  <th bgcolor="#003300" class="estilo1" width="250" scope="col"> Fecha Límite de Respuesta </th>
  <th bgcolor="#003300" class="estilo1" width="180" scope="col"> Folio </th>
  <th bgcolor="#003300" class="estilo1" width="180" scope="col"> Descripción </th>
  <th bgcolor="#003300" class="estilo1" width="180" scope="col"> Estatus </th>
  <th bgcolor="#003300" class="estilo1" width="180" scope="col"> Remitente </th>
  <th bgcolor="#003300" class="estilo1" width="180" scope="col"> Área </th>
  <th bgcolor="#003300" class="estilo1" width="150" scope="col"> Modificar Estatus </th>
</tr>

<?php
require_once("conexion.php");
$consulta = "select idDocumento, tipoDocumento, fechaDelDocumento, fechaDeRecepcion, fechaDeAsignacion, fechaLimite, folioDocumento, formatoDelDocumento, descripcion, estatus , idRemit, idUsuario from Documento";
$res=mysql_query($consulta, $con);
$i=0;

$arreglo = array();
	while($row = @mysql_fetch_array($res))
	{
		$i=$i+1;
?>

<tr>
  <td align="center" class="estilo2"><p>  
        <label><?php echo $row['idDocumento']; 
	  		      $arreglo[$i-1]=$row['idDocumento']; 
				  $Id=$arreglo[$i-1];
				  
			 ?> </label>
      
      
    </p></td>
  </div>  
  
  <td align="center" class="estilo2"><p>  
     <label><?php echo $row['tipoDocumento']; ?> </label> 
    </p></td>
    </div>
  
  <td align="center" class="estilo2"><p>  
    <label><?php echo $row['fechaDelDocumento']; ?> </label>
    </p></td>
    </div>
  
  <td align="center" class="estilo2"><p>  
      <label><?php echo $row['fechaDeRecepcion']; ?> </label>
    </p></td>
    </div>
    
    
  <td align="center" class="estilo2"><p>  
      <label><?php echo $row['fechaDeAsignacion']; 
			 ?> 
      </label>
    </p></td>
    </div>
    
    <td align="center" class="estilo2"><p>  
      <label><?php echo $row['fechaLimite']; 
			 ?> 
      </label>
    </p></td>
    </div>
    
    <td align="center" class="estilo2"><p>  
      <label><?php echo $row['folioDocumento']; 
			 ?> 
      </label>
    </p></td>
    </div>
    
    <td align="center" class="estilo2"><p>  
      <label><?php echo "AQUI VA LA DESCRIPCION"; 
			 ?> 
      </label>
    </p></td>
    </div>
    
        <td align="center" class="estilo2"><p>  
      <label> <?php echo $row['estatus']; ?> </label>
    </p></td>
  </div>
    
    <td align="center" class="estilo2"><p>  
      <label><?php echo $row['formatoDelDocumento']; 
			 ?> 
      </label>
    </p></td>
    </div>
    

<td align="center" class="estilo2"><p>  
      <label><?php echo $row['descripcion']; 
			 ?> 
      </label>
    </p></td>
    </div>


    
    
   
  
    <td align="center"><p>
      <a href="modificarDocumentos.php?id=<?php echo $Id ?> "> <img src="pic/modificar.png" width="93" height="32"> </a> 
    </p></td>
    
</tr>
<p>
  <?php
	}?>
    <center>
  <a href="Principal.php"> <img src="pic/back.png" width="48" height="48">  </a>
  </center>  
</body>
</html>