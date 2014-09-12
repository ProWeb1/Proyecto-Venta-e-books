<?php
	include_once ('Mensaje.php');
	include_once ('Collector.php');

	class MensajeCollector extends Collector{

		function showMensaje($id){
			$rows = self::$db->getRows("SELECT * FROM mensaje WHERE idMensaje = ?", array($id));
			$objMensaje = new Mensaje($row[0]{'idMensaje'},$row[0]{'nombre'},$row[0]{'email'},$row[0]{'asunto'},$row[0]{'texto'});
			return $objMensaje;
		}

		function showMensajes(){
			$rows = self::$db->getRows("SELECT * FROM mensaje");
			$arrayMensaje = array();
			foreach ($rows as $c) {
				$tmp = new Mensaje($c['idMensaje'], $c['nombre'], $c['email'], $c['asunto'], $c['texto']);
				$arrayMensaje[] = $tmp;
			}
			return $arrayMensaje;
		}

		function createMensaje($nombre, $email, $asunto, $texto){
			$insertRow = self::$db->insertRow("INSERT INTO ebbbooks.mensaje (idMensaje, nombre, email, asunto, texto) VALUES (?, ?, ?, ?, ?)", 
											   array(null, $nombre, $email, $asunto, $texto));

		}

		function readMensajes(){
			$rows = self::$db->getRows("SELECT * FROM mensaje");
			$arrayMensaje = array();
			foreach ($rows as $c){
				$tmp = new Mensaje($c['idMensaje'], $c['nombre'], $c['email'], $c['asunto'], $c['texto']);
				$arrayMensaje[] = $tmp;
			}
			return $arrayMensaje;
		}

		function updateMensaje($id, $nombre, $email, $asunto, $texto){
			$insertrow = self::$db->updateRow("UPDATE ebbbooks.mensaje SET mensaje.nombre = ?, mensaje.email = ?, mensaje.asunto = ?,
												mensaje.texto = ? WHERE  mensaje.idMensaje = ?" ,array($nombre, $email, $asunto, $texto, $id));
		}

		function deleteMensaje($id){
			$deleterow = self::$db->deleteRow("DELETE FROM ebbbooks.mensaje WHERE idMensaje= ?", array("{$id}"));
		}

	}
?>