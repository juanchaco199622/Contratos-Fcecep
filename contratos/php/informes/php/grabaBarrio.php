<?php
	include("modelo.php");
	
	$accion = grabarBarrio($_POST);
	
	if($accion)
		echo "<h2>Barrio Grabado con exito</h2>";
	else
		echo "<h2>Proceso fallido</h2>";

?>