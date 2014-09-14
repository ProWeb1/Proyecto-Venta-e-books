<?php

include_once('coleccion.php');
include_once('Collector.php');
//include_once ('login_logout.php');
//$idUsuario= $_SESSION ["id"];

class ColeccionCollector extends Collector
{
  function guardarColeccion() {
  	$idUsuario=$_SESSION["idUsuario"];
    $rows = self::$db->getRows("SELECT * FROM coleccion WHERE fk_usuario LIKE '".$idUsuario."'");       
    $arrayColeccion= array();        
    foreach ($rows as $c){
      $aux = new Coleccion($c{'fk_ebook'},$c{'fk_usuario'} ,$c{'secuencia'});
	  array_push($arrayColeccion, $aux);
    }
    return $arrayColeccion;     
  }

  function contarRows(){
    $idUsuario=$_SESSION["idUsuario"];
    $rows = self::$db->getRows("SELECT * FROM coleccion WHERE fk_usuario LIKE '".$idUsuario."'");       
    $arrayColeccion= array();        
    foreach ($rows as $c){
      $aux = new Coleccion($c{'fk_ebook'},$c{'fk_usuario'} ,$c{'secuencia'});
    array_push($arrayColeccion, $aux);
    }
    return count($arrayColeccion);
  }

  function createColeccion($fk_usuario, $fk_ebook, $secuencia){
    $insertRow = self::$db->insertRow("INSERT INTO ebbbooks.coleccion (fk_usuario, fk_ebook, secuencia) VALUES (?, ?, ?)", array($fk_usuario, $fk_ebook, $secuencia));
  }
}
?>