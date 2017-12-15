<?php

		$mysqli=new mysqli("50.62.176.74","root_cecep","Fcecep2018","contratos_taller");
		/*$mysqli=new mysqli("localhost","root","","contratos_taller");*/
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}

?>
