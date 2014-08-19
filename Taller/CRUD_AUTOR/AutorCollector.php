<?php

include_once('Autor.php');
include_once('Collector.php');

class AutorCollector extends Collector
{
  

  function showAutor() {
    $rows = self::$db->getRows("SELECT * FROM autor where idAutor= ? ", array("{$id}"));  
      $ObjAutor = new Autor($row[0]{'idAutor'},$row[0]{'nombreCompleto'});
    $arrayAutor= array();        
    foreach ($rows as $c){
      $aux = new Autor($c{'idAutor'},$c{'nombreCompleto'});
      array_push($arrayAutor, $aux);
    }
    return $arrayAutor;        
  }


 function createAutor($nombreCompleto) {    
    $insertrow = self::$db->insertRow("INSERT INTO ebbbooks.autor (idAutor, nombreCompleto) VALUES (?, ?)", array(null, "{$nombreCompleto}"));
  }  

  function readAutor() {
    $rows = self::$db->getRows("SELECT * FROM autor ");        
    $arrayAutor= array();        
    foreach ($rows as $c){
      $aux = new Autor($c{'idAutor'},$c{'nombreCompleto'});
      array_push($arrayAutor, $aux);
    }
    return $arrayAutor;        
  }
  
  function updateAutor($idAutor,$nombreCompleto) {    
    $insertrow = self::$db->updateRow("UPDATE ebbbooks.autor SET autor.nombreCompleto = ?  WHERE demo.idAutor = ? ", array( "{$nombreCompleto}",$idAutor));
  }  

  function deleteAutor($idAutor) {    
    $deleterow = self::$db->deleteRow("DELETE FROM ebbboks.autor WHERE idAutor= ?", array("{$idAutor}"));
  }  

}
?>

