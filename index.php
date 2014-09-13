﻿<?php  
$nombreUsu=$_GET["nombreUsu"];
?>
<!DOCTYPE html>
<html lang="es">
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
    <link href="css/contacto.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/Estilo-mi-slider.css" />
		<link rel="stylesheet" href="js/flexslider/flexslider.css" />
    <link rel="stylesheet" href="css/colorblocks-style.css">
    <link rel="stylesheet" href="css/buscador.css">

  </head>

  <body>
  <div id="CajaGrande">

    <!-- Imagen Grande para el Inicio -->
    <div id="about" class="header">
      <div class="mascaraHeader"></div>
     	  <div class="vert-text">
			  <h1>eBBBOOKS</h1>
			  <h2>buy&borrow books</h2>	
		  </div>
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
          <a class="navbar-brand" href="#about"> <img src= "images/logo/ebbbooks-logo.png"></a>
        </div>
        <!-- Navegación-->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <?php
          if($nombreUsu<>""){
        ?>
           <ul class="nav navbar-nav navbar-right">
            <li><a href="#about">Nosotros</a></li>
            <li><span>|</span></li>
            <li><a href="#work">Catálogo</a></li>
            <li><span>|</span></li>
            <li><a href="#noticias">Noticias</a></li>
            <li><span>|</span></li>
            <li><a href="#contacto">Contacto</a></li>
            <li><span>|</span></li>
            <li><a id ="salida" href="" onclick="location.href='login_logout.php'"><i class="fa fa-user"></i><?php echo " ".$nombreUsu; ?></a></li>
            <li><span>|</span></li>
            <li><a href="" onclick="location.href='carritoCompras.php'"><i class="fa fa-shopping-cart"></i></a></li>
            <li><span>|</span></li>
            <li><a href="" onclick="location.href='pdf/mapaSitio.pdf'"><i class="fa fa-sitemap"></i></a></li>
          </ul>
        <?php }else{?>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#about">Nosotros</a></li>
            <li><span>|</span></li>
            <li><a href="#work">Catálogo</a></li>
            <li><span>|</span></li>
            <li><a href="#noticias">Noticias</a></li>
            <li><span>|</span></li>
            <li><a href="#contacto">Contacto</a></li>
            <li><span>|</span></li>
            <li><a href="" onclick="location.href='login_logout.php'"><i class="fa fa-user"></i></a></li>
            <li><span>|</span></li>
            <li><a href="" onclick="location.href='carritoCompras.php'"><i class="fa fa-shopping-cart"></i></a></li>
            <li><span>|</span></li>
            <li><a href="" onclick="location.href='pdf/mapaSitio.pdf'"><i class="fa fa-sitemap"></i></a></li>
          </ul>
        <?php } ?>
          </div><!-- /.navbar-baja -->
        </div><!-- /.contenedor fluido-->
    </nav>
    <!-- /Imagen grande Final -->
     <!-- Introducción -->
       <div id="aboutMore" class="pagina">
         <div class="container">
		      <div class="row">
          <div class="col-md-10  col-md-offset-1">
		    <div class="constr titulo-pag-blanca">
				<h2 class="text-center">Nosotros</h2>	
				<span class="line-title"></span>
			</div>
		   </div><!-- Final Columna -->
		  </div><!-- Final Fila-->
		</div>
        <div class="row">
           <div class="col-md-10 col-md-offset-1">
      <div class="constr about-content">
        <p class="text-center"><strong>eBBBOOKS</strong> es una compañía que se encarga de 
la venta de traduccciones de e-books por medio de una plataforma en línea, con el objetivo de ampliar el repertorio 
de e-books en el idioma castellano y crear una cultura ecológica basado en la compra de e-books.</p>
        
      </div>
          </div><!-- end col -->
      
        </div><!-- end row -->
