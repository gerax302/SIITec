<!DOCTYPE html>
	<?php
		require_once("conexion.php");
		$recibida = ($_GET['id']);
	?>
	
	 <script type="text/javascript">
		if(confirm("¿Desea Eliminar el documento seleccionado?")) 
		{
			document.location.href= 'eliminarDocumentoLogico.php?id=<?php echo $recibida ?>';
		}
		else
		{
			document.location.href= 'MuestraDocumentos.php';
		}
										 
	</script>

</html>