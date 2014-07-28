<?php
	class editorial{
		private $codigo;
		private $razon_social;
		private $persona_contacto;
		private $email;
		private $telefono:
		private $direccion;

		function __construct($codigo, $razon_social, $persona_contacto, $email, $telefono, $direccion){
			$this->codigo = $codigo;
			$this->razon_social = $razon_social;
			$this->persona_contacto = $persona_contacto;
			$this->email = $email;
			$this->telefono = $telefono;
			$this->direccion = $direccion;
		}

		function getCodigo(){
			return $this->codigo;
		}

		function getRazonSocial(){
			return $this->razon_social;
		}

		function getPersonaContacto(){
			return $this->razon_social;
		}

		function getEmail(){
			return $this->email;
		}

		function getTelefono(){
			return $this->telefono;
		}

		function getDireccion(){
			return $this->direccion;
		}

		function setCodigo($codigo){
			$this->codigo = $codigo;
		}

		function setRazonSocial($razon_social){
			$this->razon_social = $razon_social;
		}

		function setEmail($email){
			$this->email = $email;
		}

		function setTelefono($telefono){
			$this->telefono = $telefono;
		}

		function setDireccion($direccion){
			$this->direccion = $direccion;
		}
	}

?>