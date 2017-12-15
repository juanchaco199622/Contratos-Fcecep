<?php
	require_once('sucursal_modelo.php');
	$sucursal1 = new Sucursal();
	$listado = $sucursal1->lista();
	$boton_estado = '';
?>

<div class="box-header">
    <i class="ion ion-clipboard"></i>
     <!-- tools box -->
    <div class="pull-right box-tools">
    	<button class="btn btn-info btn-sm" id="nuevoSucursal"  data-toggle="tooltip" title="Nuevo Sucursal"><i class="fa fa-plus" aria-hidden="true"></i></button>
    	<button class="btn btn-info btn-sm btncerrar"  data-toggle="tooltip" title="Ocultar"><i class="fa fa-times"></i></button>

    </div><!-- /. tools -->

</div><!-- /.box-header -->
<div class="box-body">

<table id="tabla" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
	<thead>
		<tr>
			<th>Codigo</th>
			<th>Empresa</th>
			<th>Ciudad</th>
			<th>Sucursal</th>
			<th>Direccion</th>
			<th>Telefono</th>
			<th>Fecha Creación</th>
			<th>Estado</th>
			<th>&nbsp;</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach($listado as $fila){ ?>
			<tr>
				<td><?php echo $fila['id_sucursal'] ?> </td>
				<td><?php echo utf8_encode($fila['nombre_empresa']) ?> </td>
				<td><?php echo utf8_encode($fila['nombre_ciudad']) ?> </td>
				<td><?php echo utf8_encode($fila['nombre_sucursal']) ?> </td>
				<td><?php echo utf8_encode($fila['direccion_sucursal']) ?> </td>
				<td><?php echo utf8_encode($fila['telefono_sucursal']) ?> </td>
				<td><?php echo utf8_encode($fila['fecha_creacion']) ?> </td>
				<td><?php
						$id = $fila['id_sucursal'];
						$html_activar = "<a class='btn btn-primary activarSucursal' href='#' data-toggle='tooltip' codigo= '$id' >
						<i class='fa fa-plus-square'  aria-hidden='true'></i>
						<span class='sr-only'>Activate</span>
						</a>";
						$html_desactivar = "<a class='btn btn-danger inactivarSucursal' href='#' data-toggle='tooltip' codigo= '$id' >
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
				<!-- Si se activa/inactiva el registro, debe aparecer el boton contrario al estado actual. -->
				<?php echo $boton_estado?>
				</td>
				<td align='center'>
						<a class="btn btn-primary editarSucursal" href="#" data-toggle="tooltip" codigo="<?php echo $fila['id_sucursal'] ?>">
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
