<?php
include_once('Usuario.php');
include_once('Collector.php');
/*{
  function showUsuarios() {
    $rows = self::$db->getRows("SELECT * FROM usuario");        
    $arrayUsuario= array();        
    foreach ($rows as $c){
      $aux = new Usuario($c{'idUsuario'},$c{'nombre'},$c{'contrasena'});
      array_push($arrayUsuario, $aux);
    }
    return $arrayUsuario;        
  }
}*/
class UsuarioCollector extends Collector
{
  
  function showUsuario($id) {
    $row = self::$db->getRows("SELECT * FROM usuario where idUsuario= ? ", array("{$id}")); 
    $ObjUsuario = new Usuario($row[0]{'idUsuario'},$row[0]{'nombre'},$row[0]{'contrasena'});
    return $ObjUsuario;
  }

  function createUsuario($nombre,$contrasena) {    
    $insertrow = self::$db->insertRow("INSERT INTO ebbbooks.usuario (idUsuario, nombre, contrasena) VALUES (?, ?, ?)", array(null, "{$nombre}", "{$contrasena}"));
  }  

  function readUsuarios() {
    $rows = self::$db->getRows("SELECT * FROM usuario ");        
    $arrayUsuario= array();        
    foreach ($rows as $c){
      $aux = new Usuario($c{'idUsuario'},$c{'nombre'},$c{'contrasena'});
      array_push($arrayUsuario, $aux);
    }
    return $arrayUsuario;        
  }
  
  function updateUsuario($id,$nombre,$contrasena) {    
    $insertrow = self::$db->updateRow("UPDATE ebbbooks.usuario SET usuario.nombre = ?, usuario.contrasena = ?  WHERE usuario.idUsuario = ? ", array( "{$nombre}", "{$contrasena}", $id));
  }  

  function deleteUsuario($id) {    
    $deleterow = self::$db->deleteRow("DELETE FROM ebbbooks.usuario WHERE idUsuario= ?", array("{$id}"));
  }  



}
?>
