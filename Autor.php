<?php

class Autor
{
    private $idAutor;   
	private $nombreCompleto;
	private $foto;
   
    
     function __construct($idAutor, $nombreCompleto,$foto) {
       self::setIdAutor($idAutor);
       self::setnombreCompleto($nombreCompleto);
	   self::setfoto($foto);
	 
     }
    
     function setIdAutor($idAutor){
       $this->idAutor = $idAutor;
     } 
     function getIdAutor(){
       return $this->idAutor;
     }
     function setnombreCompleto($nombreCompleto){
       $this->nombreCompleto = $nombreCompleto;
     } 
     function getnombreCompleto(){
       return $this->nombreCompleto;
     } 
	 
   function setFoto($foto){
       $this->foto = $foto;
     } 
     function getFoto(){
       return $this->foto;
     } 
}

?>