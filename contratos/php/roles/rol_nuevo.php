<?php
    require_once('rol_modelo.php');
	$rol = new Rol();

?>
	<div class="box-header">
    	<i class="fa fa-building" aria-hidden="true"></i>
        <!-- tools box -->
        <div class="pull-right box-tools">
        	<button class="btn btn-info btn-sm btncerrar" data-toggle="tooltip" title="Cerrar"><i class="fa fa-times"></i></button>
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

                <form class="form-horizontal" role="form"  id="frol">

 					           <div class="form-group">
                        <label class="control-label col-sm-2" for="id_tipo">ID:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="id_tipo" name="id_tipo" placeholder="ID de rol"
                            value = "" readonly="true"  data-validation="length alphanumeric" data-validation-length="3-12">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="tipo">Nombre de rol:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="tipo" name="tipo" placeholder="Ingrese Nombre Rol"
                            value = "">
                        </div>
                    </div>
                    <div class="form-group">
          						<label class="control-label col-sm-2" for="pais_permiso">Pais :</label>
          							<div class="col-sm-10">
          								<select class="form-control" id="pais_permiso"name="pais_permiso">
          									<option value="1">Activo permiso Paises</option>
          									<option value="0">Inactivo permiso Paises</option>
          								</select>
          							</div>
          					</div>
          					<div class="form-group">
          						<label class="control-label col-sm-2" for="ciudad_permiso">Ciudad :</label>
          							<div class="col-sm-10">
          								<select class="form-control" id="ciudad_permiso"name="ciudad_permiso">
          									<option value="1">Activo permiso Ciudades</option>
          									<option value="0">Inactivo permiso Ciudades</option>
          								</select>
          							</div>
          					</div>
          					<div class="form-group">
          						<label class="control-label col-sm-2" for="empresa_permiso">Empresa :</label>
          							<div class="col-sm-10">
          								<select class="form-control" id="empresa_permiso"name="empresa_permiso">
          									<option value="1">Activo permiso Empresa</option>
          									<option value="0">Inactivo permiso Empresa</option>
          								</select>
          							</div>
          					</div>
          					<div class="form-group">
          						<label class="control-label col-sm-2" for="sucursal_permiso">Sucursal :</label>
          							<div class="col-sm-10">
          								<select class="form-control" id="sucursal_permiso"name="sucursal_permiso">
          									<option value="1">Activo Permisos Sucursales</option>
          									<option value="0">Inactivo Permisos Sucursales</option>
          								</select>
          							</div>
          					</div>
          					<div class="form-group">
          						<label class="control-label col-sm-2" for="proveedor_permiso">Proveedor :</label>
          							<div class="col-sm-10">
          								<select class="form-control" id="proveedor_permiso"name="proveedor_permiso">
          									<option value="1">Activo Permiso Proveedores</option>
          									<option value="0">Inactivo Permiso Proveedores</option>
          								</select>
          							</div>
          					</div>
          					<div class="form-group">
          						<label class="control-label col-sm-2" for="empleado_permiso">Empleado :</label>
          							<div class="col-sm-10">
          								<select class="form-control" id="empleado_permiso"name="empleado_permiso">
          									<option value="1">Activo Permiso Contratos </option>
          									<option value="0">Inactivo Permiso Contrato</option>
          								</select>
          							</div>
          					</div>
          					<div class="form-group">
          						<label class="control-label col-sm-2" for="contrato_permiso">Contratos :</label>
          							<div class="col-sm-10">
          								<select class="form-control" id="contrato_permiso"name="contrato_permiso">
          									<option value="1">Activo Permiso Contratos </option>
          									<option value="0">Inactivo Permiso Contrato</option>
          								</select>
          							</div>
          					</div>
          					<div class="form-group">
          						<label class="control-label col-sm-2" for="procesos_permiso">Procesos :</label>
          							<div class="col-sm-10">
          								<select class="form-control" id="procesos_permiso"name="procesos_permiso">
          									<option value="1">Activo Permiso a Procesos</option>
          									<option value="0">Inactivo Permiso a Procesos</option>
          								</select>
          							</div>
          					</div>
          					<div class="form-group">
          						<label class="control-label col-sm-2" for="roles_permiso">Roles :</label>
          							<div class="col-sm-10">
          								<select class="form-control" id="roles_permiso"name="roles_permiso">
          									<option value="1">Activo Permiso a Roles</option>
          									<option value="0">Inactivo Permiso a Roles</option>
          								</select>
          							</div>
          					</div>
          					<div class="form-group">
          						<label class="control-label col-sm-2" for="informe_permiso">Informes :</label>
          							<div class="col-sm-10">
          								<select class="form-control" id="informe_permiso"name="informe_permiso">
          									<option value="1">Activo Permiso a Informes</option>
          									<option value="0">Inactivo Permiso a Informes</option>
          								</select>
          							</div>
          					</div>
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="usuario_permiso">Usuarios :</label>
                        <div class="col-sm-10">
                          <select class="form-control" id="usuario_permiso"name="usuario_permiso">
                            <option value="1">Activo Permiso Usuarios</option>
                            <option value="0">Inactivo Permiso Usuarios</option>
                          </select>
                        </div>
                    </div>

					 <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                  <button type="button" id="grabarRol" class="btn btn-primary" data-toggle="tooltip" title="Grabar Rol">Grabar Rol</button>
                  <button type="button" id="cerrar" class="btn btn-success btncerrar" data-toggle="tooltip" title="Cancelar">Cancelar</button>
              </div>
          </div>

					<input type="hidden" id="nuevo" value="nuevo" name="accion"/>
			</fieldset>

		</form>
	</div>
