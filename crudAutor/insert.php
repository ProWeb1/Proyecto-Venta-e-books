<html>
<head>
</head>

<body>
<div id="main">
<?php
$valor=$_POST["nombre"];
$valor2=$_POST["foto"];
//$valor="manuel";
echo 'Hola ' . htmlspecialchars($valor) . '!';

include_once("AutorCollector.php");

$AutorCollectorObj = new AutorCollector();
$AutorCollectorObj->createAutor($valor,$valor2);

echo "Autor agregado </br>";
?>
<div><a href="index.php">Volver al Inicio</a></div>
</div>
</body>
</html>
