<?php
	class Detalle{
		private $idDetalle;
		private $fk_cabecera;
		private $linea;
		private $codigoEbook;

		function __construct($idDetalle, $fk_cabecera, $linea, $codigoEbook){
			$this->idDetalle = $idDetalle;
			$this->fk_cabecera = $fk_cabecera;
			$this->linea = $linea;
			$this->codigoEbook = $codigoEbook;
		}

		function getIdDetalle(){
			return $this->idDetalle;
		}

		function getCabecera(){
			return $this->fk_cabecera;
		}

		function getLinea(){
			return $this->linea;
		}

		function getCodigoEbook(){
			return $this->codigoEbook;
		}

		function setIdDetalle($idDetalle){
			$this->idDetalle = $idDetalle;
		}

		function setCabecera($fk_cabecera){
			$this->fk_cabecera = $fk_cabecera;
		}

		function setLinea($linea){
			$this->linea = $linea;
		}

		function setCodigoEbook($codigoEbook){
			$this->codigoEbook = $codigoEbook;
		}
	}
?>