<?php
    require_once("../modeloAbstractoDB.php");

    class Usuario extends ModeloAbstractoDB {
		public $id_usuario;
		public $usuario;
		public $password;
		public $nombre;
		public $correo;
    public $last_session;
    public $id_tipo;
    public $fecha_creacion;
    public $fecha_modificacion;
    public $usuario_creacion;
    public $usuario_modificacion;
    public $estado;

		function __construct() {
		}

		public function consultar($id='') {
			if($id !=''):
				$this->query = "
        SELECT
                  `id`, `usuario`, `password`, `nombre`, `correo`, `last_session`, `activacion`, `token`, `token_password`,
                  `password_request`, `id_tipo`, `fecha_creacion`, `fecha_modificacion`, `usuario_modificacion`,
                   `usuario_creacion`, `estado`, id_empresa
        FROM
                  `usuarios`
				WHERE
                  id = '$id' order by id
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
                  u.id, u.correo, u.usuario, u.id_empresa, u.id_tipo, u.fecha_creacion
                  ,t.tipo , e.nombre_empresa, u.estado
      FROM
                  usuarios AS u
      INNER JOIN
                  tipo_usuario AS t ON
                    (u.id_tipo = t.id_tipo)
      INNER JOIN
                  tb_empresa AS e ON
                    (u.id_empresa = e.id_empresa)
                       ORDER BY id;
			";
			$this->obtener_resultados_query();
			return $this->rows;
		}

		public function editar($datos=array()) {
			foreach ($datos as $campo=>$valor):
				$$campo = $valor;
			endforeach;

      /*$fecha_modificacion = date('Ymd');
      $usuario_modificacion = $_SESSION['id_usuario'];*/

      $this->query = "
			UPDATE
              usuarios
			SET
              id_empresa ='$id_empresa',
              id_tipo = '$id_tipo',
              fecha_modificacion = '$fecha_modificacion',
              usuario_modificacion = '$usuario_modificacion'

      WHERE
              id= '$id'
			";
			           $this->ejecutar_query_simple();
		}

    public function borrar($id='', $estado= '') {

            if($id != '' && $estado != ''):
                $this->query = "
                UPDATE
                              usuarios
                SET
                              estado='$estado'
                WHERE
                              id = '$id'
                ";
                $this->ejecutar_query_simple();
            endif;
		}

	}
?>
