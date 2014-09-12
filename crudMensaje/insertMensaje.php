<html>
	<head>
	</head>
	<body>
		<div id="main">
			<?php
				$nombre=$_POST["nombre"];
				$email=$_POST["email"];
				$asunto=$_POST["asunto"];
				$mensaje=$_POST["texto"];
				//$valor="manuel";

				include_once("MensajeCollector.php");

				$MensajeCollectorObj = new MensajeCollector();
				$MensajeCollectorObj->createMensaje($nombre, $email, $asunto, $texto);
				echo "Sr(a): ".$nombre. "</br>";
				echo "Su mensaje ha sido recibido con exito";
			?>
			<div><a href="indexMensaje.php">Volver al Inicio</a></div>
		</div>
	</body>
</html>