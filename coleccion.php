<?php
class Coleccion
{
    private $fk_ebook;   
		private $fk_usuario;
    private $secuencia;
   
    
     function __construct($fk_ebook, $fk_usuario,$secuencia) {
       self::setfk_ebook($fk_ebook);
       self::setfk_usuario($fk_usuario);
       self::setsecuencia($secuencia);
     }
    
     function setfk_ebook($fk_ebook){
       $this->fk_ebook = $fk_ebook;
     } 
     function getfk_ebook(){
       return $this->fk_ebook;
     }
     function setfk_usuario($fk_usuario){
       $this->fk_usuario = $fk_usuario;
     } 
     function getfk_usuario(){
       return $this->fk_usuario;
     } 

     function setsecuencia($secuencia){
       $this->secuencia = $secuencia;
     } 
     function getsecuencia(){
       return $this->secuencia;
     } 
   
}
?>