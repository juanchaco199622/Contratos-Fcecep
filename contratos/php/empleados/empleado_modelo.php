<?php
    require_once("../modeloAbstractoDB.php");

    class Empleado extends ModeloAbstractoDB {
		public $emple_id;
		public $emple_apl;
		public $emple_nom;
		public $emple_cont;
		public $emple_carg;
		public $emple_sal;
    public $id_empresa;
    public $id_sucursal;
    public $emp_identificacion;
    public $usuario_creacion;
    public $usuario_modificacion;
    public $fecha_creacion;
    public $fecha_modificacion;

		function __construct() {

		}

		public function consultar($emple_id='') {
			if($emple_id !=''):

				$this->query = "
	      SELECT
                    `emple_id`, `id_empresa`, `id_sucursal`, `emp_identificacion`, `emple_apl`,
                    `emple_nom`, `emple_carg`, `emple_sal`, `fecha_creacion`, `fecha_modificacion`,
                     `usuario_creacion`, `usuario_modificacion`, `estado`
        FROM
                    `tb_empleado`
				WHERE
                    emple_id = '$emple_id'
        ORDER BY
                    emple_id";

				$this->obtener_resultados_query();
			endif;
			if(count($this->rows) == 1):
				foreach ($this->rows[0] as $propiedad=>$valor):
					$this->$propiedad = $valor;
				endforeach;
			endif;
		}

		public function lista() {
			$this->query = "
			SELECT
                  e.emple_id, e.emple_apl, e.emple_nom,e.emple_carg, e.emple_sal,e.id_empresa,e.id_sucursal,
                  m.nombre_empresa,e.emp_identificacion,s.nombre_sucursal
			FROM
                  tb_empleado
                    AS e
                  INNER JOIN tb_empresa AS m ON
                      (e.id_empresa = m.id_empresa)
                  INNER JOIN tb_sucursal AS s ON
                      (e.id_sucursal = s.id_sucursal)
      ORDER BY
                  emple_id
			";
			$this->obtener_resultados_query();
			return $this->rows;
		}


		public function listaEmpleado() {
			$this->query = "
			SELECT emple_id, emple_nom,emp_identificacion
			FROM tb_empleado as m order by empl_nom
			";
			$this->obtener_resultados_query();
			return $this->rows;
		}

		public function nuevo($datos=array()) {
			if(array_key_exists('emple_id', $datos)):
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
                tb_empleado
					               (emple_id,id_empresa,id_sucursal,fecha_creacion,fecha_modificacion,usuario_creacion,
                         usuario_modificacion,emple_apl,emple_nom,emp_identificacion,emple_sal,
                         emple_carg,estado)
					VALUES
					               (null,'$id_empresa','$id_sucursal','$fecha_creacion','$fecha_modificacion','$usuario_creacion',
                         '$usuario_modificacion','$emple_apl','$emple_nom','$emp_identificacion','$emple_sal',
                         '$emple_carg','$estado')
					";
				$this->ejecutar_query_simple();
			endif;
		}

		public function editar($datos=array()) {
    			foreach ($datos as $campo=>$valor):
    				$$campo = $valor;
    			endforeach;

                  $fecha_creacion = date('Ymd');
                  $fecha_modificacion = date('Ymd');
                  $usuario_creacion = $_SESSION['id_usuario'];
                  $usuario_modificacion = $_SESSION['id_usuario'];
                  $estado = 1;

    			$this->query = "
    			UPDATE
                          tb_empleado
    			SET
                          emple_id='$emple_id',
                          id_empresa='$id_empresa',
                          id_sucursal='$id_sucursal',
                          emp_identificacion='$emp_identificacion',
                    			emple_apl='$emple_apl',
                    			emple_nom='$emple_nom',
                          emple_sal = '$emple_sal',
                          fecha_modificacion='$fecha_modificacion',
                          usuario_modificacion='$usuario_modificacion',
                    			emple_carg='$emple_carg',
                          estado = '$estado'
    			WHERE
                          emple_id = '$emple_id'";

    			$this->ejecutar_query_simple();
		}

		public function borrar($emple_id='') {
			$this->query = "
			DELETE FROM tb_empleado
			WHERE emple_id = '$emple_id'
			";
			$this->ejecutar_query_simple();
		}

	}
?>
