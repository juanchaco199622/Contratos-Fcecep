<?php
	function conectar(){
		include("php/config.php");
		$canal = mysql_connect($servidor,$usuario,$clave);
		mysql_select_db($db,$canal);
		return $canal;
	}
	
	function listaBarrios(){
		$canal= conectar();
		$sql = "select b.barr_codi, b.barr_nomb from tb_barrio as b";
		$resultado = mysql_query($sql,$canal) or die(mysql_error());
		$barrios = array();
		while($fila = mysql_fetch_array($resultado))
		{
			$barrios[] = $fila;
		}
		return $barrios;
	}
	
	function grabarBarrio($datos)
	{
		$canal = conectar();
		//inert into tb_barrio value(NULL,'nuevo',NULL,'3');
		$sql = "insert into tb_barrio value(NULL,'". $datos['nombre'] . "',0,'" . $datos['comuna']."')";
		$resultado = mysql_query($sql,$canal) or die(mysql_error());
		return $resultado;
	}
	
	//Funcion que borrar un barrio
	function borrarBarrio($codigo)
	{
		$canal = conectar();
		$sql = "delete from tb_barrio where barr_codi ='". $codigo ."'";
		$resultado = mysql_query($sql,$canal) or die(mysql_error());
		return $resultado;
	}
	
	function buscarBarrio($codigo)
	{
		$canal= conectar();
		$sql = "select * from tb_barrio as b where b.barr_codi ='".$codigo."'";
		$resultado = mysql_query($sql,$canal) or die(mysql_error());
		return mysql_fetch_array($resultado);
	}
	
	function actualizaBarrio($datos)
	{
		$canal = conectar();
		$sql = "update tb_barrio set barr_nomb ='". $datos['nombre'] . "',
		comu_codi='" . $datos['comuna']."'  where barr_codi = '" . $datos['codigo']."'";
		$resultado = mysql_query($sql,$canal) or die(mysql_error());
		return $resultado;
	}
	function listadoEmpresas(){
		$canal= conectar();
		$sql = "select e.empr_nit, e.empr_nomb,e.empr_dire,e.empr_tele from tb_empresa as e";
		$resultado = mysql_query($sql,$canal) or die(mysql_error());
		$empresas = array();
		while($fila = mysql_fetch_array($resultado))
		{
			$empresas[] = $fila;
		}
		return $empresas;
	}
	
	function listadoPersonas(){
		$canal= conectar();
		$sql = "select perso_apel,perso_apel_2,perso_nomb,perso_dire,perso_tele_casa,perso_mail from tb_persona order by perso_apel, perso_apel_2";
		$resultado = mysql_query($sql,$canal) or die(mysql_error());
		$personas = array();
		while($fila = mysql_fetch_array($resultado))
		{
			$personas[] = $fila;
		}
		return $personas;
	}
	
	
?>