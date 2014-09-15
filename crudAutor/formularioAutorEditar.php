<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>formulario Autor</title>
</head>
<body>

<?php
//obtener el valor de ID que viene del metodo GET a traves de HTTP
$id=$_GET["id"];
include_once("AutorCollector.php");
include_once("Autor.php");
$AutorCollectorObj = new AutorCollector();
$ObjAutor = $AutorCollectorObj->showAutor($id);
?>
<h2>Editar Objeto Autor </h2>
<form action="editar.php" method="post" >
<p>
Id: <input type="text" name="idAutor" value="<?php echo $ObjAutor->getIdAutor(); ?>" readonly />
</p>

<p>
Nombre: <input type="text" name="nombreCompleto"  value="<?php echo $ObjAutor->getnombreCompleto(); ?>" autofocus required />
</p>
<p>
Ruta de foto: <input type="text" name="foto"  value="<?php echo $ObjAutor->getFoto(); ?>" autofocus />
</p>
<a href="index.php">Cancelar</a>
<input type="submit" value="Guardar" />

</form>
