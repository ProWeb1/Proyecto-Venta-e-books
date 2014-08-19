<?php
	include_once ('Detalle.php');
	include_once ('Collector.php');

	class DetalleCollector extends Collector{

		function showDetalles(){
			$rows = self::$db->getRows("SELECT * FROM detalle_factura");
			$arrayDetalle = array();
			foreach ($rows as $c){
				$tmp = new Detalle($c['idDetalle'], $c['fk_cabeceraFactura'], $c['linea']);
				$arrayDetalle[] = $tmp;
			}
			return $arrayDetalle;
		}
	}
?>