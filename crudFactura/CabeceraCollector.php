<?php
	include_once ('Cabecera.php');
	include_once ('Collector.php');

	class CabeceraCollector extends Collector{

		function showCabecera($id) {
    		$row = self::$db->getRows("SELECT * FROM cabecera_factura where idCabecera= ? ", array($id)); 
    		$objCabecera = new Cabecera($row[0]{'idCabecera'},$row[0]{'fk_usuario'},$row[0]{'fecha'},$row[0]{'total_pagar'});
    		return $objCabecera;
  		}

  		function showCabeceras(){
			$rows = self::$db->getRows("SELECT * FROM cabecera_factura");
			$arrayCabecera = array();
			foreach ($rows as $c) {
				$tmp = new Cabecera($c['idCabecera'], $c['fk_usuario'], $c['fecha'], $c['total_pagar']);
				$arrayCabecera[] = $tmp;
			}
			return $arrayCabecera;
		}

  		function createCabecera($fk_usuario, $fecha, $total_pagar) {    
    		$insertRow = self::$db->insertRow("INSERT INTO ebbbooks.cabecera_factura (idCabecera, fk_usuario, fecha, total_pagar) VALUES (?, ?, ?, ?)", 
											   array(null, $fk_usuario, $fecha, $total_pagar));
		}

		function readCabeceras(){
			$rows = self::$db->getRows("SELECT * FROM cabecera_factura");
			$arrayCabecera = array();
			foreach ($rows as $c){
				$tmp = new Cabecera($c['idCabecera'], $c['fk_usuario'], $c['fecha'], $c['total_pagar']);
				$arrayCabecera[] = $tmp;
			}
			return $arrayCabecera;
		}

		function updateCabecera($id, $fk_usuario, $fecha, $total_pagar) {    
			$insertrow = self::$db->updateRow("UPDATE ebbbooks.cabecera_factura SET cabecera_factura.fk_usuario = ?, cabecera_factura.fecha = ?, cabecera_factura.total_pagar = ? 
											WHERE  cabecera_factura.idCabecera = ?" ,array($fk_usuario, $fecha, $total_pagar, $id));
		}

		function deleteCabecera($id) {    
		  	$deleterow = self::$db->deleteRow("DELETE FROM ebbbooks.cabecera_factura WHERE idCabecera= ?", array("{$id}"));
		}  


	}
?>