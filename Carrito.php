<?php
	class Carrito{
		private $fk_usuario;
		private $fk_ebook;

		function __construct($fk_usuario, $fk_ebook){
			$this->fk_usuario = $fk_usuario;
			$this->fk_ebook = $fk_ebook;
		}

		function getUsuario(){
			return $this->fk_usuario;
		}

		function getEbook(){
			return $this->fk_ebook;
		}

		function setUsuario($fk_usuario){
			$this->fk_usuario = $fk_usuario;
		}

		function setEbook($fk_ebook){
			$this->fk_ebook = $fk_ebook;
		}
	}
?>