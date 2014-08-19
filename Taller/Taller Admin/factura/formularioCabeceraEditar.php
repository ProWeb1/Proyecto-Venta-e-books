<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>formulario Cabecera</title>
</head>
<body>

<?php
//obtener el valor de ID que viene del metodo GET a traves de HTTP
$id=$_GET["id"];
include_once("CabeceraCollector.php");
include_once("Cabecera.php");
$CabeceraCollectorObj = new CabeceraCollector();
$ObjCabecera = $CabeceraCollectorObj->showCabecera($id);
?>
<h2>Editar Objeto Cabecera </h2>
<form action="editar.php" method="post" >
<p>
Id: <input type="text" name="idCabecera" value="<?php echo $ObjCabecera->getIdCabecera(); ?>" readonly />
</p>

<p>
Nombre: <input type="text" name="total_pagar"  value="<?php echo $ObjCabecera->gettotal(); ?>" autofocus required />
</p>
<a href="index.php">Cancelar</a>
<input type="submit" value="Guardar" />

</form>
