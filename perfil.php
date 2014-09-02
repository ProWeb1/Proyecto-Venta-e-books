<?php  
session_start();
$usuario = $_SESSION["username"];
if($_SESSION['actualmente_ingresado'] == 1){
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <link href='images/logo/ebbbooks-logo.ico' rel='shortcut icon' type='image/x-icon'>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Usuario - eBBBOOks</title>
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">    
    <!-- CSS -->
    <link href="css/stilo.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="css/biblio.css" rel="stylesheet">
    		
  </head>
  <body>
  <div id="CajaGrande">
    <!-- Imagen Grande para el Inicio -->
    
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
        
        <!-- Navegación-->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">  
              <li><a id ="salida" href="" onclick="location.href='login_logout.php'"><i class="fa fa-user"></i><?php echo " ".$usuario; ?>
		  </a>
	      </li>
              <li><span>|</span></li>
              <li><a id "salida" href="" onclick="location.href='carrito.htm'"><i class="fa fa-shopping-cart"></i></a></li>
              <li><span>|</span></li>
              <li><a href="" onclick="location.href='#'"><i class="fa fa fa-search"></i></a></li>
            </ul>
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
				      <h2 class="text-center">Perfil de Usuario</h2>	
				      <span class="line-title"></span>
            </div>
		      </div>
        <!-- Final Columna -->
		    </div>
        <!-- Final Fila-->
		  </div>

      <div class="row">
        <div class="col-md-10 col-md-offset-1">

          <!-- Start Left Side -->
        <div class="col-xs-12 col-sm-3 text-center">
          
<?php

include_once("UsuarioCollector.php");

       $nombrearray= array();
       $nombreCollectorObj = new UsuarioCollector();
       foreach ($nombreCollectorObj->showUsuarios() as $a){
        $aux1 = $a->getFoto();
	$aux2 = $a->getNombre(); 
	$aux3 = $a->getApellido();
	$aux4 = $a->getFechaNacimiento();
	$aux5 = $a->getInfoUsuario();
	$aux6 = $a->getGenero();
	$aux7 = $a->getEmail();
	$aux8 = $a->getPais();
	
	if ($aux6 == f)
		$genero = 'Femenino';
	else
		$genero = 'Masculino';

       echo '<img src="'.$aux1.'" class="img-responsive img-border" alt="" />';	
       echo  '<h2>'.$aux2.' '.$aux3.'</h2>'; 
       echo '<div class="contact-info text-center">
            	<div class="row">
              		<div class="col-xs-12 col-sm-12">
                		<p><strong>Fecha de Nacimiento: </strong>'.$aux4.'</p>
                		<p><strong>G&eacute;nero: </strong>'.$genero.'</p>
                		<p><strong>Correo: </strong>'.$aux7.'</a></p>
				<p><strong>Pa&iacute;s: </strong>'.$aux8.'</a></p>
				</br>
				<center><p><a class="btn btn-primary" href="">Editar Perfil</a></p></center>
              		</div>
            	</div>
             </div>
	</div>
        <!-- End Left Side -->
        <div class="clearfix visible-xs"></div>
        <!-- Start Right Side -->
        <div class="col-xs-12 col-sm-9">
          <div class="row">
            <div class="col-xs-12 col-sm-12">

              <!-- Start About Me -->
              <h2>Acerca de mi:</h2>
              <p>'.$aux5.'</p>
              <!-- End About Me -->'; 
	}
?>
              <!-- libros -->
              <h2>Agregados recientemente: </h2>         
		<div class="row projects">

                <div class="col-xs-6 col-sm-3">
                  <a href="visorPdf.html"><img src="images/fichasLibros/img3.jpg" class="img-responsive img-border" alt="" /></a>
                  </br>
                  <p align="center">The Selection</p>
                </div>

                <div class="col-xs-6 col-sm-3">
                  <a href="perfil.htm"><img src="images/fichasLibros/img4.jpg" class="img-responsive img-border" alt="" /></a>
                  </br>
                  <p align="center">The Wise Man's Fear</p>
                </div>

                <div class="col-xs-6 col-sm-3">
                  <a href="perfil.htm"><img src="images/novedades/img5.jpg" class="img-responsive img-border" alt="" /></a>
                  </br>
                  <p align="center">The Elite</p>
                </div>

                <div class="col-xs-6 col-sm-3">
                  <a href="perfil.htm"><img src="images/slider/13.jpg" class="img-responsive img-border" alt="" /></a>
                  </br>
                  <p align="center">The Falconer</p>
                </div>
				<div class="clearfix visible-xs"></div>
              </div>
              <a href="#work">Ver toda la biblioteca...</a>
              <!-- final libros -->
            </div>
          </div>
        </div>
        <!-- End Right Side -->

        </div><!-- Final Columna -->		  
      </div><!-- Final Fila -->
    </div>


     <!-- Catalogo -->
     <div id="work" class="pagina">
         <div class="container-fluid">
  <div class="col-md-12 ">
  <div class="gale">
    
<?

include_once("ebooksElegidosCollector.php");

       $arrayColeccion1= array();
       $ColeccionCollectorObj = new ebooksElegidosCollector();
       $directory="images/portadas";
       $dirint = dir($directory);
       foreach ($ColeccionCollectorObj->librosUsuario() as $a){
        $aux1 = $a; 
        array_push($arrayColeccion1, $aux1);
       
}
 
    while (($archivo = $dirint->read()) !== false){
      if (eregi("gif", $archivo) || eregi("jpg", $archivo) || eregi("png", $archivo)){
        $compara = ($directory."/".$archivo);
      for($i = 0; $i < sizeof($arrayColeccion1);$i++){
      if ($compara == $arrayColeccion1[$i]->getportada()){

            echo '<div class="col-md-2 col-sm-3 col-xs-6">';
  echo '<a href='.$arrayColeccion1[$i]->getenlace().'>';
            echo '<img  class="img-responsive" src="'.$directory."/".$archivo.'">';
      
      
 echo '</a>';
echo '</div>';
}
      }
    }
  }
 $dirint->close(); 
?>
</div>
</div>
</div>
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
    </footer>
    <!-- /Footer -->

    <!-- JavaScript -->

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
<?php } else {?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <link href='images/logo/ebbbooks-logo.ico' rel='shortcut icon' type='image/x-icon'>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Usuario - eBBBOOks</title>
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">    
    <!-- CSS -->
    <link href="css/stilo.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="css/biblio.css" rel="stylesheet">
    		
  </head>
  <body>
  <div id="CajaGrande">
    <!-- Imagen Grande para el Inicio -->
    
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
            <a class="navbar-brand" href="index.html"> <img src= "images/logo/ebbbooks-logo.png"></a>
          </div>
        
        <!-- Navegación-->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">  
              <li><a id ="salida" href="" onclick="location.href='login_logout.php'"><i class="fa fa-user"></i></a></li>
              <li><span>|</span></li>
              <li><a id "salida" href="" onclick="location.href='carrito.htm'"><i class="fa fa-shopping-cart"></i></a></li>
              <li><span>|</span></li>
              <li><a href="" onclick="location.href='#'"><i class="fa fa fa-search"></i></a></li>
            </ul>
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
				      <h2 class="text-center">OOPS!</h2>	
				      <span class="line-title"></span>
            </div>
		      </div>
        <!-- Final Columna -->
		    </div>
        <!-- Final Fila-->
		  </div>

      <div class="row">
        <div class="col-md-10 col-md-offset-1">

        <center>No tienes informaci&oacute;n en nuestra p&aacute;gina. <a href="signup.htm">Reg&iacute;strate ahora!</a></center>

        </div><!-- Final Columna -->		  
      </div><!-- Final Fila -->
    </div>
   </div>
    <!-- Footer -->
    <footer class="bg-primary">
      <div class="container">
        <div class="row">
			<div class="col-md-4 ">
				<div class="constr cp-right">
					<p>&copy; 2014 <a href="index.php">eBBBOOKS</a>. All Rights Reserved. </p>
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
    </footer>
    <!-- /Footer -->

    <!-- JavaScript -->

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
<?php } ?>
