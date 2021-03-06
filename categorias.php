<?php
session_start();
?>
<html>
<head>
	<link href='images/logo/ebbbooks-logo.ico' rel='shortcut icon' type='image/x-icon'>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>eBBBOOks</title>

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    
    <!-- CSS -->
	
    <link href="css/stilo.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <link href="css/categorias-estilo.css"  rel='stylesheet' type='text/css'>

        <link href="css/topVentas-estilo.css" rel="stylesheet">
        <link href="css/novedades-estilo.css" rel="stylesheet">

	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	
	<script>
		$(document).ready(function() {
			//alert("isa");
			$.ajax({
			url: "Ebook/paginaCategorias.php",
			data: {
			zipcode: 97201
			},
			success: function( data ) {
			$( "#contenedor_cat" ).html( "<div>" + data + "</div>" );
			}
			});
		});
	</script>
</head>
  <body>
  <div id="CajaGrande">

     <div class="navbar-nav">
      <a href="#aboutMore" class="btn btn-link btnAbout"><i class="fa fa-angle-double-down"></i></a>
     </div>
    </div>
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
          <a class="navbar-brand" href="index.php" > <img src= "images/logo/ebbbooks-logo.png"></a>
        </div>
        
        <!-- Navegación-->
        <?php
              if($_SESSION['actualmente_ingresado'] == 1){
          ?>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li><a id ="salida" href="" onclick="location.href='login_logout.php'"><i class="fa fa-user"></i><?php echo " ".$_SESSION["username"]; ?></a></li>
              <li><span>|</span></li>
              <li><a href="" onclick="location.href='login_logout.php'"><i class="fa fa-user"></i></a></li>
              <li><span>|</span></li>
              <li><a href="" onclick="location.href='carritoCompras.php'"><i class="fa fa-shopping-cart"></i></a></li>
              <li><span>|</span></li>
              <li><a href="" onclick="location.href='pdf/mapaSitio.pdf'"><i class="fa fa fa-sitemap"></i></a></li>
            </ul>
          </div>
        <?php } else {?>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="" onclick="location.href='login_logout.php'"><i class="fa fa-user"></i></a></li>
              <li><span>|</span></li>
              <li><a href="" onclick="location.href='carritoCompras.php'"><i class="fa fa-shopping-cart"></i></a></li>
              <li><span>|</span></li>
              <li><a href="" onclick="location.href='pdf/mapaSitio.pdf'"><i class="fa fa fa-sitemap"></i></a></li>
            </ul>
          </div><!-- /.navbar-baja -->
        <?php } ?>
        </div><!-- /.contenedor fluido-->
    </nav>
    <!-- /Imagen grande Final -->
     <!-- Introducción -->
       <div id="aboutMore" class="pagina">
         <div class="container">
		      <div class="row">
          <div class="col-md-10  col-md-offset-1">
		    <div class="constr titulo-pag-blanca">
				<h2 class="text-center">Categorías</h2>	
				<span class="line-title"></span>
			</div>
		   </div><!-- Final Columna -->
		  </div><!-- Final Fila-->
		</div>
        <div class="row">
           <div class="col-md-10 col-md-offset-1">
			

            <div id="Categorias" >
            <div class="container">
              <div class="clearfix"></div>

                    <ul class="catalogo-galeria" >
                        <li class="col-lg-2 col-md-2 col-sm-2" >
                                <div class="catalogo-galeria-imagen">
                                    <img src="images/categorias/imagen1.jpg" class="img-responsive" alt="imagen1"/>
                                    <a href="fantasia.php">
                                    <div class="catalogo-overlay">
                                        <h5>Witch Born</h5>
                                        <hr/>
                                        <h4>Fantasía</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                       

                        <li class="col-lg-2 col-md-2 col-sm-2" >
                                <div class="catalogo-galeria-imagen">
                                    <img src="images/categorias/imagen2.jpg" class="img-responsive" alt="imagen2"/>
                                    <div class="catalogo-overlay">
                                        <h5>Unravel Me</h5>
                                        <hr/>
                                        <h4>Juvenil</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        
                        <li class="col-lg-2 col-md-2 col-sm-2" >
                                <div class="catalogo-galeria-imagen">
                                    <img src="images/categorias/imagen3.jpg" class="img-responsive" alt="imagen3"/>
                                    <a href="ficcion.php">
                                    <div class="catalogo-overlay">
                                        <h5>The Beating of his Wings</h5>
                                        <hr/>
                                        <h4>Ficción</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        
                        <li class="col-lg-2 col-md-2 col-sm-2 " >
                                <div class="catalogo-galeria-imagen">
                                    <img src="images/categorias/imagen4.jpg" class="img-responsive" alt="imagen4"/>
                                    <div class="catalogo-overlay">
                                        <h5>Defy</h5>
                                        <hr/>
                                        <h4>Aventura</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        
                        <li class="col-lg-2 col-md-2 col-sm-2" >
                                <div class="catalogo-galeria-imagen">
                                    <img src="images/categorias/imagen5.jpg" class="img-responsive" alt="imagen5"/>
                                    <div class="catalogo-overlay">
                                        <h5>Mastal Danger</h5>
                                        <hr/>
                                        <h4>Terror</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        
                        <li class="col-lg-2 col-md-2 col-sm-2 " >
                                <div class="catalogo-galeria-imagen">
                                    <img src="images/categorias/imagen6.jpg" class="img-responsive" alt="imagen6"/>
                                    <div class="catalogo-overlay">
                                        <h5>The Dark Unwinding</h5>
                                        <hr/>
                                        <h4>Histórico</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        
                        <li class="col-lg-2 col-md-2 col-sm-2" >
                                <div class="catalogo-galeria-imagen">
                                    <img src="images/categorias/imagen7.jpg" class="img-responsive" alt="imagen7"/>
                                    <div class="catalogo-overlay">
                                        <h5>The Butterfly Clues</h5>
                                        <hr/>
                                        <h4>Suspenso</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        
                        <li class="col-lg-2 col-md-2 col-sm-2 gallery gallery-creative" >
                                <div class="catalogo-galeria-imagen">
                                    <img src="images/categorias/imagen8.jpg" class="img-responsive" alt="imagen8"/>
                                    <div class="catalogo-overlay">
                                        <h5>Archon</h5>
                                        <hr/>
                                        <h4>Paranormal</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        
                        <li class="col-lg-2 col-md-2 col-sm-2" >
                                <div class="catalogo-galeria-imagen">
                                    <img src="images/categorias/imagen9.jpg" class="img-responsive" alt="imagen9" />
                                    <div class="catalogo-overlay">
                                        <h5>Frozen</h5>
                                        <hr/>
                                        <h4>Romance</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        
                        <li class="col-lg-2 col-md-2 col-sm-2" >
                                <div class="catalogo-galeria-imagen">
                                    <img src="images/categorias/imagen10.jpg" class="img-responsive" alt="imagen10"/>
                                    <div class="catalogo-overlay">
                                        <h5>Red Run</h5>
                                        <hr/>
                                        <h4>Novela Negra</h4>
                                    </div>
                                </div>
                            </a>
                        </li>

                    </ul>
              
              </div>
        </div> 


  <div id="container" class="container">
		<div id="contenedor_cat"> </div>
</div>
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
			<ul class="list-inline">
			<li><a href="https://www.facebook.com/" class="socIcon" data-toggle="tooltip" title="Facebook" data-original-title="Facebook" data-gal='tooltip' data-placement="top"><i class="fa fa-facebook fa-2x"></i></a></li>
			<li><a href="https://twitter.com/" class="socIcon" data-toggle="tooltip" title="Twitter" data-original-title="Twitter" data-gal='tooltip' data-placement="top"><i class="fa fa-twitter fa-2x"></i></a></li>
			<li><a href="http://www.youtube.com/" class="socIcon" data-toggle="tooltip" title="Youtube" data-original-title="Youtube" data-gal='tooltip' data-placement="top"><i class="fa fa-youtube fa-2x"></i></a></li>
			</ul>
			</div>
			</div>
        </div>
      </div>
    </footer>
    <!-- /Footer -->

    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
   
    <script src="js/modernizr.js"></script>
    <script src="js/jquery.sticky.js" ></script>
    <script src="js/jquery.quicksand.js" ></script>

      <script src="js/jquery.nav.js"></script>
    <script src="js/jquery.scrollTo.js" ></script>
    
    <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
    <script src="js/script.js"></script>

  </div>
  </body>
</hmtl>