<?php

class Ebook
{
    private $idEbook;
    private $titulo;
    private $fk_autor;
    private $precio;
    private $idioma;
    private $numero_Paginas;
    private $categoria;
    private $isbn;
    private $editorial;
    private $traductor;
    private $portada;
    private $resena;
    private $enlace;
    

     function __construct($idEbook, $titulo, $fk_autor, $precio, $idioma, $numero_Paginas, $categoria, $isbn, $editorial, $traductor, $portada, $resena, $enlace) {
       self::setidEbook($idEbook);
       self::settitulo($titulo);
       self::setfk_autor($fk_autor);
       self::setprecio($precio);
       self::setidioma($idioma);
       self::setnumero_Paginas($numero_Paginas);
       self::setcategoria($categoria);
       self::setisbn($isbn);
       self::seteditorial($editorial);
       self::settraductor($traductor);
       self::setportada($portada);
       self::setresena($resena);
       self::setenlace($enlace);
     }
    
     function setidEbook($idEbook){
       $this->idEbook = $idEbook;
     } 
     function getidEbook(){
       return $this->idEbook;
     } 
     
     function settitulo($titulo){
       $this->titulo = $titulo;
     } 
     function gettitulo(){
       return $this->titulo;
     }

     function setfk_autor($fk_autor){
       $this->fk_autor = $fk_autor;
     } 
     function getfk_autor(){
       return $this->fk_autor;
     }

     function setprecio($precio){
       $this->precio = $precio;
     } 
     function getprecio(){
       return $this->precio;
     }

     function setidioma($idioma){
       $this->idioma = $idioma;
     } 
     function getidioma(){
       return $this->idioma;
     }

     function setnumero_Paginas($numero_Paginas){
       $this->numero_Paginas = $numero_Paginas;
     } 
     function getnumero_Paginas(){
       return $this->numero_Paginas;
     }

     function setcategoria($categoria){
       $this->categoria = $categoria;
     } 
     function getcategoria(){
       return $this->categoria;
     }

     function setisbn($isbn){
       $this->isbn = $isbn;
     } 
     function getisbn(){
       return $this->isbn;
     }

     function seteditorial($editorial){
       $this->editorial = $editorial;
     } 
     function geteditorial(){
       return $this->editorial;
     }

     function settraductor($traductor){
       $this->traductor = $traductor;
     } 
     function gettraductor(){
       return $this->traductor;
     }
     
     function setportada($portada){
       $this->portada = $portada;
     } 
     function getportada(){
       return $this->portada;
     }
     
     function setresena($resena){
       $this->resena = $resena;
     } 
     function getresena(){
       return $this->resena;
     } 
     
     function setenlace($enlace){
       $this->enlace = $enlace;
     } 
     function getenlace(){
       return $this->enlace;
     }    
}

?>