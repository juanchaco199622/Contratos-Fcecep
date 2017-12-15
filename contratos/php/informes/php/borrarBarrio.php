<?php
	include("modelo.php");
	
	$accion = borrarBarrio($_GET['cod']);
	
	if($accion)
		echo "<h2>Barrio Borrado con exito</h2>";
	else
		echo "<h2>Proceso fallido</h2>";

?>