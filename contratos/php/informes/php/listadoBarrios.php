<?php
	include("modelo.php");
	$listadoBarrios = listaBarrios();
?>
<html>
	<head><title>Listado de Barrios</title>
		<link rel="stylesheet" type="text/css" href="../css/estilo.css" />
	</head>
	<body>
	<h2 align="center">Listado de Barrio </h2>
	<table border="1" align="center">
		<tr>
			<th>No,</th>
			<th>Codigo</th>
			<th>Nombre</th>
			<th>&nbs;</th>
			<th>&nbs;</th>
		</tr>
<?php
			$i=1;
			foreach($listadoBarrios  as $fila)
			{
				echo "<tr>";
				echo "<td>". $i."</td>";
				echo "<td>". $fila['barr_codi']. "</td>";
				echo "<td>". $fila['barr_nomb']. "</td>";
				echo "<td><a href=\"borrarBarrio.php?cod=".$fila["barr_codi"]."\">Borrar</td>";
				echo "<td><a href=\"editarrBarrio.php?cod=".$fila["barr_codi"]."\">
				<img src=\"../imagenes/editar.jpg\" height=30 width=30></td>";
				echo "</tr>";
				$i++;
			}
?>
	</table>
	</body>
</html>