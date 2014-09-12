<html>
	<head>
	</head>
	<body>
		<div id="main">
			<?php
				$id=$_GET["id"];
				include_once("MensajeCollector.php");
				$MensajeCollectorObj = new MensajeCollector();
				$MensajeCollectorObj->deleteMensaje($id);
				echo "Mensaje con id ". htmlspecialchars($id) ."  ha sido eliminado correctamente.";
			?>
			<div><a href="indexMensaje.php">Volver al Inicio</a></div>
		</div>
	</body>
</html>