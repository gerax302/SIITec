
<!DOCTYPE html>
<?php
	require_once("conexion.php");
	$recibida = ($_GET['id']);
	
	
	?>
	
	 <script type="text/javascript">
												if(confirm("¿Desear confirmar eliminacion?")) {
												document.location.href= 'eliminarUsuario.php?id=<?php echo $recibida ?>';
												}
												else
												{
													document.location.href= 'MuestraUsuarios.php';
												}
										 
	</script>
	
	
	
    </html>


