<?php

class Autor
{
    private $idAutor;   
		private $nombreCompleto;
   
    
     function __construct($idAutor, $nombreCompleto) {
       self::setIdAutor($idAutor);
       self::setnombreCompleto($nombreCompleto);
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
   
}

?> 
