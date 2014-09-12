<?php

include_once('Autor.php');
include_once('Collector.php');

class AutorCollector extends Collector
{
  
  function showAutor($id) {
    $row = self::$db->getRows("SELECT * FROM autor where idAutor= ? ", array("{$id}")); 
    $ObjAutor = new Autor($row[0]{'idAutor'},$row[0]{'nombreCompleto'});
    return $ObjAutor;
  }

  function createAutor($nombre) {    
    $insertrow = self::$db->insertRow("INSERT INTO ebbbooks.autor (idAutor, nombreCompleto) VALUES (?, ?)", array(null, "{$nombre}"));
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
  
  function updateAutor($id,$nombreCompleto) {    
    $insertrow = self::$db->updateRow("UPDATE ebbbooks.autor SET autor.nombreCompleto = ?  WHERE autor.idAutor = ? ", array( "{$nombreCompleto}",$id));
  }  

  function deleteAutor($id) {    
    $deleterow = self::$db->deleteRow("DELETE FROM ebbbooks.autor WHERE idAutor= ?", array("{$id}"));
  }  



}
?>

