<?php
    require_once("../modeloAbstractoDB.php");
    session_start();

    class Rol extends ModeloAbstractoDB {
		public $id_tipo;
		public $tipo;
		public $fecha_creacion;
		public $fecha_modificacion;
    public $usuario_creacion;
    public $usuario_modificacion;
    public $estado;
    public $pais_permiso;
    public $ciudad_permiso;
    public $proveedor_permiso;
    public $sucursal_permiso;
    public $contrato_permiso;
    public $empleado_permiso;
    public $empresa_permiso;
    public $roles_permiso;
    public $informe_permiso;
    public $procesos_permiso;
    public $usuario_permiso;

		function __construct() {
			//$this->db_name = '';
		}

		public function consultar($id_tipo='') {
			if($id_tipo !=''):
				$this->query = "
      SELECT
              `id_tipo`, `tipo`, `fecha_creacion`, `fecha_modificacion`, `usuario_creacion`, `usuario_modificacion`,
               `estado`, `pais_permiso`, `ciudad_permiso`, `proveedor_permiso`, `sucursal_permiso`,
              `contrato_permiso`, `empleado_permiso`, `empresa_permiso`, `roles_permiso`, `informe_permiso`,  `procesos_permiso`, usuario_permiso
      FROM
                `tipo_usuario`
			WHERE
                id_tipo = '$id_tipo'
        ORDER BY fecha_creacion desc
				";
				$this->obtener_resultados_query();
			endif;
			if(count($this->rows) == 1):
				foreach ($this->rows[0] as $propiedad=>$valor):
					$this->$propiedad = $valor;
				endforeach;
			endif;
		}
    public function listadoRoles() {
			$this->query = "
			SELECT
            id_tipo, tipo
			FROM
            tipo_usuario
      ORDER BY
      			tipo";

			$this->obtener_resultados_query();
			return $this->rows;
		}
		public function lista() {
			$this->query = "
            SELECT tp.id_tipo,
                   tp.tipo,
                   tp.estado,
                   tp.pais_permiso,
                   tp.ciudad_permiso,
                   tp.proveedor_permiso,
                   tp.sucursal_permiso,
                   tp.contrato_permiso,
                   tp.empleado_permiso,
                   tp.empresa_permiso,
                   tp.roles_permiso,
                   tp.informe_permiso,
                   tp.pais_permiso,
                   tp.procesos_permiso,
                   tp.fecha_creacion,
                   tp.fecha_modificacion,
                   tp.usuario_permiso,
                   usr.nombre usuario_creacion,
                   usr.nombre usuario_modificacion,
                   tp.estado
            FROM tipo_usuario tp
            LEFT JOIN usuarios usr ON (usr.id = tp.usuario_creacion OR usr.id = tp.usuario_modificacion)
            order by tp.tipo
			";

			$this->obtener_resultados_query();
			return $this->rows;
		}

    public function nuevo($datos=array()) {
      if(array_key_exists('tipo', $datos)):
        foreach ($datos as $campo=>$valor):
          $$campo = $valor;
                endforeach;

                $fecha_creacion = date('Ymd');
                $fecha_modificacion = date('Ymd');
                $usuario_creacion = $_SESSION['id_usuario'];
                $usuario_modificacion = $_SESSION['id_usuario'];
                $estado = 1;
        $this->query = "
          INSERT INTO
                  tipo_usuario
                 (id_tipo,tipo,fecha_creacion, fecha_modificacion, usuario_creacion, usuario_modificacion, estado, pais_permiso, ciudad_permiso,
                 proveedor_permiso, empresa_permiso, sucursal_permiso, procesos_permiso, informe_permiso, contrato_permiso, empleado_permiso, roles_permiso
                 ,usuario_permiso)
          VALUES
                 (null,'$tipo','$fecha_creacion','$fecha_modificacion', '$usuario_creacion', '$usuario_modificacion','$estado','$pais_permiso',
                 '$ciudad_permiso','$proveedor_permiso','$empresa_permiso','$sucursal_permiso', '$procesos_permiso', '$informe_permiso', '$contrato_permiso',
                 '$empleado_permiso', '$roles_permiso','$usuario_permiso')
          ";
        $this->ejecutar_query_simple();
      endif;
    }

		public function editar($datos=array()) {
			foreach ($datos as $campo=>$valor):
				$$campo = $valor;
			endforeach;

			$fecha_modificacion = date('Ymd');
			$usuario_modificacion = $_SESSION['id_usuario'];

			$this->query = "
			UPDATE

          tipo_usuario

			SET

          tipo='$tipo',
			    fecha_modificacion='$fecha_modificacion',
          usuario_modificacion='$usuario_modificacion',
          pais_permiso='$pais_permiso',
          ciudad_permiso='$ciudad_permiso',
          empresa_permiso = '$empresa_permiso',
          proveedor_permiso = '$proveedor_permiso',
          sucursal_permiso = '$sucursal_permiso',
          informe_permiso = '$informe_permiso',
          procesos_permiso = '$procesos_permiso',
          roles_permiso = '$roles_permiso',
          empleado_permiso = '$empleado_permiso',
          contrato_permiso = '$contrato_permiso',
          usuario_permiso = '$usuario_permiso'

			WHERE
          id_tipo = '$id_tipo'
			";
			$this->ejecutar_query_simple();
		}

		public function borrar($id_tipo='', $estado= '') {

            if($id_tipo != '' && $estado != ''):
                $this->query = "
                UPDATE
                              tipo_usuario
                SET
                              estado='$estado'
                WHERE
                              id_tipo = '$id_tipo'
                ";
                $this->ejecutar_query_simple();
            endif;
		}

		function __destruct() {
			//unset($this);
		}
	}
?>
