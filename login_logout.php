<?php
include_once("UsuarioCollector.php");
session_start();
$UsuarioCollectorObj = new UsuarioCollector();
switch($_GET['action']){
	case 'login':{
		foreach ($UsuarioCollectorObj->readUsuarios() as $c){
			if($_REQUEST['username'] == $c->getNombreUsuario() && $_POST['password'] == $c->getContrasena()){
				$_SESSION['actualmente_ingresado'] = 1;
				$_SESSION['username'] = $c->getNombreUsuario();
				$_SESSION['idUsuario'] = $c->getIdUsuario();
			}else
				$mensajeError = '<h3 class="animated bounceInDown">Usuario o Clave incorrectos.</h3>';
				//echo $mensajeError;
		}
	}break;
	case 'logout':{
		session_destroy();
		header('Location: login_logout.php');
	}break;
}
?>
<?php if($_SESSION['actualmente_ingresado'] == 1){?>
	<!DOCTYPE html>
		<html class="no-js" lang="en">
		<head>
			<link href='images/logo/ebbbooks-logo.ico' rel='shortcut icon' type='image/x-icon'>
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 	
		    <meta charset="utf-8">
		    <meta name="viewport" content="width=device-width, initial-scale=1"> 
			<meta name="description" content="eBBBOOKS login page">
			<meta name="keywords" content="ebbbooks, login, account, register">
			<meta name="author" content="eBBBOOKS">   
			<title>Ingresar - eBBBOOKS</title>
		    <!-- Bootstrap CSS -->
		    <link href="css/bootstrap.css" rel="stylesheet">
		    <!-- Custom styles -->
		    <link href="css/login.css" rel="stylesheet">
		    <link href="css/animate-custom.css" rel="stylesheet">
		 	<script src="login_files/custom.modernizr.js" type="text/javascript"></script> 
		</head>    
		<body>
			<div class="login-links">    	
    			<center><a href="login_logout.php?action=logout">Cerrar Sesi&oacute;n</a></center>
    		</div>
    		<div class="container" id="login-block">
		    	<div class="row">		
			    	<div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
					    <h3 class="animated bounceInDown"><a href="index.html">Continuar a eBBBOOKS</a></h3>
					    <h3 class="animated bounceInDown"><a href="perfil.php">Continuar a Perfil</a></h3>
					</div>
				</div>
			</div>
	<!--<pre><?php print_r($_SESSION); ?></pre>-->
		</body>
		</html>	
<?php } else { ?>

	<form method="post" action="login_logout.php?action=login">
    <!DOCTYPE html>
		<html class="no-js" lang="en">
		<head>
			<link href='images/logo/ebbbooks-logo.ico' rel='shortcut icon' type='image/x-icon'>
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 	
		    <meta charset="utf-8">
		    <meta name="viewport" content="width=device-width, initial-scale=1"> 
			<meta name="description" content="eBBBOOKS login page">
			<meta name="keywords" content="ebbbooks, login, account, register">
			<meta name="author" content="eBBBOOKS">
		    <link rel="shortcut icon" href="images/logomini.png">    
			<title>Ingresar - eBBBOOKS</title>
		    <!-- Bootstrap CSS -->
		    <link href="css/bootstrap.css" rel="stylesheet">
		    <!-- Custom styles -->
		    <link href="css/login.css" rel="stylesheet">
		    <link href="css/animate-custom.css" rel="stylesheet">
		 	<script src="login_files/custom.modernizr.js" type="text/javascript"></script> 
		</head>    
		<body>    	
			<div class="container" id="login-block">
		    	<div class="row">		
			    	<div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
					    <h3 class="animated bounceInDown">Ingresar</h3>	
				       	<div class="login-box clearfix animated flipInY">
					        <div class="login-logo">
					       		<a href="index.html"><img src="images/logo/ebbbooks-logo.png" alt="eBBBOOKS logo"></a>
					        </div> 
					        <hr>			        
							<div class="login-form">	
				        		<form action="login.htm" method="get">
							   		<input type="text" name="username" placeholder="Usuario" required="">
							   		<input type="password" name ="password" placeholder="Constrase&ntilde;a" required="">
							   		<button type="submit" class="btn btn-login">Ingresar</button> 
								</form>	
								<div class="login-links"> 
							    	<a href="signup.htm">No tienes una cuenta? <strong>Reg&iacute;strate</strong> </a>
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
<?php } ?>
