<?php
$valor1=$_POST["usuario"];
$valor2=$_POST["contrasena"];
$valor3=$_POST["foto"];
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
?>
