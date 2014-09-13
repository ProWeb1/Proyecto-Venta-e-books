<html>
	<head>
	</head>
	<?php
	include_once("CabeceraCollector.php");
	include_once("UsuarioCollector.php");
	$CabeceraCollectorObj = new CabeceraCollector();
	$UsuarioCollectorObj = new UsuarioCollector();
	?>
	<body>
		<div id="main">
			<table>
				<tr><td><a href="formularioCabeceraInsert.php">Nueva Cabecera</a></td></tr>
					<?php
						foreach ($CabeceraCollectorObj->readCabeceras() as $c){
						  $tmpUsuario = $UsuarioCollectorObj->showUsuario($c->getUsuario());
						  echo "<tr>";
						  echo "<td>".$c->getIdCabecera() ."</td>";
						  echo "<td>".$tmpUsuario->getNombreUsuario()."</td>";
						  echo "<td>".$c->getFecha()."</td>";
						  echo "<td>".$c->getTotal()."</td>";
						  echo "<td><a href='mostrarDetalle.php?id=".$c->getIdCabecera()."'>Detalles</a></td>";
						  echo "<td><a href='eliminarCabecera.php?id=".$c->getIdCabecera()."'>Eliminar</a></td>"; 
						  echo "</tr>"; 
						}
					?>
				</table>
		</div>
	</body>
</html>