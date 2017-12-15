<?php
	include("modelo.php");
	$barrios  = listadoBarrios();
?>
<html>
	<head>
		<title>Listado de Barrios </title>
		<link rel="stylesheet" type="text/css" href="../css/estilos.css" />
		<script type="text/javascript" src="../js/jquery.js"></script>
		<script type="text/javascript" src="../js/funcionesjquery.js"></script>
		<script type="text/javascript">
			$(document).ready(Control);
		</script>
	</head>
	<body>
	<div id="content">
		<h1 align="center">Listado de Barrios</h1>
		
		<div id="resultado" align="center"></div>
		<table border ="1" align="center">
			<tr>
				<th>Codigo</th>
				<th>Nombre Barrio </th>
				<th>&nbsp;</th>
				<th>&nbsp;</th>
			</tr>
			<?php
				foreach($barrios as $fila){
					echo "<tr> <td> " . $fila["barr_codi"] . "</td>";
					echo "<td>" . $fila["barr_nomb"] . "</td>";
					echo "<td> <label class='borrarBarrio' title='".$fila['barr_codi']."'> Borrar </label> </td>";
					echo "<td> <a href=\"editaBarrio.php?codigo=" . $fila["barr_codi"] . "\"> 
						<img src=\"../imagenes/editar.jpg\" width=30 height=30 /></a> </td></tr>";
				}
			?>
		</table>
		</div>
	</body>
</html>
<?php
	cerrarConexion($canal);
?>