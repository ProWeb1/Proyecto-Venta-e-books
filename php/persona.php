<?php
	class persona{
		private $codigo;
		private $primer_nombre;
		private $segundo_nombre;
		private $primer_apellido;
		private $segundo_apellido;
		private $fecha_nacimiento;
		private $cedula;
		private $genero;
		private $email;
		private $telefono;
		private $direccion;
		private $pais;

		function __construct($codigo, $primer_nombre, $segundo_nombre, $primer_apellido, $segundo_apellido, $fecha_nacimiento, $cedula, $genero, $email, $telefono, $direccion, $pais){
			$this->codigo = $codigo;
			$this->primer_nombre = $primer_nombre;
			$this->segundo_nombre = $segundo_nombre;
			$this->primer_apellido = $primer_apellido;
			$this->segundo_apellido = $segundo_apellido;
			$this->fecha_nacimiento = $fecha_nacimiento;
			$this->cedula = $cedula;
			$this->genero = $genero;
			$this->email = $email;
			$this->telefono = $telefono;
			$this->direccion = $direccion;
			$this->pais = $pais;
		}
//*************GETTERS*************
		function getCodigo(){
			return $this->codigo;
		}

		function getPrimerNombre(){
			return $this->primer_nombre;
		}

		function getSegundoNombre(){
			return $this->segundo_nombre;
		}

		function getPrimerApellido(){
			return $this->primer_apellido;
		}

		function getSegundoApellido(){
			return $this->segundo_apellido;
		}

		function getFechaNacimiento(){
			return $this->fecha_nacimiento;
		}

		function getCedula(){
			return $this->cedula;
		}

		function getGenero(){
			return $this->genero;
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

		function getPais(){
			return $this->pais;
		}
//*************SETTERS*************
		function setCodigo($codigo){
			$this->codigo = $codigo;
		}

		function setPrimerNombre($primer_nombre){
			$this->primer_nombre = $primer_nombre;
		}

		function setSegundoNombre($segundo_nombre){
			$this->segundo_nombre = $segundo_nombre;
		}

		function setPrimerApellido($primer_apellido){
			$this->primer_apellido = $primer_apellido;
		}

		function setSegundoApellido($segundo_apellido){
			$this->segundo_apellido = $segundo_apellido;
		}

		function setFechaNacimiento($fecha_nacimiento){
			$this->fecha_nacimiento = $fecha_nacimiento;
		}

		function setCedula($cedula){
			$this->cedula = $cedula;
		}

		function setGenero($genero){
			$this->genero = $genero;
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

		function setPais($pais){
			$this->pais = $pais;
		}



	}
?>