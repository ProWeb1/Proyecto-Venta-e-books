<?php
include_once("EbookCollector.php");
$id =0;


$EbookCollectorObj = new EbookCollector();

foreach ($EbookCollectorObj->showEbook() as $c){
  /*echo "<div>";
  echo "<br/> Id: " . $c->getidEbook() . "<br/>" .$c->gettitulo() . "<br/>" .$c->getautor() . "<br/>" .
  		$c->getprecio() . "<br/>" .$c->getidioma() . "<br/>" .$c->getnumero_Paginas() . "<br/>" .
  		$c->getcategoria() . "<br/>" .$c->getisbn() . "<br/>" .$c->geteditorial() . "<br/>" . $c->gettraductor();                                     
  		
  echo "</div>"; */
  
if ($c->getidEbook() <= 8) { 
  if ($c -> getresena()  == "") {

  echo '<div class="col-xs-6 col-sm-3">
                <h3>'.$c->getcategoria().'</h3>
                  <img src='.$c->getportada().' alt="Image 3" class="img-responsive img_bottom" />          
                  <Strong><p>'.$c->gettitulo().'</p></Strong>
                  <p>'.$c->getfk_autor().'</p>
                  <Strong><p>$'.$c->getprecio().'</p></Strong>
                  <p><a class="btn btn-primary" href="#">COMPRA YA</a></p>
		</div>';
    }
    else {

      echo '<div class="col-xs-6 col-sm-3">
                <h3>'.$c->getcategoria().'</h3>
                  <a href="fichaProducto.php?id='.$c->getidEbook().'"><img src='.$c->getportada().' alt="Image 3" class="img-responsive img_bottom" /></a>          
                  <Strong><p>'.$c->gettitulo().'</p></Strong>
                  <p>'.$c->getfk_autor().'</p>
                  <Strong><p>$'.$c->getprecio().'</p></Strong>
                  <p><a class="btn btn-primary" href="#">COMPRA YA</a></p>
    </div>';

    }
}

}

?>
