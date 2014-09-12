<?php
include_once ('EbookCollector.php');
include_once ('coleccionCollector.php');

class ebooksElegidosCollector {
	
	function librosUsuario(){
		
		 $arrayEbooksElegidos= array();
		// $arrayColleccion= array();
		$arrayEbooks= array();
		$EbookCollectorObj = new EbookCollector();
		$ColeccionCollectorObj = new ColeccionCollector();
	
foreach ($EbookCollectorObj->showEbooks1() as $c){
	$variable2=$c->getidEbook();
	foreach ($ColeccionCollectorObj->guardarColeccion() as $nuevo){
		$variable=$nuevo->getfk_ebook();
		if ( $variable2 == $variable){
			array_push($arrayEbooksElegidos, $c);
				}
			} 
		}
		return $arrayEbooksElegidos; 
	}
	
}
?>