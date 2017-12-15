<?php
	require_once('proveedor_modelo.php');
	$datos = array(
	'id_proveedor'=>$_POST['id_proveedor'],
  'identiicador_proveedor'=>$_POST['identiicador_proveedor'],
	'nombre_proveedor'=>$_POST['nombre_proveedor'],
	'telefono_proveedor'=>$_POST['telefono_proveedor'],
	'correo_proveedor'=>$_POST['correo_proveedor'],
  'direccion_proveedor'=>$_POST['direccion_proveedor'],
  'sector_proveedor'=>$_POST['sector_proveedor'],
	'id_ciudad'=>$_POST['id_ciudad']
	);
	$proveedor = new Proveedor();
	$proveedor->nuevo($datos);
?>
