<html>
<head>
</head>

<body>
<div id="main">
<?php
//obtener el valor de ID que viene del metodo GET a traves de HTTP
$id=$_GET["id"];

//incluir la libreria de EbookCollector
include_once("EbookCollector.php");

//creo una instancia de EbookCollector
$EbookCollectorObj = new EbookCollector();

//Ejecuto el metodo para eliminar el objeto Ebook indicando el id
$EbookCollectorObj->deleteEbook($id);

// muestro mensaje de que se ha eliminado el objeto Ebook
echo "valor id". htmlspecialchars($id) ."  ha sido eliminado correctamente.";
?>
<div><a href="index.php">Volver al Inicio</a></div>
</div>
</body>
</html>
