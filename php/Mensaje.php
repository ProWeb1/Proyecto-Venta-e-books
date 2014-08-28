<?php
	class Mensaje{
		private $idMensaje;
		private $nombre;
		private $email;
		private $asunto;
		private $mensaje;

		function __construct($idMensaje, $nombre, $email, $asunto, $mensaje){
			$this->idMensaje=$idMensaje;
			$this->nombre=$nombre;
			$this->email=$email;
			$this->asunto=$asunto;
			$this->mensaje=$mensaje;
		}

		function getIdMensaje(){
			return $this->idMensaje;
		}

		function getNombre(){
			return $this->nombre;
		}

		function getEmail(){
			return $this->email;
		}

		function getAsunto(){
			return $this->asunto;
		}

		function getMensaje(){
			return $this->mensaje;
		}

		function setIdMensaje($idMensaje){
			$this->idMensaje = $idMensaje;
		}

		function setNombre($nombre){
			$this->nombre = $nombre;
		}

		function setEmail($email){
			$this->email = $email;
		}

		function setAsunto($asunto){
			$this->asunto = $asunto;
		}

		function setMensaje($mensaje){
			$this->mensaje = $mensaje;
		}
	}
?>