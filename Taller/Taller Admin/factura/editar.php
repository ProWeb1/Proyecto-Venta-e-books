<html>
<head>
</head>

<body>
<div id="main">
<?php
$total=$_POST["total_pagar"];
$idCabecera=$_POST["idCabecera"];

echo "Edici&oacute;n en proceso ....  </br>";

include_once("CabeceraCollector.php");
$CabeceraCollectorObj = new CabeceraCollector();
$CabeceraCollectorObj->updateCabecera($idCabecera,$total);

echo "id :".$idCabecera." actualizado a:".$nombre." </br>";
?>
<div><a href="index.php">Volver al Inicio</a></div>
</div>
</body>
</html>
