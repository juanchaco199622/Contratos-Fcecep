<?php
require_once('../ciudad/ciudad_modelo.php');
$codigo = $_GET['id_pais'];
$ciudad1 = new Ciudad();
$valor=$ciudad1->listaCiudades($codigo);
foreach ($valor as $fila) {
  echo '<option value=" '.$fila['id_ciudad'].' ">'.$fila['nombre_ciudad']. '</option> ';
}
 ?>
