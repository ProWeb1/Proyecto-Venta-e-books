<html>
<head>
</head>

<body>
<div id="main">
<?php
$valor=$_POST["titulo"];
$valor2=$_POST["fk_autor"];
$valor3=$_POST["precio"];
$valor4=$_POST["idioma"];
$valor5=$_POST["numero_Paginas"];
$valor6=$_POST["categoria"];
$valor7=$_POST["isbn"];
$valor8=$_POST["editorial"];
$valor9=$_POST["traductor"];
$valor10=$_POST["portada"];
$valor11=$_POST["resena"];
$valor12=$_POST["enlace"];


include_once("EbookCollector.php");

$EbookCollectorObj = new EbookCollector();
$EbookCollectorObj->createEbook($valor, $valor2, $valor3, $valor4, $valor5, $valor6, $valor7, $valor8, $valor9, $valor10, $valor11, $valor12);

echo "valor agregado </br>";
?>
<div><a href="index.php">Volver al Inicio</a></div>
</div>
</body>
</html>
