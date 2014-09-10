<?php
class Usuario
{
    private $idUsuario;
    private $nombreUsuario;
    private $contrasena;
    private $foto;
    private $nombre;
    private $apellido;
    private $fechaNacimiento;
    private $infoUsuario;
    private $genero;
    private $email;
    private $pais;

    function __construct($idUsuario, $nombreUsuario, $contrasena, $foto, $nombre, $apellido, $fechaNacimiento, $infoUsuario, $genero, $email, $pais) {
       self::setIdUsuario($idUsuario);
       self::setNombreUsuario($nombreUsuario);
       self::setContrasena($contrasena);
       self::setFoto($foto);
       self::setNombre($nombre);
       self::setApellido($apellido);
       self::setFechaNacimiento($fechaNacimiento);
       self::setInfoUsuario($infoUsuario);
       self::setGenero($genero);
       self::setEmail($email);
       self::setPais($pais);
     }
     function setIdUsuario($idUsuario){
       $this->idUsuario = $idUsuario;
     } 
     function getIdUsuario(){
       return $this->idUsuario;
     } 
     function setNombreUsuario($nombreUsuario){
       $this->nombreUsuario = $nombreUsuario;
     } 
     function getNombreUsuario(){
       return $this->nombreUsuario;
     } 
     function setContrasena($contrasena){
       $this->contrasena = $contrasena;
     } 
     function getContrasena(){
       return $this->contrasena;
     } 
     function setFoto($foto){
       $this->foto = $foto;
     } 
     function getFoto(){
       return $this->foto;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     } 
     function setApellido($apellido){
       $this->apellido = $apellido;
     } 
     function getApellido(){
       return $this->apellido;
     } 
     function setfechaNacimiento($fechaNacimiento){
       $this->fechaNacimiento = $fechaNacimiento;
     } 
     function getFechaNacimiento(){
       return $this->fechaNacimiento;
     } 
     function setInfoUsuario($infoUsuario){
       $this->infoUsuario = $infoUsuario;
     } 
     function getInfoUsuario(){
       return $this->infoUsuario;
     } 
     function setGenero($genero){
       $this->genero = $genero;
     } 
     function getGenero(){
       return $this->genero;
     } 
     function setEmail($email){
       $this->email = $email;
     } 
     function getEmail(){
       return $this->email;
     } 
     function setPais($pais){
       $this->pais = $pais;
     } 
     function getPais(){
       return $this->pais;
     } 
}?>
