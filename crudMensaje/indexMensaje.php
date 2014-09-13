<html>
	<head>
	</head>
	<?php
	include_once("MensajeCollector.php");
	$MensajeCollectorObj = new MensajeCollector();
	?>
	<body>
		<div id="main">
				<a href="formularioMensajeInsert.php">Nuevo Mensaje</a></br>
				<table>
					<thead>
						<tr>
							<th>ID</th>
							<th>Nombre</th>
							<th>Email</th>
							<th>Asunto</th>
							<th>Texto</th>
						</tr>
					</thead>
					<?php
						foreach ($MensajeCollectorObj->readMensajes() as $c){
						  echo "<tr>";
						  echo "<td>".$c->getIdMensaje() ."</td>";
						  echo "<td>".$c->getNombre()."</td>";
						  echo "<td>".$c->getEmail()."</td>";
						  echo "<td>".$c->getAsunto()."</td>";
						  echo "<td>".$c->getTexto()."</td>";
						  echo "<td><a href='formularioMensajeEditar.php?id=".$c->getIdMensaje()."'>editar</a></td>";
						  echo "<td><a href='eliminarMensaje.php?id=".$c->getIdMensaje()."'>eliminar</a></td>"; 
						  echo "</tr>"; 
						}
					?>
				</table>
				</br><a href="../perfilAdmin.php">Regresar al Administrador</a></br>
		</div>
	</body>
</html>