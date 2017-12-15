<?php
require_once 'proveedor_modelo.php';
$datos = $_POST;
switch ($_POST['accion']){
    case 'editar':
        $proveedor = new Proveedor();
        $proveedor->editar($datos);
        break;
    case 'nuevo':
        $proveedor = new Proveedor();
        $proveedor->nuevo($datos);
        break;
    case 'borrar':
        $id_proveedor = $_POST['codigo'];
        $estado = $_POST['estado'];
        $proveedor = new Proveedor();
        $proveedor->borrar($id_proveedor, $estado);
        break;
}
?>
