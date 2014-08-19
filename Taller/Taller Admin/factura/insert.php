<html>
<head>
</head>

<body>
<div id="main">
<?php
$valor=$_POST["total"];
//$valor="manuel";
echo 'Hola ' . htmlspecialchars($valor) . '!';

include_once("CabeceraCollector.php");

$CabeceraCollectorObj = new CabeceraCollector();
$CabeceraCollectorObj->createCabecera("1", "2014-08-10", $valor);

echo "valor agregado </br>";
?>
<div><a href="index.php">Volver al Inicio</a></div>
</div>
</body>
</html>
