<?php

include_once('Autor.php');
include_once('Collector.php');

class AutorCollector extends Collector
{
  
  function showAutor() {
    $rows = self::$db->getRows("SELECT * FROM autor ");        
    $arrayAutor= array();        
    foreach ($rows as $c){
      $aux = new Autor($c{'idAutor'},$c{'nombreCompleto'});
      array_push($arrayAutor, $aux);
    }
    return $arrayAutor;        
  }
  
  
  function showAutorId($id) {
   $sql="SELECT * FROM autor WHERE idAutor=".$id;
    $row = self::$db->getRow($sql); 
	   $nombrecompleto=$row{'nombreCompleto'};
      $aux = new Autor($row{'idAutor'},$nombrecompleto);
    
    return $aux;        
  } 

}
?>

