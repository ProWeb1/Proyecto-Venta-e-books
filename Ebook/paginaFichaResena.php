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

if ($c->getidEbook() == 4) {
    echo '<div class="col-xs-12 col-sm-9">
          <div class="row">
            <div class="col-xs-12 col-sm-12">

              <h2>Reseña</h2>

                  <p align="justify">'.$c->getresena().'</p>
                   <br/>
                    <br/>
                  <center><p><a class="btn btn-primary" href="carritoCompras.php?accion=add&id='.$c->getidEbook().'">COMPRA YA </a></p></center>
        </div>';
}



}


?>