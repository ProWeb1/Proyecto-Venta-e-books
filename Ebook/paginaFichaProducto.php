<?php
include_once("EbookCollector.php");
include_once("Ebook.php");
//$id =0;

//if (!empty($_GET['id']))
 

 //$id=$_GET['id'];

//$id=$_GET['id'];

$id=4;

$EbookCollectorObj = new EbookCollector();

$ebook = $EbookCollectorObj->showEbook_byId($id);
 
    echo '<div class="col-xs-12 col-sm-3 text-center">
          <center> <img src= '.$ebook->getportada().' class="img-responsive img-border" alt="" /></center> 
          <h2>'.$ebook->gettitulo().'</h2>
          <div class="contact-info text-center">
            <div class="row">
              <div class="col-xs-12 col-sm-12">
                 <p><strong>Autor: </strong> '.$ebook->getfk_autor().' <br/> 
                    <strong>Precio: </strong> '.$ebook->getprecio().'<br/> 
                    <strong>Idioma: </strong> '.$ebook->getidioma().' <br/> 
                    <strong>N. de páginas: </strong> '.$ebook->getnumero_Paginas().' <br/>
                    <strong>Categoría: </strong> '.$ebook->getcategoria().' <br/> 
                    <strong>ISBN: </strong> '.$ebook->getisbn().'<br/> 
                    <strong>Editorial: </strong> '.$ebook->geteditorial().' <br/>                  
                    <strong>Traductor: </strong> '.$ebook->gettraductor().'  </p> 

                    </div>';


?>