</div>
    <!-- Catalogo -->
    <div id="work" class="pagina page-bgcolor">
      <div class="container">
		<div class="row">
          <div class="col-md-10  col-md-offset-1">
		    <div class="constr title-pag-ploma">
				<h2 class="text-center">Catálogo</h2>	
			<div class="main">
				<div id="mi-slider" class="mi-slider">
          <ul>
            <li><a href="fantasia.php"><img src="images/slider/1.jpg" alt="img01"><h4>Fantasía</h4></a></li>
            <li><a href="ficcion.php"><img src="images/slider/2.jpg" alt="img02"><h4>Ficción</h4></a></li>
            <li><a href="categorias.php"><img src="images/slider/3.jpg" alt="img03"><h4>Drama</h4></a></li>
            <li><a href="categorias.php"><img src="images/slider/4.jpg" alt="img04"><h4>Suspenso</h4></a></li>
          </ul>
          <ul>
            <li><a href="autores.php"><img src="images/slider/5.jpg" alt="img05"><h4>J. K. Rowling</h4></a></li>
            <li><a href="autores.php"><img src="images/slider/6.jpg" alt="img06"><h4>Marc Levy</h4></a></li>
            <li><a href="autores.php"><img src="images/slider/7.jpg" alt="img07"><h4>Marissa Meyer</h4></a></li>
            <li><a href="autores.php"><img src="images/slider/8.jpg" alt="img08"><h4>Lauren Kate</h4></a></li>
          </ul>
          <ul>
            <li><a href="novedades.php"><img src="images/slider/9.jpg" alt="img09"><h4>Reckoning</h4></a></li>
            <li><a href="novedades.php"><img src="images/slider/10.jpg" alt="img10"><h4>Plus One</h4></a></li>
            <li><a href="novedades.php"><img src="images/slider/11.jpg" alt="img11"><h4>Memorias</h4></a></li>
          </ul>
          <ul>
            <li><a href="topVentas.php"><img src="images/slider/12.jpg" alt="img12"><h4>Broken Stars</h4></a></li>
            <li><a href="topVentas.php"><img src="images/slider/13.jpg" alt="img13"><h4>The Falconer</h4></a></li>
            <li><a href="topVentas.php"><img src="images/slider/14.jpg" alt="img14"><h4>The Ring</h4></a></li>
            <li><a href="topVentas.php"><img src="images/slider/15.jpg" alt="img15"><h4>WinterSpell</h4></a></li>
          </ul>
          <nav>
            <a href="#">Categorias</a>
            <a href="#">Autores</z>
            <a href="#">Novedades</a>
            <a href="#">Top</a>
          </nav>
		</div><!-- /container -->
