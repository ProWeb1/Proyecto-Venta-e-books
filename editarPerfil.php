<?php 
session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<div id="main">
<?php
	$idUsuario=$_POST["idUsuario"];
	$usuario=$_POST["nombreUsuario"];
	$contrasena=$_POST["contrasena"];
	$foto='images/perfil/default.jpg';
	$nombre=$_POST["nombre"];
	$apellido=$_POST["apellido"];
	$fechaNacimiento=$_POST["fechaNacimiento"];
	$infoUsuario=$_POST["infoUsuario"];
	$genero=$_POST["genero"];
	$email=$_POST["email"];
	$pais=$_POST["pais"];
	echo "Edici&oacute;n en proceso... </br>";
	include_once("UsuarioCollector.php");
	include_once("Usuario.php");
	$UsuarioCollectorObj = new UsuarioCollector();
	$UsuarioCollectorObj->updateUsuario($idUsuario, $usuario, $contrasena, $foto, $nombre, $apellido, $fechaNacimiento, $infoUsuario, $genero, $email, $pais);
	echo "<script>alert('Datos actualizados exitosamente. Si su nombre de usuario ha sido editado, se mostrará en la siguiente sesión.');</script>";
	echo 'Listo!';
?>
<div><a href="perfil.php">Volver al Perfil</a></div>
</div>
</body>
</html>
