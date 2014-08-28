<?php
	include_once ('Mensaje.php');
	include_once ('Collector.php');

	class MensajeCollector extends Collector{

		function showMensajes(){
			$rows = self::$db->getRows("SELECT * FROM mensaje");
			$arrayMensaje = array();
			foreach ($rows as $c) {
				$tmp = new Mensaje($c['idMensaje'], $c['nombre'], $c['email'], $c['asunto'], $c['mensaje']);
				$arrayMensaje[] = $tmp;
			}
			return $arrayMensaje;
		}

		function createMensaje($nombre, $email, $asunto, $mensaje){
			$insertRow = self::$db->insertRow("INSERT INTO ebbbooks.mensaje (idMensaje, nombre, email, asunto, mensaje) VALUES (?, ?, ?, ?, ?)", 
											   array(null, $nombre, $email, $asunto, $mensaje));

		}

	}
?>