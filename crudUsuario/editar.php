<html>
<head>
</head>
<body>
<div id="main">
<?php
	$usuario=$_POST["usuario"];
	$idUsuario=$_POST["idUsuario"];
	$contrasena=$_POST["contrasena"];
	$foto=$_POST["foto"];
	$nombre=$_POST["nombre"];
	$apellido=$_POST["apellido"];
	$fechaNacimiento=$_POST["fechaNacimiento"];
	$infoUsuario=$_POST["infoUsuario"];
	$genero=$_POST["genero"];
	$email=$_POST["email"];
	$pais=$_POST["pais"];
	echo "Edici&oacute;n en proceso... </br>";
	include_once("UsuarioCollector.php");
	$UsuarioCollectorObj = new UsuarioCollector();
	$UsuarioCollectorObj->updateUsuario($idUsuario, $usuario, $contrasena, $foto, $nombre, $apellido, $fechaNacimiento, $infoUsuario, $genero, $email, $pais);
	echo "id : ".$idUsuario." actualizado a: </br> Usuario: ".$Usuario." </br> Contrase&ntilde;a: ".$contrasena."</br> Ruta de foto: ".$foto."</br> Nombre: ".$nombre."</br> Apellido: ".$apellido."</br> Fecha de Nacimiento: ".$fechaNacimiento."</br> Acerca de mi: ".$infoUsuario."</br> G&eacute;nero: ".$genero."</br> Correo: ".$email."</br> Pa&iacute;s: ".$pais;
?>
<div><a href="indexUsuario.php">Volver al Inicio</a></div>
</div>
</body>
</html>
