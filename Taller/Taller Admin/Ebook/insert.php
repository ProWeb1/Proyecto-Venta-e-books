<html>
<head>
</head>

<body>
<div id="main">
<?php
$valor=$_POST["titulo"];
//$valor="manuel";
echo 'Hola ' . htmlspecialchars($valor) . '!';

include_once("EbookCollector.php");

$EbookCollectorObj = new EbookCollector();
$EbookCollectorObj->createEbook($valor);

echo "valor agregado </br>";
?>
<div><a href="index.php">Volver al Inicio</a></div>
</div>
</body>
</html>
