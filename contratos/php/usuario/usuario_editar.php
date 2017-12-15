<?php
	require_once('usuario_modelo.php');
	$codigo = $_POST['codigo'];
	$usuario = new Usuario();
	$usuario->consultar($codigo);

  require_once('../empresa/empresa_modelo.php');
  $empresa = new Empresa();
  $listadoEmpresas = $empresa->listaEmpresa();

	require_once('../roles/rol_modelo.php');
	$rol = new Rol();
	$listadoRoles = $rol->listadoRoles();


?>

	 <div class="box-header">
    	<i class="fa fa-building" aria-hidden="true">Editar Proveedor</i>
  			<div class="pull-right box-tools">
    			<button class="btn btn-info btn-sm btncerrareditar" data-toggle="tooltip" title="Cerrar"><i class="fa fa-times"></i></button>
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
      <form class="form-horizontal" role="form"  id="fusuario">

 					        <div class="form-group">
                        <label class="control-label col-sm-2" for="id">Id Usuario :</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="id" name="id" placeholder="Ingrese Codigo"
                            value = "<?php echo trim($usuario->id); ?>" readonly="true" >
                        </div>
                    </div>

                    <div class="form-group">
                          <label class="control-label col-sm-2" for="usuario">Usuario :</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Ingrese Usuario"
                              value = "<?php echo trim($usuario->usuario); ?>" readonly="true" >
                          </div>
                      </div>

                      <div class="form-group">
                            <label class="control-label col-sm-2" for="correo"> Correo :</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="correo" name="correo" placeholder="Ingrese Usuario"
                                value = "<?php echo trim($usuario->correo); ?>" readonly="true" >
                            </div>
                        </div>

									<div class="form-group">
												<label class="control-label col-sm-2" for="id_empresa">Empresa :</label>
    												<div class="col-sm-10">
        														<select class="form-control" id="id_empresa" name="id_empresa">
              																<?php foreach($listadoEmpresas as $fila){
              																if(trim($usuario->id_empresa) == $fila['id_empresa']){
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
													<label class="control-label col-sm-2" for="id_tipo"> Rol :</label>
	    												<div class="col-sm-10">
	        														<select class="form-control" id="id_tipo" name="id_tipo">
	              																<?php foreach($listadoRoles as $fila){
	              																if(trim($usuario->id_tipo) == $fila['id_tipo']){
	              																?>
	              																<option selected value="<?php echo trim($fila['id_tipo']); ?>" >
	              																<?php echo utf8_encode(trim($fila['tipo'])); ?> </option>
	              																<?php }
	              																else{ ?>
	              																<option value="<?php echo trim($fila['id_tipo']); ?>" >
	              																<?php echo utf8_encode(trim($fila['tipo'])); ?> </option>
	              																<?php }
	              																} ?>
	        														</select>
	    												</div>
											</div>

					 <div class="form-group">
            	<div class="col-sm-offset-2 col-sm-10">
                	<button type="button" id="actualizarUsuario" data-toggle="tooltip" title="Actualizar Usuario" class="btn btn-danger">Actualizar</button>
                	<button type="button" id="cancelar" data-toggle="tooltip" title="Cancelar Edicion" class="btn btn-success btncerrarUsuario2"> Cancelar </button>
            	</div>
          </div>

					<input type="hidden" id="editar" value="editar" name="accion"/>
			</fieldset>
		</form>
	</div>
