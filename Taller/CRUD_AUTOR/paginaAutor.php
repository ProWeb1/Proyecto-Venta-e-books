<?php
include_once("AutorCollector.php");

$id =1;

$autorCollectorObj = new AutorCollector();

foreach ($autorCollectorObj->showAutor() as $c){
  echo "<div>";
  echo "</br>Identificador: " . $c->getIdAutor() . "</br>Nombre: " . $c->getnombreCompleto();                                     
  echo "</div>"; 
}
?>
