<?php

    require_once('../proceso/proceso_modelo.php');
    require_once('../empresa/empresa_modelo.php');


    $proceso = new Proceso();
    $empresa = new Empresa();

    $listadoEmpresas = $empresa->lista();


	

?>	

<!-- quick email widget -->



	<div class="box-header">
    	<i class="fa fa-building" aria-hidden="true"></i>
        <!-- tools box -->
        <div class="pull-right box-tools">
        	<button class="btn btn-info btn-sm btncerrarProceso" data-toggle="tooltip" title="Cerrar"><i class="fa fa-times"></i></button>
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

                <form class="form-horizontal" role="form"  id="fProceso">

 					<div class="form-group">
                        <label class="control-label col-sm-2" for="id_proceso">ID proceso:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="id_proceso" name="id_proceso" placeholder="ID de proceso" value = "" readonly="true"  data-validation="length alphanumeric" data-validation-length="3-12">
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-sm-2" for="nombre_proceso">Nombre de proceso:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nombre_proceso" name="nombre_proceso" placeholder="Ingrese Nombre de proceso" value = "">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="tipo_proceso">Tipo de proceso:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="tipo_proceso" name="tipo_proceso" placeholder="Ingrese Tipo proceso" value = "">
                        </div>
                    </div>

                   <!-- <div class="form-group">
                        <label class="control-label col-sm-2" for="empresa_id">Empresa:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="empresa_id" name="empresa_id" placeholder="Seleccione una empresa" value = "">
                        </div>
                    </div>-->

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="empresa_id">Empresa:</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="empresa_id" name="empresa_id">
                            <option value="" selected>Seleccione ...</option>
								<?php foreach($listadoEmpresas as $fila){ ?>
								<option value="<?php echo trim($fila['id_empresa']); ?>" >
								<?php echo utf8_encode(trim($fila['nombre_empresa'])); ?> </option>

								<?php } ?>
							</select>	
                        </div>
                    </div>





					 <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="button" id="grabarProceso" class="btn btn-primary" data-toggle="tooltip" title="Grabar Proceso">Grabar Proceso</button>
                            <button type="button" id="cerrar" class="btn btn-danger btncerrarProceso" data-toggle="tooltip" title="Cancelar">Cancelar</button>
                        </div>
                    </div>

					<input type="hidden" id="nuevo" value="nuevo" name="accion"/>

			</fieldset>



		</form>

	</div>

