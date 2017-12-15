
<?php
    require_once("../modeloAbstractoDB.php");
    session_start();
    class Proveedor extends ModeloAbstractoDB {
		public $id_proveedor;
		public $identificador_proveedor;
		public $nombre_proveedor;
		public $telefono_proveedor;
    public $correo_proveedor;
    public $direccion_proveedor;
    public $fecha_creacion_proveedor;
    public $sector_proveedor;
    public $id_ciudad;
    public $estado;
    public $fecha_modificacion;
    public $usuario_creacion;
		function __construct() {
		}

		public function consultar($id_proveedor='') {
			if($id_proveedor!=''):
				$this->query = "
        SELECT
                `id_proveedor`, `identificador_proveedor`, `nombre_proveedor`, `telefono_proveedor`,
                `correo_proveedor`, `direccion_proveedor`, `fecha_creacion_proveedor`, `estado`, `sector_proveedor`, `id_ciudad`
        FROM
                `tb_proveedor`
				WHERE
                  id_proveedor = '$id_proveedor'
        ORDER BY
                  nombre_proveedor
        DESC
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
                             v.id_proveedor, v.identificador_proveedor, v.nombre_proveedor, v.correo_proveedor,
                             v.direccion_proveedor, v.estado, v.sector_proveedor, c.id_ciudad, c.nombre_ciudad, p.nombre_pais, p.id_pais, v.telefono_proveedor
                      FROM
                            tb_proveedor AS v
                      INNER JOIN
                            tb_ciudad AS c ON
                             ( v.id_ciudad = c.id_ciudad )
                      INNER JOIN
                            tb_pais AS p ON
                            ( p.id_pais = c.id_pais ) ";
			$this->obtener_resultados_query();
			return $this->rows;
		}

		public function nuevo($datos=array()) {
			if(array_key_exists('id_proveedor', $datos)):
				foreach ($datos as $campo=>$valor):
					$$campo = $valor;
                endforeach;
              $fecha_creacion_proveedor = date('Ymd');
              $fecha_modificacion = date('Ymd');
              $estado = 1;
              /*$usuario_creacion = $_SESSION['id_usuario'];
                $usuario_modificacion = $_SESSION['id_usuario'];*/

				$this->query = "
        INSERT INTO
        tb_proveedor
                        (id_proveedor,identificador_proveedor,fecha_modificacion,fecha_creacion_proveedor,estado,nombre_proveedor
                        ,sector_proveedor,telefono_proveedor,correo_proveedor,direccion_proveedor,id_ciudad)
        VALUES
                        (NULL,'$identificador_proveedor','$fecha_creacion_proveedor','$fecha_modificacion','$estado','$nombre_proveedor',
                        '$sector_proveedor','$telefono_proveedor','$correo_proveedor','$direccion_proveedor','$id_ciudad')";
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
			$this->query = "
      UPDATE
              tb_proveedor
			SET
              identificador_proveedor='$identificador_proveedor',
        			nombre_proveedor ='$nombre_proveedor',
        			telefono_proveedor ='$telefono_proveedor',
        			correo_proveedor ='$correo_proveedor',
        			direccion_proveedor ='$direccion_proveedor',
              sector_proveedor ='$sector_proveedor',
              id_ciudad ='$id_ciudad',
              fecha_modificacion ='$fecha_modificacion',
              fecha_modificacion = '$fecha_modificacion',
              usuario_creacion = '$usuario_creacion',
              usuario_modificacion = '$usuario_modificacion'
      WHERE
              id_proveedor = '$id_proveedor' ";

			$this->ejecutar_query_simple();
		}

		public function borrar($id_proveedor='', $estado= '') {
            if($id_proveedor != '' && $estado != ''):
                $this->query = "
                UPDATE
                            tb_proveedor
                SET
                            estado='$estado'
                WHERE
                            id_proveedor = '$id_proveedor'
                ";
                $this->ejecutar_query_simple();
            endif;
		}
		function __destruct() {
		}
	}
?>
