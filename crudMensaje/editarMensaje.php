<html>
	<head>
	</head>

	<body>
		<div id="main">
			<?php
				$id=$_POST["id"];
				$nombre=$_POST["nombre"];
				$email=$_POST["email"];
				$asunto=$_POST["asunto"];
				$mensaje=$_POST["texto"];

				echo "Edici&oacute;n en proceso ....  </br>";

				include_once("MensajeCollector.php");
				$MensajeCollectorObj = new MensajeCollector();
				$MensajeCollectorObj->updateMensaje($id, $nombre, $email, $asunto, $texto);

				echo "Mensaje con id :".$id."</br>actualizado</br>";
			?>
			<div><a href="indexMensaje.php">Volver al Inicio</a></div>
		</div>
	</body>
</html>