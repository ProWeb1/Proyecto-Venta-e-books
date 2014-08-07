<?php
	include_once ('Cabecera.php');
	include_once ('Collector.php');

	class CabeceraCollector extends Collector{

		function showCabeceras(){
			$rows = self::$db->getRows("SELECT * FROM cabecera_factura");
			$arrayCabecera = array();
			foreach ($rows as $c) {
				$tmp = new Cabecera($c['idCabecera'], $c['fk_usuario'], $c['fecha'], $c['total_pagar']);
				$arrayCabecera[] = $tmp;
			}
			return $arrayCabecera;
		}

	}
?>