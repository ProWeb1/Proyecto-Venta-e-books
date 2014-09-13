<?php
	include_once ('Detalle.php');
	include_once ('Collector.php');

	class DetalleCollector extends Collector{

		function showDetalle($id) {
    		$row = self::$db->getRows("SELECT * FROM detalle_factura where idDetalle= ? ", array($id)); 
    		$objDetalle = new Detalle($row[0]{'idDetalle'},$row[0]{'fk_cabeceraFactura'},$row[0]{'linea'},$row[0]{'codigoEbook'});
    		return $objDetalle;
  		}

		function showDetalles(){
			$rows = self::$db->getRows("SELECT * FROM detalle_factura");
			$arrayDetalle = array();
			foreach ($rows as $c){
				$tmp = new Detalle($c['idDetalle'], $c['fk_cabeceraFactura'], $c['linea'], $c['codigoEbook']);
				$arrayDetalle[] = $tmp;
			}
			return $arrayDetalle;
		}

		function createDetalle($fk_cabeceraFactura, $linea, $codigoEbook) {    
    		$insertRow = self::$db->insertRow("INSERT INTO ebbbooks.detalle_factura (idDetalle, fk_cabeceraFactura, linea, codigoEbook) VALUES (?, ?, ?, ?)", 
											   array(null, $fk_cabeceraFactura, $linea, $codigoEbook));
		}

		function readDetalles(){
			$rows = self::$db->getRows("SELECT * FROM detalle_factura");
			$arrayDetalle = array();
			foreach ($rows as $c){
				$tmp = new Detalle($c['idDetalle'], $c['fk_cabeceraFactura'], $c['linea'], $c['codigoEbook']);
				$arrayDetalle[] = $tmp;
			}
			return $arrayDetalle;
		}

		function updateDetalle($id, $fk_cabeceraFactura, $linea, $codigoEbook) {    
			$insertrow = self::$db->updateRow("UPDATE ebbbooks.detalle_factura SET detalle_factura.fk_cabeceraFactura = ?, detalle_factura.linea = ?, detalle_factura.codigoEbook = ? 
											WHERE  detalle_factura.idDetalle = ?" ,array($fk_cabeceraFactura, $linea, $codigoEbook, $id));
		}

		function deleteDetalle($id) {    
		  	$deleterow = self::$db->deleteRow("DELETE FROM ebbbooks.detalle_factura WHERE idDetalle= ?", array("{$id}"));
		}
	}
?>