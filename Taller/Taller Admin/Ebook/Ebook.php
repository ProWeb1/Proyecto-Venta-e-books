<?php

class Ebook
{
    private $idEbook;
    private $titulo;
    private $autor;
    private $precio;
    private $idioma;
    private $numero_Paginas;
    private $categoria;
    private $isbn;
    private $editorial;
    private $traductor;
    

     function __construct($idEbook, $titulo, $autor, $precio, $idioma, $numero_Paginas, $categoria, $isbn, $editorial, $traductor) {
       self::setidEbook($idEbook);
       self::settitulo($titulo);
       self::setautor($autor);
       self::setprecio($precio);
       self::setidioma($idioma);
       self::setnumero_Paginas($numero_Paginas);
       self::setcategoria($categoria);
       self::setisbn($isbn);
       self::seteditorial($editorial);
       self::settraductor($traductor);
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

     function setautor($autor){
       $this->autor = $autor;
     } 
     function getautor(){
       return $this->autor;
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
}

?> 
