<?php
	include("modelo.php");
	$accion = actualizaBarrio($_POST);
	
	if($accion)
		echo "<h2>Datos actualizados</h2>";
	else
		echo "<h2>Actualizacion fallida </h2>";
	
?>
