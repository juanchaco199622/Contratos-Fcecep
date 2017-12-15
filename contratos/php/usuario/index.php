<?php
	require_once('usuario_modelo.php');
	$usuario = new Usuario();
	$listado = $usuario->lista();
	$boton_estado = '';
?>

		<div class="box-header">
		    <i class="ion ion-clipboard"></i>
		    <div class="pull-right box-tools">
		    	<button class="btn btn-info btn-sm btncerrarUsuario"  data-toggle="tooltip" title="Ocultar"><i class="fa fa-times"></i></button>
		    </div>
		</div>

<div class="box-body">

				<table id="tabla" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>Id</th>
							<th>Usuario</th>
							<th>E-mail</th>
							<th>Empresa</th>
							<th>Rol</th>
							<th>fecha_creacion</th>
							<th>Estado</th>
							<th>&nbsp;</th>
							<th>&nbsp;</th>
						</tr>
					</thead>
					<tbody>
					<?php foreach($listado as $fila){ ?>
							<tr>
								<td><?php echo $fila['id'] ?> </td>
								<td><?php echo utf8_encode($fila['usuario']) ?> </td>
								<td><?php echo utf8_encode($fila['correo']) ?> </td>
								<td><?php echo utf8_encode($fila['nombre_empresa']) ?> </td>
								<td><?php echo utf8_encode($fila['tipo']) ?> </td>
								<td><?php echo utf8_encode($fila['fecha_creacion']) ?> </td>
								<td><?php
										$id = $fila['id'];
										$html_activar = "<a class='btn btn-primary activarUsuario' href='#' data-toggle='tooltip' codigo= '$id' >
										<i class='fa fa-plus-square'  aria-hidden='true'></i>
										<span class='sr-only'>Activate</span>
										</a>";
										$html_desactivar = "<a class='btn btn-danger inactivarUsuario' href='#' data-toggle='tooltip' codigo= '$id' >
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
						<a class="btn btn-primary editarUsuario" href="#" data-toggle="tooltip" codigo="<?php echo $fila['id'] ?>">
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
