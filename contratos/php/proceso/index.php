<?php

	require_once('proceso_modelo.php');
	$proceso = new Proceso();
    $listado = $proceso->lista();
    $boton_estado = '';

?>



<div class="box-header">

    <i class="ion ion-clipboard"></i>

     <!-- tools box -->

    <div class="pull-right box-tools">

    	<button class="btn btn-info btn-sm" id="nuevoProceso"  data-toggle="tooltip" title="Nuevo proceso"><i class="fa fa-plus" aria-hidden="true"></i></button> 

    	<button class="btn btn-info btn-sm btncerrar"  data-toggle="tooltip" title="Ocultar"><i class="fa fa-times"></i></button>

    </div><!-- /. tools -->

                  
</div><!-- /.box-header -->

<div class="box-body">

             

<table id="tabla" data-order='[[ 2, "desc" ]]' class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">

	<thead>

		<tr>

			<th>ID de proceso</th>

			<th>Nombre de proceso</th>

			<th>Tipo de proceso</th>

			<th>Empresa</th>

            <th>Usuario creacion</th>

            <th>Usuario modificacion</th>

            <th>Fecha creacion</th>
            
            <th>Fecha modificacion</th>

			<th>Estado</th>

			<th>&nbsp;</th>

            <th>&nbsp;</th>

		</tr>

	</thead>

	<tbody>

	<?php foreach($listado as $fila){ ?>

			<tr>

				<td><?php echo $fila['id_proceso'] ?> </td>

				<td><?php echo utf8_encode($fila['nombre_proceso']) ?> </td>

                <td><?php echo utf8_encode($fila['tipo_proceso']) ?> </td>

                <td><?php echo utf8_encode($fila['nombre_empresa']) ?> </td>

                <td><?php echo utf8_encode($fila['usuario_creacion']) ?> </td>

                <td><?php echo utf8_encode($fila['usuario_modificacion']) ?> </td> 

                <td><?php echo utf8_encode($fila['fecha_creacion']) ?> </td>

				<td><?php echo utf8_encode($fila['fecha_modificacion']) ?> </td>

                <td><?php echo utf8_encode($fila['estado']) ?> </td> 

                <td><?php 

                    //Declaracion de variables para implementar la activacion/inactivacion de un registro

                    $id = $fila['id_proceso'];

                    $html_activar = "<a class='btn btn-primary activarProceso' href='#' data-toggle='tooltip' codigo= '$id' >

                    <i class='fa fa-plus-square'  aria-hidden='true'></i>

                    <span class='sr-only'>Activate</span>

                    </a>"; //Boton para activar

                    $html_desactivar = "<a class='btn btn-danger inactivarProceso' href='#' data-toggle='tooltip' codigo= '$id' >

                    <i class='fa fa-trash-o'  aria-hidden='true'></i>

                    <span class='sr-only'>Inactivate</span>

                    </a> "; //Boton para desactivar

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

                    <a class="btn btn-primary editarProceso" href="#" data-toggle="tooltip" codigo="<?php echo $fila['id_proceso'] ?>">

                        <i class="fa fa-pencil"  aria-hidden="false"></i>

                        <span class="sr-only">Edit</span>

                    </a> 

                </td> 

			</tr>

	<?php } ?>

	</tbody>



</table>



</div><!-- /.box-body -->  



<!-- Funciones de Lógica de neogcio -->

<script>

    $(document).ready(function(){

    	$("#tabla").DataTable();

    });

</script>