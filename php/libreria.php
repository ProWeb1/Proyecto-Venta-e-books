<?php
	class libreria{
		private numero;
		private fk_perfil; //CLAVE FORANEA
		private descripcion;

		function __construct($numero, $fk_perfil, $descripcion){
			$this->numero = $numero;
			$this->fk_perfil = $fk_perfil;
			$this->descripcion = $descripcion;
		}

		function getNumero(){
			return $this->numero;
		}

		function getFkPerfil(){
			return $this->fk_perfil;
		}

		function getDescripcion(){
			return $this->descripcion;
		}

		function setNumero($numero){
			$this->numero = $numero;
		}

		function setFkPerfil(){
			$this->fk_perfil = $fk_perfil;
		}

		function setDescripcion(){
			$this->descripcion = $descripcion;
		}

	}
?>