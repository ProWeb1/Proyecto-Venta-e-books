<?php
	class Detalle{
		private $idDetalle;
		private $fk_cabecera;
		private $linea;

		function __construct($idDetalle, $fk_cabecera, $linea){
			$this->idDetalle = $idDetalle;
			$this->fk_cabecera = $fk_cabecera;
			$this->linea = $linea;
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

		function setIdDetalle($idDetalle){
			$this->idDetalle = $idDetalle;
		}

		function setCabecera($fk_cabecera){
			$this->fk_cabecera = $fk_cabecera;
		}

		function setLinea($linea){
			$this->linea = $linea;
		}
	}
?>