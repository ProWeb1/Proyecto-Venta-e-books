<html>
<head>
</head>

<body>
<div id="main">
<?php
$nombreCompleto=$_POST["nombreCompleto"];
$idAutor=$_POST["idAutor"];
$foto=$_POST["foto"];

echo "Edici&oacute;n en proceso ....  </br>";

include_once("AutorCollector.php");
$AutorCollectorObj = new AutorCollector();
$AutorCollectorObj->updateAutor($idAutor,$nombreCompleto,$foto);

echo "id :".$idAutor." actualizado a:".$nombreCompleto. " y ".$foto." </br>";
?>
<div><a href="index.php">Volver al Inicio</a></div>
</div>
</body>
</html>
