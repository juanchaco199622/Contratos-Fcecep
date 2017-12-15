<?php
    require_once('proveedor_modelo.php');
	   $proveedor = new Proveedor();

     require_once('../pais/pais_modelo.php');
     $pais1 = new Pais();
	    $listadoPaises = $pais1->listaPais();

      require_once('../ciudad/ciudad_modelo.php');
      $ciudad1 = new Ciudad();
      $listadoCiudades = $ciudad1->listaCiudad();
      /*var_dump($listadoCiudades);*/
      /*$nuevo= json_encode($listadoCiudades);
      echo $nuevo;*/
?>
	<div class="box-header">
    <i class="fa fa-building" aria-hidden="true"></i>
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
            <div class="panel-heading">Datos del Proveedor</div>
            <div class="panel-body">

    <form class="form-horizontal" role="form"  id="fproveedor">
 					<div class="form-group">
              <label class="control-label col-sm-2" for="id_proveedor">Número de Proveedor:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="id_proveedor" name="id_proveedor" placeholder="id del Proveedor" value = "" readonly="true"  data-validation="length alphanumeric" data-validation-length="3-12">
              </div>
          </div>

          <div class="form-group">
              <label class="control-label col-sm-2" for="identificador_proveedor">Número Identificación:</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="identificador_proveedor" name="identificador_proveedor" placeholder="Ingrese Número de identificación"
                  value = "">
              </div>
          </div>

          <div class="form-group">
              <label class="control-label col-sm-2" for="nombre_proveedor">Proveedor:</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="nombre_proveedor" name="nombre_proveedor" placeholder="Ingrese Nombre Proveedor"
                  value = "">
              </div>
          </div>

          <div class="form-group">
              <label class="control-label col-sm-2" for="telefono_proveedor">Celular o Telefono :</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="telefono_proveedor" name="telefono_proveedor" placeholder="Ingrese Número celular o telefono"
                  value = "">
              </div>
          </div>

          <div class="form-group">
              <label class="control-label col-sm-2" for="correo_proveedor">E-mail:</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="correo_proveedor" name="correo_proveedor" placeholder="Ingrese E-mail"
                  value = "">
              </div>
          </div>

          <div class="form-group">
              <label class="control-label col-sm-2" for="direccion_proveedor">Dirección:</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="direccion_proveedor" name="direccion_proveedor" placeholder="Ingrese Dirección"
                  value = "">
              </div>
          </div>

          <div class="form-group">
              <label class="control-label col-sm-2" for="sector_proveedor">Sector:</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="sector_proveedor" name="sector_proveedor" placeholder="Ingrese el Sector al que pertenece"
                  value = "">
              </div>
          </div>

          <div class="form-group">
              <label class="control-label col-sm-2" for="id_pais">Pais:</label>
              <div class="col-sm-10">
                  <select class="form-control  id_pais" id="id_pais" name="id_pais">
                  <option value="" selected>Seleccione el Pais ...</option>
                      <?php foreach($listadoPaises as $fila){ ?>
                      <option value="<?php echo trim($fila['id_pais']); ?>" ><?php echo utf8_encode(trim($fila['nombre_pais'])); ?> </option>
                      <?php } ?>
                  </select>
              </div>
          </div>

          <div class="form-group">
              <label class="control-label col-sm-2" for="id_ciudad">Ciudad:</label>
              <div class="col-sm-10">
                  <select class="form-control id_ciudad" id="id_ciudad" name="id_ciudad">
                  <option value="" selected>Seleccione una Ciudad...</option>
                      <?php foreach($listadoCiudades as $fila){ ?>
                      <option value="<?php echo trim($fila['id_ciudad']); ?>" >
                      <?php echo utf8_encode(trim($fila['nombre_ciudad'])); ?> </option>
                      <?php } ?>
                  </select>
              </div>
          </div>

					 <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                  <button type="button" id="grabarProveedor" class="btn btn-primary" data-toggle="tooltip" title="Grabar Rol">Grabar Proveedor</button>
                  <button type="button" id="cerrar" class="btn btn-success btncerrar_nuevo_Proveedor" data-toggle="tooltip" title="Cancelar">Cancelar</button>
              </div>
          </div>

					<input type="hidden" id="nuevo" value="nuevo" name="accion"/>
			</fieldset>
		</form>
	</div>
