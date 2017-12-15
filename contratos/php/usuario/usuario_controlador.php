<?php

require_once 'usuario_modelo.php';
$datos = $_POST;
switch ($_POST['accion']){
  
    case 'editar':
        $usuario = new Usuario();
        $usuario->editar($datos);
        break;

    case 'borrar':
        $id = $_POST['codigo'];
        $estado = $_POST['estado'];
        $usuario = new Usuario();
        $usuario->borrar($id, $estado);
        break;
}
?>
