<html>
	<head>
	</head>
	<?php
	include_once("MensajeCollector.php");
	$MensajeCollectorObj = new MensajeCollector();
	?>
	<body>
		<div id="main">
			<table>
				<tr><td><a href="formularioMensajeInsert.php">Nuevo Mensaje</a></td></tr>
					<?php
						foreach ($MensajeCollectorObj->readMensajes() as $c){
						  echo "<tr>";
						  echo "<td>".$c->getIdMensaje() ."</td>";
						  echo "<td>".$c->getNombre()."</td>";
						  echo "<td>".$c->getEmail()."</td>";
						  echo "<td>".$c->getAsunto()."</td>";
						  echo "<td>".$c->getMensaje()."</td>";
						  echo "<td><a href='formularioMensajeEditar.php?id=".$c->getIdMensaje()."'>editar</a></td>";
						  echo "<td><a href='eliminarMensaje.php?id=".$c->getIdMensaje()."'>eliminar</a></td>"; 
						  echo "</tr>"; 
						}
					?>
				</table>
		</div>
	</body>
</html>