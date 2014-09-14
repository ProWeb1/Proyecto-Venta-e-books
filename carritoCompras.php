<?php  
include_once("CarritoCollector.php");
include_once("ANALI EBOOK/EbookCollector.php");
include_once("AutorCollector.php");
session_start();
$usuario = $_SESSION["username"];
$idUsuario = $_SESSION['idUsuario'];
$CarritoCollectorObj = new CarritoCollector();
$EbookCollectorObj = new EbookCollector();
$AutorCollectorObj = new AutorCollector();
$total = 0;
switch($_GET['accion']){
  case 'del':{
    //echo 'se borrara el registro '.$_GET['id'];
    $CarritoCollectorObj->deleteCarrito($idUsuario, $_GET['id']);
  }break;
}
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <link href='images/logo/ebbbooks-logo.ico' rel='shortcut icon' type='image/x-icon'>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras - eBBBOOks</title>
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">    
    <!-- CSS -->
    <link href="css/stilo.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/carrito.css"/>		
  </head>
  <body>
    <div id="CajaGrande">
      <nav class="navbar navbar-inverse" role="navigation">
          <div class="container">
          <!-- Display Movil -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php"> <img src= "images/logo/ebbbooks-logo.png"></a>
            </div>
          <?php
          	if($_SESSION['actualmente_ingresado'] == 1){
          ?>
          <!-- Navegación-->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">  
                <li><a id ="salida" href="" onclick="location.href='login_logout.php'"><i class="fa fa-user"></i><?php echo " ".$usuario; ?></a></li>
                <li><span>|</span></li>
                <li><a id "salida" href="" onclick="location.href='carritoCompras.php'"><i class="fa fa-shopping-cart"></i></a></li>
                <li><span>|</span></li>
                <li><a href="" onclick="location.href='#'"><i class="fa fa fa-search"></i></a></li>
              </ul>
            </div>
            <?php } else {?>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <li><a id ="salida" href="" onclick="location.href='login_logout.php'"><i class="fa fa-user"></i></a></li>
                <li><span>|</span></li>
                <li><a id "salida" href="" onclick="location.href='carritoCompras.php'"><i class="fa fa-shopping-cart"></i></a></li>
                <li><span>|</span></li>
                <li><a href="" onclick="location.href='#'"><i class="fa fa fa-search"></i></a></li>
              </ul>
            </div><!-- /.navbar-baja -->
            <?php } ?>
          </div><!-- /.contenedor fluido-->
        </nav><!-- /Imagen grande Final -->
        <!-- Introducción -->
        <div id="aboutMore" class="pagina">
          <div class="container">
  		      <div class="row">
              <div class="col-md-10  col-md-offset-1">
  		          <div class="constr titulo-pag-blanca">
  				        <h2 class="text-center">Carrito de Compras</h2>	
  				        <span class="line-title"></span>
                </div>
  		        </div><!-- Final Columna -->
  		      </div><!-- Final Fila-->
  		    </div>
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <!-- Carrito de Compras -->
              <div class="shopping-cart">
                <div class="column-labels">
                  <label class="product-image">Imagen</label>
                  <label class="product-details">Producto</label>
                  <label class="product-price">Precio</label>
                  <label class="product-removal">Remover</label>
                  <label class="product-line-price">Total</label>
                </div>
                <!--Productos-->
                <?php
                foreach ($CarritoCollectorObj->showCarritosPorUsuario($idUsuario) as $c) {
                  $ebook = $EbookCollectorObj->showEbooks($c->getEbook());
                  $autor = $AutorCollectorObj->showAutor($ebook->getfk_autor());
                  echo '<div class="product">';
                  echo '<div class="product-image">';
                  echo '<img src="'.$ebook->getportada().'">';
                  echo '</div>';
                  echo '<div class="product-details">';
                  echo '<div class="product-title">'.$ebook->gettitulo().'</div>';
                  echo '<p class="product-description">';
                  echo '<strong>Autor:</strong> '.$autor->getnombreCompleto().' </br>';
                  echo '<strong>ISBN:</strong> '.$ebook->getisbn().' </br>';
                  echo '<strong>Formato:</strong> PDF </br>';
                  echo '<strong>Idioma:</strong> '.$ebook->getidioma();
                  echo '</p>';
                  echo '</div>';
                  echo '<div class="product-price">'.$ebook->getprecio().'</div>';
                  echo '<div class="product-removal">';
                  echo '<a href="carritoCompras.php?accion=del&id='.$ebook->getidEbook().'" class="remove-product">';
                  echo 'Remover';
                  echo '</a>';
                  echo '</div>';
                  echo '<div class="product-line-price">'.$ebook->getprecio().'</div>';
                  echo '</div>';
                  $total+=$ebook->getprecio();
                }
                ?>
               <!--/Productos-->
              <div class="totals">
                <div class="totals-item">
                  <label>Subtotal</label>
                  <div class="totals-value" id="cart-subtotal"><?php echo $total;?></div>
                </div>
                <div class="totals-item">
                  <label>Impuesto (0%)</label>
                  <div class="totals-value" id="cart-tax">0.00</div>
                </div>
                <div class="totals-item totals-item-total">
                  <label>Total a Pagar</label>
                  <div class="totals-value" id="cart-total"><?php echo $total;?></div>
                </div>
              </div>
              <?php
                echo '<a href="checkout.php?id='.$idUsuario.'" class="checkout">Confirmar</a>';
              ?>
            </div><!-- Final Carrito de Compras--> 
            <p><a class="btn btn-primary" href="#">Seguir Comprando</a></p>
          </div><!-- Final Columna -->		  
        </div><!-- Final Fila -->
      </div>
      <!-- Footer -->
      <footer class="bg-primary">
        <div class="container">
          <div class="row">
  		    	<div class="col-md-4 ">
  				    <div class="constr cp-right">
  					    <p>&copy; 2014 <a href="http://ebbbooks.com">eBBBOOKS</a>. All Rights Reserved. </p>
  				    </div><!-- end contr -->
  			    </div><!-- Final de Columna -->
  	   		  <div class="col-md-4 text-center">
  		    	</div>
  		      <div class="col-md-4 text-right">
  			      <div class="contr">
  			        <ul class="list-inline">
            			<li><a href="https://www.facebook.com/" class="socIcon" data-toggle="tooltip" title="Facebook" data-original-title="Facebook" data-gal='tooltip' data-placement="top"><i class="fa fa-facebook fa-2x"></i></a></li>
            			<li><a href="https://twitter.com/" class="socIcon" data-toggle="tooltip" title="Twitter" data-original-title="Twitter" data-gal='tooltip' data-placement="top"><i class="fa fa-twitter fa-2x"></i></a></li>
            			<li><a href="http://www.youtube.com/" class="socIcon" data-toggle="tooltip" title="Youtube" data-original-title="Youtube" data-gal='tooltip' data-placement="top"><i class="fa fa-youtube fa-2x"></i></a></li>
           			</ul>
         			</div>
       			</div>
          </div>
        </div>
      </footer><!-- /Footer -->
      <!-- JavaScript -->
      <!--JavaScript Carrito de compras-->
      <script src="js/jquerycarrito.js"></script>
      <script src="js/localstorage.js"></script>
      <script src="js/remember_scroll.js"></script>
      <script src="js/smallscript.js"/>
      <script>RememberScroll.init();</script>
      <script src="js/calculo.js"></script>
      <!--fin JavaScript Carrito de compras-->
      <script src="js/jquery-1.10.2.js"></script>
      <script src="js/bootstrap.js"></script>
      <script src="js/modernizr.js"></script>
      <script src="js/jquery.sticky.js" ></script>
      <script src="js/jquery.quicksand.js" ></script>
  	  <script src="js/jquery.nav.js"></script>
      <script src="js/jquery.scrollTo.js" ></script>
      <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
      <script src="js/script.js"></script>
      <!-- Javascript para menu y srolling -->
    </div>
  </body>
</html>