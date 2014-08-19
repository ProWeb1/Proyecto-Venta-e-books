<?php
	include_once ('Cabecera.php');
	include_once ('Collector.php');

	class CabeceraCollector extends Collector{

		function showCabecera($id) {
    		$row = self::$db->getRows("SELECT * FROM cabecera_factura where idCabecera= ? ", array("{$id}")); 
    		$tmp = new Cabecera($c['idCabecera'], $c['fk_usuario'], $c['fecha'], $c['total_pagar']);
    		return $tmp;
  		}

  		function createCabecera($fk_usuario, $fecha, $total_pagar) {    
    		$insertrow = self::$db->insertRow("INSERT INTO ebbbooks.cabecera_factura (idCabecera, fk_usuario, fecha, total_pagar) VALUES (?, ?, ?, ?)", array(null, "[$fk_usuario]", "[$fecha]", "[$total_pagar]"));
  		} 

		function readCabeceras(){
			$rows = self::$db->getRows("SELECT * FROM cabecera_factura");
			$arrayCabecera = array();
			foreach ($rows as $c) {
				$tmp = new Cabecera($c['idCabecera'], $c['fk_usuario'], $c['fecha'], $c['total_pagar']);
				array_push($arrayCabecera, $tmp);
		    }
		    return $arrayCabecera;   
		}

		function updateCabecera($id, $total_pagar) {    
			$insertrow = self::$db->updateRow("UPDATE ebbbooks.cabecera_factura SET ebbbooks.total_pagar = ?   WHERE ebbbooks.idCabecera = ? ", array( "{$total_pagar}",$id));
		}  

		function deleteCabecera($id) {    
		  	$deleterow = self::$db->deleteRow("DELETE FROM ebbbooks.cabecera_factura WHERE idCabecera= ?", array("{$id}"));
		}  


	}
?>