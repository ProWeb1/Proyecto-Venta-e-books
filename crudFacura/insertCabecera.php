<html>
	<head>
	</head>
	<body>
		<div id="main">
			<?php
				$usuario=$_POST["usuario"];
				$fecha=$_POST["fecha"];
				$total=$_POST["total"];
				//$valor="manuel";

				include_once("CabeceraCollector.php");

				$CabeceraCollectorObj = new CabeceraCollector();
				$CabeceraCollectorObj->createCabecera($usuario, $fecha, $total);
				echo "Sr(a): ".$nombre. "</br>";
				echo "Su mensaje ha sido recibido con exito";
			?>
			<div><a href="indexMensaje.php">Volver al Inicio</a></div>
		</div>
	</body>
</html>