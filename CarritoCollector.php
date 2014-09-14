<?php
	include_once ('Carrito.php');
	include_once ('Collector.php');

	Class CarritoCollector extends Collector {
		function showCarritosPorUsuario($idUsuario){
			$rows = self::$db->getRows("SELECT * FROM carrito WHERE fk_usuario = ?", array($idUsuario));
			$arrayCarrito = array();
			foreach ($rows as $c) {
				$objCarrito = new Carrito($c['fk_usuario'],$c['fk_ebook']);
				$arrayCarrito[] = $objCarrito;
			}
			return $arrayCarrito;
		}

		function createCarrito($fk_usuario, $fk_ebook){
			$insertRow = self::$db->insertRow("INSERT INTO ebbbooks.carrito (fk_usuario, fk_ebook) VALUES (?, ?)", array($fk_usuario, $fk_ebook));
		}

		function readCarritos(){
			$rows = self::$db->getRows("SELECT * FROM carrito");
			$arrayCarrito = array();
			foreach ($rows as $c){
				$tmp = new Carrito($c['fk_usuario'],$c['fk_ebook']);
				$arrayCarrito[] = $tmp;
			}
			return $arrayCarrito;
		}

		function updateCarrito($fk_usuario, $fk_ebook){
			$insertrow = self::$db->updateRow("UPDATE ebbbooks.carrito SET carrito.fk_ebook = ? WHERE  carrito.fk_usuario = ?" ,array($fk_ebook, $fk_usuario));
		}

		function deleteCarrito($fk_usuario, $fk_ebook){
			$deleterow = self::$db->deleteRow("DELETE FROM ebbbooks.carrito WHERE fk_usuario= ? AND fk_ebook= ?", array($fk_usuario, $fk_ebook));
		}

		function deleteAllCarritos($fk_usuario){
			$deleterow = self::$db->deleteRow("DELETE FROM ebbbooks.carrito WHERE fk_usuario= ?", array($fk_usuario));
		}
	}
?>