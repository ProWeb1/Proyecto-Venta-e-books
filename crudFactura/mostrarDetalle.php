<html>
	<head>
	</head>
	<?php
	$id=$_GET["id"];
	include_once("DetalleCollector.php");
	include_once("../crudEbook/EbookCollector.php");
	$DetalleCollectorObj = new DetalleCollector();
	$EbookCollectorObj = new EbookCollector();
	?>
	<body>
		<div id="main">
				<a href="indexFactura.php">Regresar a Facturas</a>
				<table>
					<thead>
						<tr>
							<th>ID</th>
							<th>Cabecera</th>
							<th>Linea</th>
							<th>Ebook</th>
						</tr>
					</thead>
					<?php
						
						foreach ($DetalleCollectorObj->readDetalles() as $c){
							if($c->getCabecera() == $id){
								$ebook = $EbookCollectorObj->showEbooks($c->getCodigoEbook());
								echo "<tr>";
								echo "<td>".$c->getIdDetalle() ."</td>";
								echo "<td>".$c->getCabecera()."</td>";
								echo "<td>".$c->getLinea()."</td>";
								echo "<td>".$ebook->gettitulo()."</td>";
								echo "</tr>"; 
							}
						}
					?>
				</table>
		</div>
	</body>
</html>