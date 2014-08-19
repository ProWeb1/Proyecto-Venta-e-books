<?php
class Usuario
{
    private $idUsuario;
    private $nombre;
    private $contrasena;
    function __construct($idUsuario, $nombre, $contrasena) {
       self::setIdUsuario($idUsuario);
       self::setNombre($nombre);
       self::setContrasena($contrasena);
     }
     function setIdUsuario($idUsuario){
       $this->idUsuario = $idUsuario;
     } 
     function getIdUsuario(){
       return $this->idUsuario;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
		 } 
     function setContrasena($contrasena){
       $this->contrasena = $contrasena;
     } 
     function getContrasena(){
       return $this->contrasena;
     } 
}?>
