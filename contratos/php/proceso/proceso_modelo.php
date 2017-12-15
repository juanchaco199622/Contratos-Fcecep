<?php
    require_once("../modeloAbstractoDB.php");
    session_start();
	
    class Proceso extends ModeloAbstractoDB {
		public $id_proceso;
		public $nombre_proceso;
		public $tipo_proceso;
		public $fecha_creacion;
        public $fecha_modificacion;
        public $usuario_creacion;
        public $usuario_modificacion;
        public $empresa_id;
        public $estado;
		
		function __construct() {
			//$this->db_name = '';
		}
		 
		//public function consultar($id_tipo='', $empresa_id='') {
			public function consultar($id_proceso='') {
			//if($id_tipo !='' && $empresa_id != ''):
				if($id_proceso != ''):
				/*$this->query = "
                SELECT id_proceso, 
                       nombre_proceso, 
                       tipo_proceso, 
                       fecha_creacion, 
                       fecha_modificacion,
                       usuario_creacion, 
                       usuario_modificacion, 
                       empresa_id, 
                       estado
				FROM tb_proceso
                WHERE id_proceso = '$id_tipo' and  empresa_id = '$empresa_id' 
                order by fecha_creacion desc
				";*/
				$this->query = "
                SELECT id_proceso, 
                       nombre_proceso, 
                       tipo_proceso, 
                       fecha_creacion, 
                       fecha_modificacion,
                       usuario_creacion, 
                       usuario_modificacion, 
                       empresa_id, 
                       estado
				FROM tb_proceso
                WHERE id_proceso = '$id_proceso' 
                order by fecha_creacion desc
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
            SELECT  proc.id_proceso, 
					proc.nombre_proceso, 
                    proc.tipo_proceso, 
                    proc.fecha_creacion, 
					proc.fecha_modificacion,
					u.nombre usuario_creacion,
					u.nombre usuario_modificacion,
                    emp.nombre_empresa, 
                    proc.estado
			FROM tb_proceso proc
			INNER JOIN tb_empresa emp ON emp.id_empresa = empresa_id
			INNER JOIN usuarios u ON (u.id = proc.usuario_creacion OR
			u.id = proc.usuario_modificacion)
            order by fecha_creacion desc 
			";
		
		
			$this->obtener_resultados_query();
			return $this->rows;
		}
		
		public function nuevo($datos=array()) {
			if(array_key_exists('id_proceso', $datos)):
				foreach ($datos as $campo=>$valor):
					$$campo = $valor;
                endforeach;

                $fecha_creacion = date('Ymd');
                $fecha_modificacion = date('Ymd');
                $usuario_creacion = $_SESSION['id_usuario'];
                $usuario_modificacion = $_SESSION['id_usuario'];

				$this->query = "
					INSERT INTO tb_proceso
					(id_proceso, 
                    nombre_proceso, 
                    tipo_proceso, 
                    fecha_creacion, 
                    fecha_modificacion,
                    usuario_creacion, 
                    usuario_modificacion, 
                    empresa_id, 
                    estado)
					VALUES
					(DEFAULT, '$nombre_proceso', '$tipo_proceso','$fecha_creacion', '$fecha_modificacion', '$usuario_creacion', '$usuario_modificacion', '$empresa_id',  1)
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
			UPDATE tb_proceso
            SET nombre_proceso='$nombre_proceso',
                tipo_proceso='$tipo_proceso',
			    fecha_modificacion='$fecha_modificacion',
                usuario_modificacion='$usuario_modificacion'
			WHERE id_proceso = '$id_proceso'
			";
			$this->ejecutar_query_simple();
		}
		
		public function borrar($id_proceso='', $estado= '') {
            
            if($id_proceso != '' && $estado != ''):
                $this->query = "
                UPDATE tb_proceso
                SET estado='$estado'
                WHERE id_proceso = '$id_proceso'
                ";
                $this->ejecutar_query_simple();
            endif;
		}
		
		function __destruct() {
			//unset($this);
		}
	}
?>