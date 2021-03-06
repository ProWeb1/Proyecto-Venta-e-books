<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Favicon-->
        <!--link rel="shortcut icon" href="./favicon.png" /-->		
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Style  -->
        <link href="css/contacto.css" rel="stylesheet">
    </head>
    <body>
        <div id="contacto" class="container_wapper">
            <div class="container-fluid">
                <h1>Contácto</h1>
                <div class="col-md-4">
                    <h2>Qui&eacute;nes somos.</h2>
                    <p>Desde 1971 Libri Mundi distribuye una serie de sellos editoriales y contin&uacute;a motivando, a trav&eacute;s de su espacio cultural, el debate sobre la cultura as&iacute; como la publicaci&oacute;n de textos que enriquecen la biblioteca ecuatoriana.
                	<br>
                	<strong>MISI&Oacute;N</strong>
                	<br>  
                	Contribuir a construir una sociedad m&aacute;s instruida, m&aacute;s informada y con intereses m&aacute;s amplios en todos sus niveles a trav&eacute;s de la comercializaci&oacute;n, distribuci&oacute;n y producci&oacute;n de los mejores productos y servicios culturales.
            	    <br> 
            	    <strong>VISI&Oacute;N</strong>
	                <br>
	                Consolidarnos a mediano plazo como la m&aacute;s importante instituci&oacute;n privada de emprendimientos culturales del Ecuador, con una oferta completa de libros y otros productos culturales, acorde con las demandas de educaci&oacute;n, formaci&oacute;n, informaci&oacute;n y entretenimiento de todos los sectores de la sociedad.</p>
                    <p><strong>Email:</strong> contact@ebbbooks.com<br /><strong>Tel&eacute;fono:</strong> 042-123456<br /><strong>Direcci&oacute;n:</strong> KM 30 1/2 v&iacute;a Per&iacute;metral</p>
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
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.singlePageNav.min.js"></script>
        <script src="js/unslider.min.js"></script>
        <script src="js/script_contacto.js"></script>
    </body>
</html>