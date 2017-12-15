<?php
    require_once("../modeloAbstractoDB.php");

    class Sucursal extends ModeloAbstractoDB {
		public $id_sucursal;
		public $nombre_sucursal;
		public $direccion_sucursal;
		public $telefono_sucursal;
		public $id_empresa;
    public $id_ciudad;

		function __construct() {
		}
    public function listaSucursal() {
      $this->query = "
      SELECT
                  id_sucursal, nombre_sucursal
      FROM
                  tb_sucursal
      ORDER BY
                  nombre_sucursal
      ";
      $this->obtener_resultados_query();
      return $this->rows;
    }
		public function consultar($id_sucursal='') {
			if($id_sucursal !=''):
				$this->query = "
				SELECT id_sucursal, nombre_sucursal, direccion_sucursal, telefono_sucursal, id_empresa,fecha_creacion,fecha_modificacion,id_ciudad,estado
				FROM tb_sucursal
				WHERE id_sucursal = '$id_sucursal' order by id_sucursal
				";
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
                        s.id_sucursal, s.nombre_sucursal, s.direccion_sucursal,
                        s.telefono_sucursal,s.fecha_creacion,e.id_empresa,e.nombre_empresa,c.nombre_ciudad,s.estado
      FROM
                      tb_sucursal AS s
                       INNER JOIN tb_empresa AS e ON
                                  (s.id_empresa = e.id_empresa)
                       INNER JOIN tb_ciudad  AS c ON
                                  (c.id_ciudad = s.id_ciudad)
                       ORDER BY id_sucursal;
			";
			$this->obtener_resultados_query();
			return $this->rows;
		}

		public function nuevo($datos=array()) {
			if(array_key_exists('id_sucursal', $datos)):
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
                tb_sucursal
					                 (id_sucursal,nombre_sucursal,id_empresa,telefono_sucursal,fecha_creacion,fecha_modificacion,
                           direccion_sucursal,usuario_creacion,usuario_modificacion,id_ciudad,estado)
					VALUES
					                 (NULL,'$nombre_sucursal','$id_empresa','$telefono_sucursal','$fecha_creacion','$fecha_modificacion',
                           '$direccion_sucursal','$usuario_creacion','$usuario_modificacion','$id_ciudad','$estado')
					";
				$this->ejecutar_query_simple();
			endif;
		}

		public function editar($datos=array()) {
			foreach ($datos as $campo=>$valor):
				$$campo = $valor;
			endforeach;
      $fecha_modificacion = date('Ymd');
			$this->query = "
			UPDATE tb_sucursal
			SET nombre_sucursal='$nombre_sucursal',
			direccion_sucursal='$direccion_sucursal',
			telefono_sucursal='$telefono_sucursal',
      fecha_modificacion='$fecha_modificacion',
			id_empresa='$id_empresa',
      id_ciudad='$id_ciudad'
      WHERE id_sucursal = '$id_sucursal'
			";
			$this->ejecutar_query_simple();
		}

    public function borrar($id_sucursal='', $estado= '') {
            if($id_sucursal != '' && $estado != ''):
                $this->query = "
                UPDATE tb_sucursal
                SET estado='$estado'
                WHERE id_sucursal= '$id_sucursal'";
                $this->ejecutar_query_simple();
            endif;
    }

	}
?>
