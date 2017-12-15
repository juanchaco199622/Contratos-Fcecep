<?php
	require_once('proveedor_modelo.php');
  $id_proveedor = $_POST['codigo'];
  $estado = $_POST['estado'];
	$proveerdor = new Proveedor();
	$proveerdor->borrar($id_proveedor);
?>
