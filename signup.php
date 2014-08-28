<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  	
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
	<meta name="description" content="eBBBOOKS register page">
	<meta name="keywords" content="ebbbooks, login, account, register, password">
	<meta name="author" content="eBBBOOKS">
    <link rel="shortcut icon" href="images/logo/logomini.png">
	<title>Registro - eBBBOOKS</title>
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles -->
    <link href="css/login.css" rel="stylesheet">
    <link href="css/animate-custom.css" rel="stylesheet">   
    <script src="js/custom.modernizr.js" type="text/javascript"></script>  
</head>
<body>
    <div class="container" id="login-block">
    	<div class="row">
		    <div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
			    <h3 class="animated bounceInDown">Reg&iacute;strate</h3>
			    <div class="login-box clearfix animated flipInY">
			       	<div class="login-logo">
			       		<a href="index.html"><img src="images/logo/ebbbooks-logo.png" alt="eBBBOOKS logo"></a>
			       	</div> 
			       	<hr>
			       	<div class="login-form">
			       		<form action="insertUsuario.php" method="post">     			
						   	<input type="text" placeholder="Usuario" name="nombreUsuario" required="">
							<input type="password" placeholder="Contrase&ntilde;a" name="contrasena" required="">  
						   	<input type="password" placeholder="Confirmar contrase&ntilde;a" required="">  
							<input type="text" placeholder="Nombres" name="nombre" required="">
							<input type="text" placeholder="Apellidos" name="apellido" required="">
							<input type="date" name="fechaNacimiento" requiered="">
							<center><textarea type="text" name="infoUsuario" id="message" placeholder="Escribe algo acerca de ti..."></textarea></center></br>
							<div class="gender-radio"> 
								<strong>G&eacute;nero:</strong></br></br>
								Masculino<input type="radio" name="genero" value="m">
								Femenino<input type="radio" name="genero" value="f">
							</div>
						   	<input type="email" placeholder="E-mail" name="email" required="">
							<input type="text" placeholder="Pa&iacute;s" name="pais" required="">
						   	<label class="checkbox">
        		                			<input type="checkbox" value="acepto">
								<a href="/pdf/TerminosCondiciones.pdf"> Acepto los t&eacute;rminos y condiciones.</a>
							</label>
						   	<input type="submit" class="btn btn-login" value="Reg&iacute;strame"> 
						</form>	
						<div class="login-links"> 
					        <a href="login_logout.php">Ya tienes una cuenta? <strong>Ingresa ahora!</strong></a>
						</div>      		
			        </div> 
			    </div>
			</div>
		</div>
    </div>
    <footer class="container">
     	<p id="footer-text"><small>© 2014 <a href="index.html">eBBBOOKS.</a> All rights reserved.</small></p>
    </footer>
    <script src="js/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script> 
    <script src="js/bootstrap.min.js"></script> 
    <script src="js/placeholder-shim.min.js"></script> 
    <script src="js/custom.js"></script>
</body>
</html>
