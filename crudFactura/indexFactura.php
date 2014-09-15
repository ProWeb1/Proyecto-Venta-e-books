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
			
				<a href="formularioCabeceraInsert.php">Nueva Cabecera</a></br>
				<table>
					<thead>
						<tr>
							<th>ID</th>
							<th>Usuario</th>
							<th>Fecha</th>
							<th>Total</th>
						</tr>
					</thead>
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
				</br><a href="../perfilAdmin.php">Regresar a Perfil de Administrador</a></br>
		</div>
	</body>
</html>