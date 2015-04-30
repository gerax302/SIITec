<?php
session_start();
	require_once("conexion.php");
	$recibida = ($_GET['id']);
	
	
	?>
<script type="text/javascript">
			function irAlIndice() {
				if(confirm("¿Desear confirmar eliminacion?")) {
					document.location.href= 'eliminarUsuario.php?id=<?php echo $Id ?>';
				}
				else
				{
					document.location.href= 'MuestraUsuarios.php';
				}
			}	 
	</script>