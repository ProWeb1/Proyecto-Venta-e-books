<?php
	require_once ('conection.php');
	
		class traductor {
		private $idtraductor;
		private $idpersona;
		private $idgrupo;
		
		const TABLA = 'traductor';

		function __construct($idtraductor, $idpersona, $idgrupo){
			$this->idusuario = $idtraductor;
			$this->idpersona = $idpersona;
			$this->idgrupo = $idgrupo;

		}
		
		function getidtraductor(){
			return $this->idtraductor;
		}

		function getidpersona(){
			return $this->idpersona;
		}
		function getidgrupo(){
			return $this->idgrupo;
		}


		function setidtraductor($idtraductor){
			$this->idtraductor= $idtraductor;
		}

		function setidpersona($idpersona){
			$this->idpersona = $idpersona;
		}
		function setidgrupo($idgrupo){
			$this->idgrupo = $idgrupo;
		}
				
	}

?>
