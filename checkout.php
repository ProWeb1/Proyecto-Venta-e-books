<?php
include_once("CarritoCollector.php");
include_once("ANALI EBOOK/EbookCollector.php");
include_once("AutorCollector.php");
include_once("coleccionCollector.php");
session_start();
$idUsuario = $_GET['id'];
$carritoCollectorObj = new CarritoCollector();
$ebookCollectorObj = new EbookCollector();
$coleccionCollectorObj = new coleccionCollector();
$secuencia = $coleccionCollectorObj->contarRows();
?>
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
			foreach ($carritoCollectorObj->showCarritosPorUsuario($idUsuario) as $c) {
				$ebook = $ebookCollectorObj->showEbooks($c->getEbook());
				$coleccionCollectorObj->createColeccion($idUsuario, $ebook->getidEbook(), ($secuencia + 1));
				$secuencia++;
			}
			$carritoCollectorObj->deleteAllCarritos($idUsuario);
			?>
			<div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
				<h3 class="animated bounceInDown"><center>Su compra se realizo con exito</br><a href="index.php">Regresar</a></center></h3>
			</div>
		</div>
	</body>
</html>