<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>formulario Ebook</title>
</head>
<body>

<?php
//obtener el valor de ID que viene del metodo GET a traves de HTTP
$id=$_GET["id"];
include_once("EbookCollector.php");
include_once("Ebook.php");
$EbookCollectorObj = new EbookCollector();
$ObjEbook = $EbookCollectorObj->showEbooks($id);
?>
<h2>Editar Objeto Ebook </h2>
<form action="editar.php" method="post" >

<p>
Id: <input type="text" name="idEbook" value="<?php echo $ObjEbook->getidEbook(); ?>" readonly />
</p>

<p>
Titulo: <input type="text" name="titulo"  value="<?php echo $ObjEbook->gettitulo(); ?>" autofocus required />
</p>

<p>
fk_autor: <input type="text" name="fk_autor"  value="<?php echo $ObjEbook->getfk_autor(); ?>" autofocus required />
</p>

<p>
precio: <input type="text" name="precio"  value="<?php echo $ObjEbook->getprecio(); ?>" autofocus required />
</p>

<p>
idioma: <input type="text" name="idioma"  value="<?php echo $ObjEbook->getidioma(); ?>" autofocus required />
</p>

<p>
numero_Paginas: <input type="text" name="numero_Paginas"  value="<?php echo $ObjEbook->getnumero_Paginas(); ?>" autofocus required />
</p>

<p>
categoria: <input type="text" name="categoria"  value="<?php echo $ObjEbook->getcategoria(); ?>" autofocus required />
</p>

<p>
isbn: <input type="text" name="isbn"  value="<?php echo $ObjEbook->getisbn(); ?>" autofocus required />
</p>

<p>
editorial: <input type="text" name="editorial"  value="<?php echo $ObjEbook->geteditorial(); ?>" autofocus required />
</p>

<p>
traductor: <input type="text" name="traductor"  value="<?php echo $ObjEbook->gettraductor(); ?>" autofocus required />
</p>

<p>
portada: <input type="text" name="portada"  value="<?php echo $ObjEbook->getportada(); ?>" autofocus required />
</p>

<p>
resena: <input type="text" name="resena"  value="<?php echo $ObjEbook->getresena(); ?>" autofocus required />
</p>

<p>
enlace: <input type="text" name="enlace"  value="<?php echo $ObjEbook->getenlace(); ?>" autofocus required />
</p>

<a href="index.php">Cancelar</a>
<input type="submit" value="Guardar" />

</form>
