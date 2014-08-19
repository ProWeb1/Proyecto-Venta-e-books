<html>
<head>
</head>

<body>
<div id="main">
<?php
$nombre=$_POST["nombre"];
$idUsuario=$_POST["idUsuario"];
$contrasena=$_POST["contrasena"];

echo "Edici&oacute;n en proceso ....  </br>";

include_once("UsuarioCollector.php");
$UsuarioCollectorObj = new UsuarioCollector();
$UsuarioCollectorObj->updateUsuario($idUsuario,$nombre, $contrasena);

echo "id : ".$idUsuario." actualizado a: ".$nombre." con la contrase&ntilde;a: ".$contrasena."</br>";
?>
<div><a href="index.php">Volver al Inicio</a></div>
</div>
</body>
</html>
