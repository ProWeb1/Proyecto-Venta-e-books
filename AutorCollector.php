<?php

include_once('Autor.php');
include_once('Collector.php');

class AutorCollector extends Collector
{
  
  function showAutor1() {
    $rows = self::$db->getRows("SELECT * FROM autor ");        
    $arrayAutor= array();        
    foreach ($rows as $c){
      $aux = new Autor($c{'idAutor'},$c{'nombreCompleto'},$c {'foto'});
      array_push($arrayAutor, $aux);
    }
    return $arrayAutor;        
  }
  function showAutor($id) {
    $row = self::$db->getRows("SELECT * FROM autor where idAutor= ? ", array("{$id}")); 
    $ObjAutor = new Autor($row[0]{'idAutor'},$row[0]{'nombreCompleto'},$row[0]{'foto'});
    return $ObjAutor;
  }

  function createAutor($nombre,$foto) {    
    $insertrow = self::$db->insertRow("INSERT INTO ebbbooks.autor (idAutor, nombreCompleto, foto) VALUES (?, ?, ?)", array(null, "{$nombre}", "{$foto}"));
  }  

  function readAutor() {
    $rows = self::$db->getRows("SELECT * FROM autor ");        
    $arrayAutor= array();        
    foreach ($rows as $c){
      $aux = new Autor($c{'idAutor'},$c{'nombreCompleto'},$c{'foto'});
      array_push($arrayAutor, $aux);
    }
    return $arrayAutor;        
  }
  
  function updateAutor($id,$nombreCompleto,$foto) {    
    $insertrow = self::$db->updateRow("UPDATE ebbbooks.autor SET autor.nombreCompleto = ?, autor.foto = ?  WHERE autor.idAutor = ? ", array( "{$nombreCompleto}","{$foto}",$id));
  }  

  function deleteAutor($id) {    
    $deleterow = self::$db->deleteRow("DELETE FROM ebbbooks.autor WHERE idAutor= ?", array("{$id}"));
  }  }
?>