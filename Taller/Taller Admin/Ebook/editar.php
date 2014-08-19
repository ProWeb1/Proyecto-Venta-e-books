<html>
<head>
</head>

<body>
<div id="main">

<?php
$idEbook=$_POST["idEbook"];
$titulo=$_POST["titulo"];
$autor=$_POST["autor"];
$precio=$_POST["precio"];
$idioma=$_POST["idioma"];
$numero_Paginas=$_POST["numero_Paginas"];
$categoria=$_POST["categoria"];
$isbn=$_POST["isbn"];
$editorial=$_POST["editorial"];
$traductor=$_POST["traductor"];


echo "Edici&oacute;n en proceso ....  </br>";

include_once("EbookCollector.php");
$EbookCollectorObj = new EbookCollector();
$EbookCollectorObj->updateEbook($idEbook,$titulo,$autor,$precio,$idioma,$numero_Paginas,$categoria,$isbn,$editorial,$traductor);

echo "id :".$idEbook." actualizado a titulo:".$titulo." </br> autor:".$autor. "</br> precio:".$precio. "</br> idioma:".$idioma. "</br> numero_Paginas:".$numero_Paginas. "</br> categoria:".$categoria. "</br> isbn:".$isbn. "</br> editorial:".$editorial. "</br> traductor:".$tradcutor;

?>
<div><a href="index.php">Volver al Inicio</a></div>
</div>
</body>
</html>
