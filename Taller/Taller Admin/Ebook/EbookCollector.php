<?php

include_once('Ebook.php');
include_once('Collector.php');
class EbookCollector extends Collector
{
  
  /*
  function showEbooks() {
    $rows = self::$db->getRows("SELECT * FROM ebook ");        
    $arrayEbook= array();        
    foreach ($rows as $c){
      $aux = new Ebook($c{'idEbook'},$c{'titulo'},$c{'autor'},$c{'precio'},$c{'idioma'}, 
      	$c{'numero_Paginas'}, $c{'categoria'}, $c{'isbn'}, $c{'editorial'}, $c{'traductor'});
      array_push($arrayEbook, $aux);
    }
    return $arrayEbook;        
  }*/
  
  
  function showEbooks($id) {
    $row = self::$db->getRows("SELECT * FROM ebook where idEbook= ? ", array("{$id}")); 
    $ObjEbook = new Ebook($row[0]{'idEbook'},$row[0]{'titulo'}, $row[0]{'autor'},$row[0]{'precio'}, $row[0]{'idioma'},$row[0]{'numero_Pagina'}, $row[0]{'categoria'},$row[0]{'isbn'}, $row[0]{'editorial'},$row[0]{'traductor'});
    return $ObjEbook;
  }

function createEbook($titulo, $autor, $precio) {    
    $insertrow = self::$db->insertRow("INSERT INTO prueba.ebook (idEbook, titulo, autor, precio) VALUES (?, ?)", array(null, "{$titulo}", "{$autor}", "{$precio}"));
  }  

  function readEbooks() {
    $rows = self::$db->getRows("SELECT * FROM ebook ");        
    $arrayEbook= array();        
    foreach ($rows as $c){
      $aux = new Ebook($c{'idEbook'},$c{'titulo'}, $c{'autor'}, $c{'precio'});
      array_push($arrayEbook, $aux);
    }
    return $arrayEbook;        
  }
  
  function updateEbook($id, $titulo, $autor, $precio) {    
    $insertrow = self::$db->updateRow("UPDATE prueba.ebook SET ebook.titulo = ?, ebook.autor = ?, ebook.precio = ? WHERE ebook.idEbbok = ? ", array( "{$titulo}", "{$autor}", "{$precio}",$id));
  }  

  function deleteEbook($id) {    
    $deleterow = self::$db->deleteRow("DELETE FROM prueba.ebook WHERE idEbook= ?", array("{$id}"));
  }  





}
?>
