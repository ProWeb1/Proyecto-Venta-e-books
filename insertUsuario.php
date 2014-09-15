<?php
session_start();
$valor1=$_POST["nombreUsuario"];
$valor2=$_POST["contrasena"];
$valor3="images/perfil/default.jpg";
$valor4=$_POST["nombre"];
$valor5=$_POST["apellido"];
$valor6=$_POST["fechaNacimiento"];
$valor7=$_POST["infoUsuario"];
$valor8=$_POST["genero"];
$valor9=$_POST["email"];
$valor10=$_POST["pais"];
include_once("UsuarioCollector.php");
$UsuarioCollectorObj = new UsuarioCollector();
$UsuarioCollectorObj->createUsuario($valor1,$valor2,$valor3,$valor4,$valor5,$valor6,$valor7,$valor8,$valor9,$valor10);
echo "<script>alert('Has ingresado correctamente a nuestro sitio!');</script>";
foreach ($UsuarioCollectorObj->readUsuarios() as $c){
	if($_REQUEST['nombreUsuario'] == $c->getNombreUsuario() && $_POST['contrasena'] == $c->getContrasena()){
		$_SESSION['actualmente_ingresado'] = 1;
		$_SESSION['username'] = $c->getNombreUsuario();
		$_SESSION['idUsuario'] = $c->getIdUsuario();
		echo '<center><a href="perfil.php">Ir a perfil</a></center>';
	}else
		$mensajeError = '<h3 class="animated bounceInDown">Usuario o Clave incorrectos.</h3>';
		//echo $mensajeError;
}
?>