<?php
	require_once 'conection.php';
	class usuario {
		private $codigo;
		private $fk_persona;
		private $fk_tarjeta;
		private $clave;
		const TABLA = 'usuario';

		function __construct($codigo, $fk_persona, $fk_tarjeta, $clave){
			$this->codigo = $codigo;
			$this->fk_persona = $fk_persona;
			$this->fk_tarjeta = $fk_tarjeta;
			$this->clave = $clave;
		}
		
		function getCodigo(){
			return $this->codigo;
		}

		function getFk_persona(){
			return $this->fk_persona;
		}

		function getFk_tarjeta(){
			return $this->fk_tarjeta;
		}

		function getClave(){
			return $this->clave;
		}

		function setCodigo($codigo){
			$this->codigo= $codigo;
		}

		function setFk_persona($fk_persona){
			$this->fk_persona = $fk_persona;
		}

		function setFk_tarjeta($fk_tarjeta){
			$this->fk_tarjeta = $fk_tarjeta;
		}

		function setClave($clave){
			$this->clave = $clave;
		}

	}

?>
