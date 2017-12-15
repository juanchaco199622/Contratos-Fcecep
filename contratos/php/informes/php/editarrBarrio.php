<?php
	include("modelo.php");
	$barrio = buscarBarrio($_GET['cod']);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Documento sin t&iacute;tulo</title>
	<link rel="stylesheet" type="text/css" href="../css/estilos.css" />
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/funcionesjquery.js"></script>
	<script  type="text/javascript">
		$(document).ready(Control);
	</script>
</head>

<body>
<div align="center" class="encabezado"><h1>Sistema Municipal</h1></div>

<div id ="Resultado"></div>
<div id= "datos">
<form  name="fbarrio" class ="form_box" method="post" action="../php/actaulizaBarrio.php">
<div>
 	<fieldset><legend>Datos Barrio</legend>
		<input type="hidde" size="50" name ="codigo" id ="cod" value="<?php echo $barrio['barr_codi']; ?>" />
  		<table border="0">
			<tr><td><label>Nombre </label></td>
		  	<td><input type="text" size="50" id="nom" name ="nombre" value="<?php echo $barrio['barr_nomb']; ?>" /></td></tr>
			<tr><td><label>Comuna </label></td>
			<td><input type="text" size="50" id= "com" name ="comuna" value="<?php echo $barrio['comu_codi']; ?>"/></td></tr>	 	
		</table>
	</fieldset>
	<div id= "imagen">
	<img src="../imagenes/reforestacion.jpg">
</div>
</div>
	<!--<input type="submit" name="btngrabar" value="Grabar"  id="btngrabar"/> -->
	<input type="button" name="btngrabar" value="Grabar"  id="btngrabar"/>
</form>
</div>

</body>
</html>
