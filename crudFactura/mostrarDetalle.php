<html>
	<head>
	</head>
	<?php
	$id=$_GET["id"];
	include_once("DetalleCollector.php");
	$DetalleCollectorObj = new DetalleCollector();
	?>
	<body>
		<div id="main">
			<table>
				<tr><td><a href="indexFactura.php">Regresar a Facturas</a></td></tr>
					<?php
						
						foreach ($DetalleCollectorObj->readDetalles() as $c){
							if($c->getCabecera() == $id){
								echo "<tr>";
								echo "<td>".$c->getIdDetalle() ."</td>";
								echo "<td>".$c->getCabecera()."</td>";
								echo "<td>".$c->getLinea()."</td>";
								echo "<td>".$c->getCodigoEbook()."</td>";
								echo "</tr>"; 
							}
						}
					?>
				</table>
		</div>
	</body>
</html>