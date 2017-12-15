<?php
 
require_once 'proceso_modelo.php';
$datos = $_POST;
switch ($_POST['accion']){
    case 'editar':
        $proceso = new Proceso();
        $proceso->editar($datos);
        break;
    case 'nuevo':
        $proceso = new Proceso();
        $proceso->nuevo($datos);
        break;
    case 'borrar':
        $proceso_id = $_POST['codigo'];
        $estado = $_POST['estado'];
        $proceso = new Proceso();
        $proceso->borrar($proceso_id, $estado);
        break;
}
?>

