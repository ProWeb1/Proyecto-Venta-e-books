<html>
<head>
</head>

<body>
<div id="main">
<?php
$nombreCompleto=$_POST["nombreCompleto"];
$idAutor=$_POST["idAutor"];

echo "Edici&oacute;n en proceso ....  </br>";

include_once("AutorCollector.php");
$AutorCollectorObj = new AutorCollector();
$AutorCollectorObj->updateAutor($idAutor,$nombreCompleto);

echo "id :".$idAutor." actualizado a:".$nombreCompleto." </br>";
?>
<div><a href="index.php">Volver al Inicio</a></div>
</div>
</body>
</html>