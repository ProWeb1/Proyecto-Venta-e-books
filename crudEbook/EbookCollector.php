<?php

include_once('Ebook.php');
include_once('Collector.php');
include_once("../crudAutor/AutorCollector.php");

  
  /*
  function showEbooks() {
    $rows = self::$db->getRows("SELECT * FROM ebook ");        
    $arrayEbook= array();        
    foreach ($rows as $c){
      $aux = new Ebook($c{'idEbook'},$c{'titulo'},$c{'fk_autor'},$c{'precio'},$c{'idioma'}, 
      	$c{'numero_Paginas'}, $c{'categoria'}, $c{'isbn'}, $c{'editorial'}, $c{'traductor'});
      array_push($arrayEbook, $aux);
    }
    return $arrayEbook;        
  }*/
  
  class EbookCollector extends Collector
{

  function showEbook_byId ($id) {
   
    $AutorCollectorObj = new AutorCollector();

      $row = self::$db->getRow("SELECT * FROM ebook WHERE idEbook LIKE '". $id."'");   

      $autor=$AutorCollectorObj->showAutorId($id);   

       $aux = new Ebook($row{'idEbook'},$row{'titulo'}, $autor->getnombreCompleto() ,$row{'precio'},$row{'idioma'}, 
        $row{'numero_Paginas'}, $row{'categoria'}, $row{'isbn'}, $row{'editorial'}, $row{'traductor'}, $row{'portada'}, $row{'resena'}, $row{'enlace'} );
    return $aux;  

   }          

  function showEbook() {
    $AutorCollectorObj = new AutorCollector();
  
    $rows = self::$db->getRows("SELECT * FROM ebook");        
    $arrayEbook= array();        
    foreach ($rows as $c){

      $autor=$AutorCollectorObj->showAutorId($c{'fk_autor'});
  
      $aux = new Ebook($c{'idEbook'},$c{'titulo'}, $autor->getnombreCompleto() ,$c{'precio'},$c{'idioma'}, 
        $c{'numero_Paginas'}, $c{'categoria'}, $c{'isbn'}, $c{'editorial'}, $c{'traductor'}, $c{'portada'}, $c{'resena'}, $c{'enlace'} );
      array_push($arrayEbook, $aux);
    }
    return $arrayEbook;        
  }

  function showEbooks($id) {
    $row = self::$db->getRows("SELECT * FROM ebook where idEbook= ? ", array("{$id}")); 
    
    $ObjEbook = new Ebook($row[0]{'idEbook'},$row[0]{'titulo'}, $row[0]{'fk_autor'},$row[0]{'precio'}, $row[0]{'idioma'},$row[0]{'numero_Paginas'}, $row[0]{'categoria'},$row[0]{'isbn'}, $row[0]{'editorial'},$row[0]{'traductor'},
    $row[0]{'portada'}, $row[0]{'resena'}, $row[0]{'enlace'});
    return $ObjEbook;
  }

function createEbook($titulo, $fk_autor, $precio, $idioma, $numero_Paginas, $categoria, $isbn, $editorial, $traductor, $portada, $resena, $enlace) {    
    
    $insertrow = self::$db->insertRow("INSERT INTO ebbbooks.ebook (idEbook, titulo, fk_autor, precio, idioma, numero_Paginas, categoria, isbn, editorial, traductor, portada, resena, enlace) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)", array(null, "{$titulo}", "{$fk_autor}", "{$precio}", "{$idioma}", "{$numero_Paginas}", "{$categoria}", "{$isbn}", "{$editorial}", "{$traductor}", "{$portada}", "{$resena}", "{$enlace}",));
  }  

  function readEbooks() {
    $rows = self::$db->getRows("SELECT * FROM ebook ");        
    $arrayEbook= array();        
    foreach ($rows as $c){
      $aux = new Ebook($c{'idEbook'}, $c{'titulo'}, $c{'fk_autor'}, $c{'precio'}, $c{'idioma'}, $c{'numero_Paginas'}, $c{'categoria'}, $c{'isbn'}, $c{'editorial'}, $c{'traductor'}, $c{'portada'}, $c{'resena'}, $c{'enlace'});
      array_push($arrayEbook, $aux);
    }
    return $arrayEbook;        
  }
  
  function updateEbook($id, $titulo, $fk_autor, $precio, $idioma, $numero_Paginas, $categoria, $isbn, $editorial, $traductor, $portada, $resena, $enlace) {    
  
    $insertrow = self::$db->updateRow("UPDATE ebbbooks.ebook SET ebook.titulo = ?, ebook.fk_autor = ?, ebook.precio = ?, ebook.idioma = ?, ebook.numero_Paginas = ?, ebook.categoria = ?, ebook.isbn = ?, ebook.editorial = ?, ebook.traductor = ?, ebook.portada = ?, ebook.resena = ?, ebook.enlace = ? WHERE ebook.idEbook = ? ", array( "{$titulo}", "{$fk_autor}", "{$precio}", "{$idioma}", "{$numero_Paginas}", "{$categoria}", "{$isbn}", "{$editorial}", "{$traductor}", "{$portada}", "{$resena}", "{$enlace}", $id));
  }  

  function deleteEbook($id) {    
    $deleterow = self::$db->deleteRow("DELETE FROM ebbbooks.ebook WHERE idEbook= ?", array("{$id}"));
  }  


}
?>