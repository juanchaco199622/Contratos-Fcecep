<?php
	require_once('sucursal_modelo.php');

	$datos = array(
	'id_sucursal'=>$_POST['id_sucursal'],
	'nombre_sucursal'=>$_POST['nombre_sucursal'],
	'direccion_sucursal'=>$_POST['direccion_sucursal'],
	'telefono_sucursal'=>$_POST['telefono_sucursal'],
	'id_empresa'=>$_POST['id_empresa'],
	'id_ciudad'=>$_POST['id_ciudad']
	);

	$sucursal = new Sucursal();
	$sucursal->nuevo($datos);

?>
