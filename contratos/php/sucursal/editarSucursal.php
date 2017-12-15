 <?php
  require_once('../empresa/empresa_modelo.php');
	$empresa = new Empresa();
	$listaempresa =  $empresa->listaEmpresa();
  require_once("../ciudad/ciudad_modelo.php");
  $ciudad = new Ciudad();
  $listadociudades = $ciudad->listaCiudad();
  require_once('sucursal_modelo.php');
  $codigo = $_POST['codigo'];
	$sucursal = new Sucursal();
	$sucursal->consultar($codigo);
?>
	<div class="box-header">
    	<i class="fa fa-building" aria-hidden="true">Sucursal</i>

        <!-- tools box -->
        <div class="pull-right box-tools">
        	<button class="btn btn-info btn-sm btncerrarSucursal2" data-toggle="tooltip" title="Cerrar"><i class="fa fa-times"></i></button>
        </div><!-- /. tools -->
    </div>
    <div class="box-body">

		<div align ="center">
				<div id="actual">
				</div>
		</div>

        <div class="panel-group"><div class="panel panel-primary">
            <div class="panel-heading">Datos</div>
            <div class="panel-body">

                <form class="form-horizontal" role="form"  id="fsucursal">

 					         <div class="form-group">
                        <label class="control-label col-sm-2" for="id_sucursal">ID:</label>
                        <div class="col-sm-10">
                           <input type="text" class="form-control" id="id_sucursal" name="id_sucursal" placeholder="Ingrese ID"
                            value = "<?php echo trim($sucursal->id_sucursal); ?> " readonly="true">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="nombre_sucursal">Nombre:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nombre_sucursal" name="nombre_sucursal" placeholder="Ingrese Nombre sucursal"
                            value = "<?php echo trim($sucursal->nombre_sucursal); ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="direccion_sucursal">Direccion:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="direccion_sucursal" name="direccion_sucursal" placeholder="Ingrese Direccion sucursal"
                            value = "<?php echo trim($sucursal->direccion_sucursal); ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="telefono_sucursal">Telefono:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="telefono_sucursal" name="telefono_sucursal" placeholder="Ingrese Telefono sucursal"
                            value = "<?php echo trim($sucursal->telefono_sucursal); ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="id_ciudad">Ciudad:</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="id_ciudad" name="id_ciudad">
                                <?php foreach($listadociudades  as $fila){
                                if(trim($sucursal->id_ciudad) == $fila['id_ciudad']){
                                ?>
                                <option selected value="<?php echo trim($fila['id_ciudad']); ?>" >
                                <?php echo utf8_encode(trim($fila['nombre_ciudad'])); ?> </option>
                                <?php }
                                else{ ?>
                                <option value="<?php echo trim($fila['id_ciudad']); ?>" >
                                <?php echo utf8_encode(trim($fila['nombre_ciudad'])); ?> </option>
                                <?php }
                                } ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="id_empresa">Empresa :</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="id_empresa" name="id_empresa">
                                <?php foreach($listaempresa as $fila){
                                if(trim($sucursal->id_empresa) == $fila['id_empresa']){
                                ?>
                                <option selected value="<?php echo trim($fila['id_empresa']); ?>" >
                                <?php echo utf8_encode(trim($fila['nombre_empresa'])); ?> </option>
                                <?php }
                                else{ ?>
                                <option value="<?php echo trim($fila['id_empresa']); ?>" >
                                <?php echo utf8_encode(trim($fila['nombre_empresa'])); ?> </option>
                                <?php }
                                } ?>
                            </select>
                        </div>
                    </div>

					 <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="button" id="actualizarSucursal" data-toggle="tooltip" title="Actualizar sucursal" class="btn btn-primary">Actualizar</button>
                            <button type="button" id="btncerrarSucursal2" data-toggle="tooltip" title="Cancelar Edición" class="btn btn-success btncerrarSucursal2"> Cancelar </button>
                        </div>

                    </div>

					<input type="hidden" id="editar" value="editar" name="accion"/>
			</fieldset>

		</form>
	</div>
