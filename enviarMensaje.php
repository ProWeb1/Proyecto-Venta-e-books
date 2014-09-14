<html>
	<head>
		<link href="css/bootstrap.css" rel="stylesheet">
		<script src="js/bootstrap.min.js"></script>
		<link href="css/animate-custom.css" rel="stylesheet">
		<script src="js/custom.js"></script>
	</head>
	<body>
		<div id="main">
			<?php
				include_once("crudMensaje/MensajeCollector.php");
				$nombre=$_POST["nombre"];
				$email=$_POST["email"];
				$asunto=$_POST["asunto"];
				$mensaje=$_POST["mensaje"];
				$MensajeCollectorObj = new MensajeCollector();
				$MensajeCollectorObj->createMensaje($nombre, $email, $asunto, $mensaje);
			?>
			<div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
				<h3 class="animated bounceInDown"><center>Su mensaje ha sido recibido con exito</br><a href="index.php">Regresar</a></center></h3>
			</div>
		</div>
	</body>
</html>