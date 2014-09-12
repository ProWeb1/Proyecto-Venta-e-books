<?php
include_once('Usuario.php');
include_once('Collector.php');
/*{
  function showUsuarios() {
    $rows = self::$db->getRows("SELECT * FROM usuario");        
    $arrayUsuario= array();       '
    foreach ($rows as $c){
      $aux = new Usuario($c{'idUsuario'},$c{'nombre'},$c{'contrasena'});
      array_push($arrayUsuario, $aux);
    }
    return $arrayUsuario;        
  }
}*/
class UsuarioCollector extends Collector
{

  function showUsuarios() {
    $idUsuario=$_SESSION["idUsuario"];
    $rows = self::$db->getRows("SELECT * FROM usuario WHERE idUsuario LIKE '".$idUsuario."'");        
    $arrayUsuario= array();
    foreach ($rows as $c){
      $aux = new Usuario($c{'idUsuario'},$c{'nombreUsuario'},$c{'contrasena'},$c{'foto'},$c{'nombre'},$c{'apellido'},$c{'fechaNacimiento'},$c{'infoUsuario'},$c{'genero'},$c{'email'},$c{'pais'});
      array_push($arrayUsuario, $aux);
    }
    return $arrayUsuario;        
  }

  function showUsuario($id) {
    $row = self::$db->getRows("SELECT * FROM usuario where idUsuario= ? ", array("{$id}")); 
    $ObjUsuario = new Usuario($id,$row[0]{'nombreUsuario'},$row[0]{'contrasena'},$row[0]{'foto'},$row[0]{'nombre'},$row[0]{'apellido'},$row[0]{'fechaNacimiento'},$row[0]{'infoUsuario'},$row[0]{'genero'},$row[0]{'email'},$row[0]{'pais'});
    return $ObjUsuario;
  }

  function showUsuariobyUsername($usuario) {
    $row = self::$db->getRows("SELECT * FROM usuario where nombreUsuario= ? ", array("{$usuario}")); 
    $ObjUsuario = new Usuario($row[0]{'idUsuario'},$row[0]{'nombreUsuario'},$row[0]{'contrasena'},$row[0]{'foto'},$row[0]{'nombre'},$row[0]{'apellido'},$row[0]{'fechaNacimiento'},$row[0]{'infoUsuario'},$row[0]{'genero'},$row[0]{'email'},$row[0]{'pais'});
    return $ObjUsuario;
  }

  function createUsuario($nombreUsuario,$contrasena,$foto,$nombre,$apellido,$fechaNacimiento,$infoUsuario,$genero,$email,$pais) {    
    $insertrow = self::$db->insertRow("INSERT INTO ebbbooks.usuario (idUsuario, nombreUsuario, contrasena, foto, nombre, apellido, fechaNacimiento, infoUsuario, genero, email, pais) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)", array(null, "{$nombreUsuario}", "{$contrasena}", "{$foto}", "{$nombre}", "{$apellido}", "{$fechaNacimiento}", "{$infoUsuario}", "{$genero}", "{$email}", "{$pais}"));
  }  

  function readUsuarios() {
    $rows = self::$db->getRows("SELECT * FROM usuario");        
    $arrayUsuario= array();        
    foreach ($rows as $c){
      $aux = new Usuario($c{'idUsuario'},$c{'nombreUsuario'},$c{'contrasena'},$c{'foto'},$c{'nombre'},$c{'apellido'},$c{'fechaNacimiento'},$c{'infoUsuario'},$c{'genero'},$c{'email'},$c{'pais'});
      array_push($arrayUsuario, $aux);
    }
    return $arrayUsuario;        
  }
  
  function updateUsuario($id,$nombreUsuario,$contrasena,$foto,$nombre,$apellido,$fechaNacimiento,$infoUsuario,$genero,$email,$pais) {    
    $insertrow = self::$db->updateRow("UPDATE ebbbooks.usuario SET usuario.nombreUsuario = ?, usuario.contrasena = ?, usuario.foto = ?, usuario.nombre = ?, usuario.apellido = ?, usuario.fechaNacimiento = ?, usuario.infoUsuario = ?, usuario.genero = ?, usuario.email = ?, usuario.pais = ?  WHERE usuario.idUsuario = ? ", array( "{$nombreUsuario}", "{$contrasena}", "{$foto}", "{$nombre}", "{$apellido}", "{$fechaNacimiento}", "{$infoUsuario}", "{$genero}", "{$email}", "{$pais}", $id));
  }  

  function deleteUsuario($id) {    
    $deleterow = self::$db->deleteRow("DELETE FROM ebbbooks.usuario WHERE idUsuario= ?", array("{$id}"));
  }  



}
?>
