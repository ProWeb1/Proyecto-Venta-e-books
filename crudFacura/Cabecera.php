<?php
	class Cabecera{
		private $idCabecera;
		private $fk_usuario;
		private $fecha;
		private $total_pagar;

		function __construct($idCabecera, $fk_usuario, $fecha, $total_pagar){
			$this->idCabecera = $idCabecera;
			$this->fk_usuario = $fk_usuario;
			$this->fecha = $fecha;
			$this->total_pagar = $total_pagar;
		}

		function getIdCabecera(){
			return $this->idCabecera;
		}

		function getUsuario(){
			return $this->fk_usuario;
		}

		function getFecha(){
			return $this->fecha;
		}

		function getTotal(){
			return $this->total_pagar;
		}

		function setIdCabecera($idCabecera){
			$this->idCabecera = $idCabecera;
		}

		function setUsuario($fk_usuario){
			$this->fk_usuario = $fk_usuario;
		}

		function setFecha($fecha){
			$this->fecha = $fecha;
		}

		function setTotal($total_pagar){
			$this->total_pagar = $total_pagar;
		}
	}
?>