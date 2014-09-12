<html>
<head>
</head>

<body>
<div id="main">
<?php
//obtener el valor de ID que viene del metodo GET a traves de HTTP
$id=$_GET["id"];

//incluir la libreria de UsuarioCollector
include_once("UsuarioCollector.php");
//creo una instancia de UsuarioCollector
$UsuarioCollectorObj = new UsuarioCollector();
//Ejecuto el metodo para eliminar el objeto Usuario indicando el id
$UsuarioCollectorObj->deleteUsuario($id);

// muestro mensaje de que se ha eliminado el objeto Usuario
echo "El usuario con el id: ". htmlspecialchars($id) ."  ha sido eliminado correctamente.";
?>
<div><a href="indexUsuario.php">Volver al Inicio</a></div>
</div>
</body>
</html>
