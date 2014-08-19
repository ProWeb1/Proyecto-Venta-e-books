<html>
<head>
</head>

<body>
<div id="main">
<?php
$valor=$_POST["nombre"];
$valor2=$_POST["contrasena"];
echo 'Hola ' . htmlspecialchars($valor) . '! Tu contrase&ntilde;a es :' . htmlspecialchars($valor2);

include_once("UsuarioCollector.php");

$UsuarioCollectorObj = new UsuarioCollector();
$UsuarioCollectorObj->createUsuario($valor,$valor2);

echo "</br>valor agregado </br>";
?>
<div><a href="index.php">Volver al Inicio</a></div>
</div>
</body>
</html>
