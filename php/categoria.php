<?php
	class categoria{
		private $codigo;
		private $nombre;
		private $descripcion;

		function __construct($codigo, $nombre, $descripcion){
			$this->codigo=$codigo;
			$this->nombre=$nombre;
			$this->descripcion=$descripcion;
		}

		function getCodigo(){
			return $this->codigo;
		}

		function getNombre(){
			return $this->nombre;
		}

		function getDescripcion(){
			return $this->descripcion;
		}

		function setCodigo($codigo){
			$this->codigo = $codigo
		}

		function setNombre($nombre){
			$this->nombre = $nombre;
		}

		function setDescripcion($descripcion){
			$this->descripcion = $descripcion
		}
	}
?>