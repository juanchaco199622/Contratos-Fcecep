<?php
  require_once('../ciudad/ciudad_modelo.php');
  $ciudad1 = new Ciudad();
  $listadoCiudades = $ciudad1->listaCiudad();
	require_once('proveedor_modelo.php');
	$codigo = $_POST['codigo'];
  $proveedor = new Proveedor();
	$proveedor->consultar($codigo);
?>
	<div class="box-header">
    	<i class="fa fa-building" aria-hidden="true">Editar Proveedor</i>
  			<div class="pull-right box-tools">
    			<button class="btn btn-info btn-sm btncerrar_nuevo_Proveedor" data-toggle="tooltip" title="Cerrar"><i class="fa fa-times"></i></button>
  			</div>
    </div>
    <div class="box-body">

		<div align ="center">
				<div id="actual">
				</div>
		</div>
<div class="panel-group"><div class="panel panel-primary">
  <div class="panel-heading">Editar Proveedor</div>
<div class="panel-body">
      <form class="form-horizontal" role="form"  id="fproveedor">
 					<div class="form-group">
                        <label class="control-label col-sm-2" for="id_proveedor">Número de Proveedor :</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="id_proveedor" name="id_proveedor" placeholder="Ingrese Codigo"
                            value = "<?php echo trim($proveedor->id_proveedor); ?>" readonly="true" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="identificador_proveedor">Identificación:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="identificador_proveedor" name="identificador_proveedor" placeholder="Número de identificación"
                            value = "<?php echo trim($proveedor->identificador_proveedor); ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="nombre_proveedor">Proveedor:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nombre_proveedor" name="nombre_proveedor" placeholder="Ingrese Proveedor"
                            value = "<?php echo trim($proveedor->nombre_proveedor); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="telefono_proveedor"> Celular o Telefono :</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="telefono_proveedor" name="telefono_proveedor" placeholder="Ingrese Número de telefono"
                            value = "<?php echo trim($proveedor->telefono_proveedor); ?>"  >
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="correo_proveedor"> E-mail :</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="correo_proveedor" name="correo_proveedor" placeholder="Ingrese E-mail "
                            value = "<?php echo trim($proveedor->correo_proveedor); ?>">
                        </div>
                    </div>

										<div class="form-group">
                        <label class="control-label col-sm-2" for="direccion_proveedor">  Dirección :</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="direccion_proveedor" name="direccion_proveedor" placeholder="Ingrese Dirección "
                            value = "<?php echo trim($proveedor->direccion_proveedor); ?>">
                        </div>
                    </div>

										<div class="form-group">
                        <label class="control-label col-sm-2" for="sector_proveedor">Sector :</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="sector_proveedor" name="sector_proveedor" placeholder="Ingrese el sector de la empresa "
                            value = "<?php echo trim($proveedor->sector_proveedor); ?>">
                        </div>
                    </div>

										<div class="form-group">
												<label class="control-label col-sm-2" for="id_ciudad">Ciudad:</label>
												<div class="col-sm-10">
														<select class="form-control" id="id_ciudad" name="id_ciudad">
																<?php foreach($listadoCiudades as $fila){
																if(trim($proveedor->id_ciudad) == $fila['id_ciudad']){
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
            	<div class="col-sm-offset-2 col-sm-10">
                	<button type="button" id="actualizar_Proveedor" data-toggle="tooltip" title="Actualizar Proveedor" class="btn btn-primary">Actualizar</button>
                	<button type="button" id="cancelar" data-toggle="tooltip" title="Cancelar Edicion" class="btn btn-success btncerrar_nuevo_Proveedor"> Cancelar </button>
            	</div>
          </div>

					<input type="hidden" id="editar" value="editar" name="accion"/>
			</fieldset>
		</form>
	</div>
