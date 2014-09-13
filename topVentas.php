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

    <link href="css/topVentas-estilo.css" rel="stylesheet">

     <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    
    <script>
        $(document).ready(function() {
            //alert("isa");
            $.ajax({
            url: "Ebook/paginaTopVentas.php",
            data: {
            zipcode: 97201
            },
            success: function( data ) {
            $( "#contenedor_top" ).html( "<div>" + data + "</div>" );
            }
            });
        });
    </script>
		
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
        
        <!-- Navegación-->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
         <ul class="nav navbar-nav navbar-right">
            
           <li><a href="" onclick="location.href='login_logout.php'"><i class="fa fa-user"></i></a></li>
            <li><span>|</span></li>
            <li><a href="" onclick="location.href='carritoCompras.php'"><i class="fa fa-shopping-cart"></i></a></li>
            <li><span>|</span></li>
            <li><a href="" onclick="location.href='pdf/mapaSitio.pdf'"><i class="fa fa fa-sitemap"></i></a></li>
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
				<h2 class="text-center">Top Ventas</h2>	
				<span class="line-title"></span>
			</div>
		   </div><!-- Final Columna -->
		  </div><!-- Final Fila-->
		</div>
        <div class="row">
           <div class="col-md-10 col-md-offset-1">
			

        <div id="container" class="container">
            <div id="contenedor_top"> </div>
        </div>

         </div> 

    </div><!-- Final Columna -->
          
   </div><!-- Final Fila -->
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