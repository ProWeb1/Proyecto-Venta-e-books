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

    
    		
  </head>
  <body>
  
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
            <a class="navbar-brand" href="" onclick="location.href='index.html'"> <img src= "images/logo/ebbbooks-logo.png"></a>
          </div>
        
        <!-- Navegación-->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              
            <li><a href="" onclick="location.href='login.htm'"><i class="fa fa-user"></i></a></li>
            <li><span>|</span></li>
            <li><a href="" onclick="location.href='carrito.htm'"><i class="fa fa-shopping-cart"></i></a></li>
            <li><span>|</span></li>
            <li><a href="" onclick="location.href='carrito.htm'"><i class="fa fa fa-search"></i></a></li>
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
				      <h2 class="text-center">Busqueda</h2>	
				      <span class="line-title"></span>
            </div>
		      </div>
        <!-- Final Columna -->
		    </div>
        <!-- Final Fila-->
		  </div>

      <div class="row">
        <div class="col-md-10 col-md-offset-1">

          
      <form name="form1" method="post" action="buscador.php" id="cdr" >
        <h3>Introduzca su busqueda</h3>
            <p>
              <input name="busca"  type="text" id="busqueda">
              <input type="submit" name="Submit" value="buscar" />
              </p>
            </p>
        </form>
      <p>
           <br>

<?php


$busca="";
$busca=$_POST['busca'];
mysql_connect("localhost","root","root");
mysql_select_db("ebbbooks");
if($busca!=""){
$busqueda=mysql_query("SELECT * FROM ebook WHERE titulo LIKE '%".$busca."%'");

?>

<table width="950" border="1" id="tab" >
   <tr>
     
     <td width="157" align="center"><Strong>Titulo</td>
     <td width="157" align="center"><Strong>Autor</td>
     <td width="22" align="center"><Strong>Precio</td>
     <td width="30" align="center"><Strong>Idioma</td>
     <td width="73" align="center"><Strong>Numero de Paginas</td>
     <td width="100" align="center"><Strong>Categoria</td>
     <td width="103" align="center"><Strong>ISBN</td>
     <td width="103" align="center"><Strong>Editorial</Strong></td>
   
   </tr>
 
<?php

  while($f=mysql_fetch_array($busqueda)){
  echo '<tr>';
  
  echo '<td width="157" align="center">'.$f['titulo'].'</td>';
  echo '<td width="157" align="center">'.$f['autor'].'</td>';
  echo '<td width="19" align="center">'.$f['precio'].'</td>';
  echo '<td width="30" align="center">'.$f['idioma'].'</td>';
  echo '<td width="73" align="center">'.$f['numero_Paginas'].'</td>';
  echo '<td width="100" align="center">'.$f['categoria'].'</td>';
  echo '<td width="103" align="center">'.$f['isbn'].'</td>';
  echo '<td width="103" align="center">'.$f['editorial'].'</td>';
 
  }

}
?>


        </div><!-- Final Columna -->		  
      </div><!-- Final Fila -->
    </div>
    

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