<?php
	require_once('rol_modelo.php');
		$rol = new Rol();
    $listado = $rol->lista();
    $boton_estado = '';
?>

<div class="box-header">
    <i class="ion ion-clipboard"></i>
     <!-- tools box -->
    <div class="pull-right box-tools">
    	<button class="btn btn-info btn-sm" id="nuevoRol"  data-toggle="tooltip" title="Nuevo rol"><i class="fa fa-plus" aria-hidden="true"></i></button>
    	<button class="btn btn-info btn-sm btncerrar"  data-toggle="tooltip" title="Ocultar"><i class="fa fa-times"></i></button>

    </div><!-- /. tools -->

</div><!-- /.box-header -->
<div class="box-body">

<table id="tabla" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
	<thead>
		<tr>
			<th>Tipo de usuario</th>
			<th>Pais</th>
			<th>Ciudad</th>
			<th>Empresa</th>
			<th>Sucursal</th>
			<th>Proveedor</th>
			<th>Empleado</th>
			<th>Procesos</th>
			<th>Roles</th>
			<th>Informes</th>
			<th>Usuario</th>
			<th>Estado</th>
			<th>&nbsp;</th>
      <th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach($listado as $fila){ ?>
			<tr>
				<td><?php echo $fila['tipo'] ?> </td>
				<td><?php echo utf8_encode($fila['pais_permiso']) ?> </td>
				<td><?php echo utf8_encode($fila['ciudad_permiso']) ?> </td>
				<td><?php echo utf8_encode($fila['empresa_permiso']) ?> </td>
				<td><?php echo utf8_encode($fila['sucursal_permiso']) ?> </td>
				<td><?php echo utf8_encode($fila['proveedor_permiso']) ?> </td>
				<td><?php echo utf8_encode($fila['empleado_permiso']) ?> </td>
				<td><?php echo utf8_encode($fila['procesos_permiso']) ?> </td>
				<td><?php echo utf8_encode($fila['roles_permiso']) ?> </td>
				<td><?php echo utf8_encode($fila['informe_permiso']) ?> </td>
				<td><?php echo utf8_encode($fila['usuario_permiso']) ?> </td>

                <td><?php
                    $id = $fila['id_tipo'];
                    $html_activar = "<a class='btn btn-primary activarRol' href='#' data-toggle='tooltip' codigo= '$id' >
                    <i class='fa fa-plus-square'  aria-hidden='true'></i>
                    <span class='sr-only'>Activate</span>
                    </a>";
                    $html_desactivar = "<a class='btn btn-danger inactivarRol' href='#' data-toggle='tooltip' codigo= '$id' >
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
		                    <a class="btn btn-primary editarRol" href="#" data-toggle="tooltip" codigo="<?php echo $fila['id_tipo'] ?>">
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
