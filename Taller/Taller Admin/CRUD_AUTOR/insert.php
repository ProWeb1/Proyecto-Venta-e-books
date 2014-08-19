<html>
<head>
</head>

<body>
<div id="main">
<?php
$valor=$_POST["nombreCompleto"];
//$valor="manuel";
echo 'Hola ' . htmlspecialchars($valor) . '!';

include_once("AutorCollector.php");

$DemoCollectorObj = new AutorCollector();
$DemoCollectorObj->createAutor($valor);

echo "valor agregado </br>";
?>
<div><a href="index.php">Volver al Inicio</a></div>
</div>
</body>
</html>
