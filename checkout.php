<?php
include_once("CarritoCollector.php");
include_once("crudEbook/EbookCollector.php");
include_once("AutorCollector.php");
include_once("coleccionCollector.php");
include_once("crudFactura/CabeceraCollector.php");
include_once("crudFactura/DetalleCollector.php");
session_start();
$total = $_GET['total'];
$idUsuario = $_SESSION['idUsuario'];
$carritoCollectorObj = new CarritoCollector();
$ebookCollectorObj = new EbookCollector();
$coleccionCollectorObj = new coleccionCollector();
$cabeceraCollectorObj = new CabeceraCollector();
$detalleCollectorObj = new DetalleCollector();
$secuencia = $coleccionCollectorObj->contarRows();
$linea = 1;
$fecha = date('Y-m-d');
$arrayCabecera = array();
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
			//CREAR LA CABECERA DE FACTURA
			$cabeceraCollectorObj->createCabecera($idUsuario, $fecha, $total);
			$arrayCabecera = $cabeceraCollectorObj->readCabeceras();
			$size = (count($arrayCabecera) - 1 );
			$cabecera = $arrayCabecera[$size];
			//****************************
			foreach ($carritoCollectorObj->showCarritosPorUsuario($idUsuario) as $c) {
				$ebook = $ebookCollectorObj->showEbooks($c->getEbook());
				//AGREGAR EBOOKS A COLECCION DE USUARIO
				$coleccionCollectorObj->createColeccion($idUsuario, $ebook->getidEbook(), ($secuencia + 1));
				$secuencia++;
				//AGREGAR DETALLES A LA FACTURA
				$detalleCollectorObj->createDetalle($cabecera->getIdCabecera(), $linea, $ebook->getidEbook());
				$linea++;
			}
			//$carritoCollectorObj->deleteAllCarritos($idUsuario);
			//echo 'fecha = '.date('Y-m-d');
			//print_r($cabecera);
			?>
			<div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
				<h3 class="animated bounceInDown"><center>Su compra se realizo con exito</br><a href="index.php">Regresar</a></center></h3>
			</div>
		</div>
	</body>
</html>