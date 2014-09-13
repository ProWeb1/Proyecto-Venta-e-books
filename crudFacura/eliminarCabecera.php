<html>
	<head>
	</head>
	<body>
		<div id="main">
			<?php
				$id=$_GET["id"];
				include_once("CabeceraCollector.php");
				$CabeceraCollectorObj = new CabeceraCollector();
				$CabeceraCollectorObj->deleteCabecera($id);
				echo "Factura con id ". htmlspecialchars($id) ."  ha sido eliminada correctamente.";
			?>
			<div><a href="indexCabecera.php">Volver al Inicio</a></div>
		</div>
	</body>
</html>