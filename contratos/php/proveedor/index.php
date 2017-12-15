<?php
	require_once('proveedor_modelo.php');
	$proveedor1 = new Proveedor();
	$listado = $proveedor1->lista();
  $boton_estado = '';
?>
<div class="box-header">
    <i class="ion ion-clipboard"></i>
    <div class="pull-right box-tools">
    	<button class="btn btn-info btn-sm" id="nuevoProveedor"  data-toggle="tooltip" title="Nuevo Proveedor"><i class="fa fa-plus" aria-hidden="true"></i></button>
    	<button class="btn btn-info btn-sm btncerrar"  data-toggle="tooltip" title="Ocultar"><i class="fa fa-times"></i></button>
    </div>
</div>
<br>
<br>
<div class="box-body">
<table id="tabla" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
	<thead>
		<tr>
			<th>Identificación</th>
			<th>Nombre</th>
			<th>Telefono</th>
			<th>E-mail</th>
			<th>Dirección</th>
			<th>Sector</th>
      <th>Ciudad</th>
      <th>Pais</th>
			<th>Estado</th>
			<th>&nbsp;</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach($listado as $fila){ ?>
			<tr>
				<td><?php echo utf8_encode($fila['identificador_proveedor']) ?> </td>
				<td><?php echo utf8_encode($fila['nombre_proveedor']) ?> </td>
				<td><?php echo utf8_encode($fila['telefono_proveedor']) ?> </td>
				<td><?php echo utf8_encode($fila['correo_proveedor']) ?> </td>
				<td><?php echo utf8_encode($fila['direccion_proveedor']) ?> </td>
        <td><?php echo utf8_encode($fila['sector_proveedor']) ?> </td>
        <td><?php echo utf8_encode($fila['nombre_ciudad']) ?> </td>
        <td><?php echo utf8_encode($fila['nombre_pais']) ?> </td>
        <td><?php
            $id = $fila['id_proveedor'];
            $html_activar = "<a class='btn btn-primary activarProveedor' href='#' data-toggle='tooltip' codigo= '$id' >
            <i class='fa fa-plus-square'  aria-hidden='true'></i>
            <span class='sr-only'>Activate</span>
            </a>";
            $html_desactivar = "<a class='btn btn-danger inactivarProveedor' href='#' data-toggle='tooltip' codigo= '$id' >
            <i class='fa fa-trash-o'  aria-hidden='true'></i>
            <span class='sr-only'>Inactivate</span>
            </a> ";
        if ($fila['estado'] == 0):
                    echo 'Inactivo';
                    $boton_estado = $html_activar;
                  else:
                    echo  'Activo';
                    $boton_estado = $html_desactivar;
                  endif?>
        </td>

        <td align='center'>
        <?php echo $boton_estado?>
        </td>

				<td align='center'>
				<a class="btn btn-primary editarProveedor" href="#" data-toggle="tooltip" codigo="<?php echo $fila['id_proveedor'] ?>">
  					<i class="fa fa-pencil"  aria-hidden="false"></i>
  					<span class="sr-only">Edit</span>
				</a>
			</td>
		</tr>
	<?php } ?>
	</tbody>
</table>
</div>
<script>
    $(document).ready(function(){
    	$("#tabla").DataTable();
    });
</script>
