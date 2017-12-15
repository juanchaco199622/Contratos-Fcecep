<?php
	require_once('usuario_modelo.php');
  $datos = $_POST;
	$usuario = new Usuario();
	$usuario->editar($datos);
?>
