<?php
	class idioma{
		private $codigo;
		private $descripcion;

	function __construct($codigo, $descripcion){
		$this->codigo = $codigo;
		$this->descripcion = $descripcion;
	}

	function getCodigo(){
		return $this->codigo;
	}

	function getDescripcion(){
		return $this->descripcion;
	}

	function setCodigo($codigo){
		$this->codigo = $codigo;
	}

	function setDescripcion($descripcion){
		$this->descripcion = $descripcion;
	}
	
	}
?>