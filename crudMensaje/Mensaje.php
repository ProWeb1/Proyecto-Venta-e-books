<?php
	class Mensaje{
		private $idMensaje;
		private $nombre;
		private $email;
		private $asunto;
		private $texto;

		function __construct($idMensaje, $nombre, $email, $asunto, $texto){
			$this->idMensaje=$idMensaje;
			$this->nombre=$nombre;
			$this->email=$email;
			$this->asunto=$asunto;
			$this->texto=$texto;
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

		function getTexto(){
			return $this->texto;
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

		function setTexto($texto){
			$this->texto = $texto;
		}
	}
?>