</div>
</div>
		   </div><!-- Final de Columna -->
		  </div><!-- Final de Fila -->
		   <div class="col-md-12">
            </div><!--Final de Columna-->
      </div><!--Final de Fila-->	 
	 
    </div>
    <!-- /Noticias -->
    <div id="noticias" class="pagina">
      <div class="container">
		<div class="row">
          <div class="col-md-10  col-md-offset-1">
		    <div class="constr titulo-pag-blanca">
				<h2 class="text-center">Noticias</h2>
			</div>
		   </div><!-- Final Columna -->
		  </div><!-- Final de Fila -->
		</div>
        <div class="row">
           <div class="col-md-10 col-md-offset-1">
			<div class="constr about-content">
        <div class="flexslider">
                    <ul class="slides">
                        <li>
                           <h2 class="text-center">Premio Azorín 2014</h2>

                                <p class="text-justify">Ramón Pernas ha obtenido el Premio Azorín de Novela 2014 con la novela Hotel Paradiso . 
                                El Jurado de este Premio hizo público el fallo en un acto celebrado en la ciudad de Alicante. </p>
                                
                                <p class="text-justify">El Jurado de esta XXXVIII edición está compuesto por Juan Bautista Roselló Tent, Diputado 
                                de Cultura de la Diputación Provincial de Alicante, que actuó como Presidente; por los 
                                escritores Juan Eslava Galán, Nativel Preciado, Almudena de Arteaga y Rafael Poveda Bernabé; 
                                Concepción Lucas González, profesora de Lengua y Literatura Españolas; Belén López, directora
                                de Editorial Planeta; y María José Argudo Poyatos, de la Diputación Provincial de Alicante,
                                que actuó como Secretaria sin voto.</p>

                        </li>
                        <li>
                           <h2 class="text-center">Eterna Ana María Matute</h2>
                                <p class="text-justify">La muerte de la genial escritora Ana María Matute, el pasado miércoles, nos ha
                                 dejado con un río de condolencias, homenajes y epítetos. </p>

                                <p class="text-justify">Una de las autoras más leídas y reconocidas de la literatura española, miembro 
                                de la Real Academia de la Lengua, ha alcanzado los máximos reconocimientos: 
                                Premio Cervantes, Premio Nacional de las Letras, Premio Planeta y Premio Nadal.</p>

                                <p class="text-justify">En los últimos meses Ana María trabajó en su novela Demonios familiares, que había
                                 casi finalizado y que Ediciones Destino publicará en septiembre, tal como se planeo 
                                 con ella. Será su último legado.</p>                       
                        </li>
                        <li>
                            <h2 class="text-center">Presentación y firma Circo Máximo</h2>
            
                                <p class="text-justify">Circo Máximo es la historia de Trajano y su gobierno, guerras y traiciones, lealtades insobornables e historias de amor imposibles. Hay una vestal, un juicio, inocentes acusados, un abogado brillante, 
                                mensajes cifrados, fortalezas inexpugnables, dos aurigas rivales, gladiadores y tres carreras
                                de cuadrigas. Hay un caballo especial, diferente a todos, leyes antiguas olvidadas, sacrificios 
                                humanos, amargura y terror, pero también destellos de nobleza y esperanza, como la llama del 
                                Templo de Vesta, que mientras arde, preserva a Roma. Sólo que algunas noches la llama tiembla.
                                La rueda de la Fortuna comienza entonces a girar. En esos momentos, todo es posible y hasta 
                                la vida de Trajano puede correr peligro. Y, esto es lo mejor, ocurrió: hubo un complot 
                                para asesinar a Marco Ulpio Trajano.</p>
                        </li>
                    </ul>
                  </div><!-- FlexSlider -->
			</div>
          </div><!-- Final de Columna -->
        </div><!-- Final de Fila -->
      </div>
    <!--Noticias-->

    <!--Contáctenos-->
    <div id="contacto" class="container_wapper">
        <div class="container-fluid">
            <h1>Contacto</h1>
            <div class="col-md-4">
                <h2>Qui&eacute;nes somos.</h2>
                
                <p align="justify"><strong>eBBBOOKS</strong> es una compañía que se encarga de la venta de traduccciones de e-books por medio de una plataforma en línea, con el objetivo de ampliar el repertorio de e-books en el idioma castellano y crear una cultura ecológica basado en la compra de e-books.    
      <br>
                <strong>MISI&Oacute;N</strong>
                <br>  
               
               Proveer una mayor oferta en línea de obras literarias, libros y/o textos en idioma español a través de una plataforma de HTML5 utilizada por una comunidad de usuarios de lectores y traductores para eliminar la barrera de idiomas.
      <br> 
                <strong>VISI&Oacute;N</strong>
                <br>
              Consolidarnos a mediano plazo como la m&aacute;s importante instituci&oacute;n de emprendimientos culturales del Ecuador, con una oferta completa de libros y otros productos culturales, acorde con las demandas de educaci&oacute;n, formaci&oacute;n, informaci&oacute;n y entretenimiento de todos los sectores de la sociedad.</p>

                <p><strong>Email:</strong> contact@ebbbooks.com<br />
                <strong>Tel&eacute;fono:</strong> 042-123456<br />
                <strong>Direcci&oacute;n:</strong> KM 30 1/2 v&iacute;a Per&iacute;metral</p>
            </div>

            <form action="enviarMensaje.php" method="post" class="col-md-8">
              <div class="row">
                  <div class="col-md-12">
                    <h2>Envianos un mensaje</h2>
                  </div>
                  <div class="col-md-6">
                    <p>Nombre</p>
                    <input type="text" name="nombre" id="name" placeholder="Tu nombre" />
                  </div>
                  <div class="col-md-6">
                    <p>Email</p>
                    <input type="text" name="email" id="email" placeholder="Tu Email" />
                  </div>
                  <div class="col-md-12">
                    <p>Asunto</p>
                    <input type="text" name="asunto" id="subject" placeholder="asunto" />
                  </div>
                  <div class="col-md-12">
                    <p>Mensaje</p>
                    <textarea name="mensaje" id="message"  placeholder="Te escuchamos..."></textarea>
                  </div>
                  <div class="col-xs-6 col-sm-3 col-md-offset-6">
                    <button type="submit">Enviar</button>
                  </div>
                  <div class="col-xs-6 col-sm-3">
                    <button type="reset">Borrar</button>
                  </div>
              </div>
            </form>
        </div>
    </div>    
    <!--Contáctenos-->
    
    <!-- Footer -->
    <footer class="bg-primary">
      <div class="container">
        <div class="row">
			<div class="col-md-4 ">
				<div class="constr cp-right">
					<p>&copy; 2014 <a href="http://ebbbooks.com">eBBBOOKS</a>. All Rights Reserved.</p>
				</div><!-- end contr -->
			</div><!-- Final de Columna -->
			<div class="col-md-4 text-center">
			<div class=" contr top-scroll">
			<a href="#about"><i class="fa fa-angle-double-up"></i></a>
			</div>
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
    </footer>
    <!-- /Footer -->

    <!-- JavaScript -->

    <script>window.jQuery || document.write('<script src="js/libs/jquery-1.9.0.min.js">\x3C/script>')</script>
    <script defer src="js/flexslider/jquery.flexslider-min.js"></script>
    <script src="js/main.js"></script>

    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
   
    <script src="js/modernizr.js"></script>
	  <script src="js/jquery.sticky.js" ></script>
	  <script src="js/jquery.quicksand.js" ></script>

	  <script src="js/jquery.nav.js"></script>
    <script src="js/jquery.scrollTo.js" ></script>
    
    <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
    <script src="js/script.js"></script>
    <script src="js/script_contacto.js"></script>

    <script src="js/modernizr.custom.63321.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="js/jquery.catslider.js"></script>
		<script>
			$(function() {

				$( '#mi-slider' ).catslider();

			});
		</script>

    <!-- Javascript para menu y srolling -->

  </div>
  </body>

</html>