<?php
	require_once('proveedor_modelo.php');
  $datos = $_POST;
	$proveedor1 = new Proveedor();
	$proveedor1->editar($datos);
?>
