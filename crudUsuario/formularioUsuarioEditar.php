<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>formulario Usuario</title>
</head>
<body>

<?php
//obtener el valor de ID que viene del metodo GET a traves de HTTP
$id=$_GET["id"];
include_once("UsuarioCollector.php");
include_once("Usuario.php");
$UsuarioCollectorObj = new UsuarioCollector();
$ObjUsuario = $UsuarioCollectorObj->showUsuario($id);
?>
<h2>Editar Objeto Usuario </h2>
<form action="editar.php" method="post" >
<p>
Id: <input type="text" name="idUsuario" value="<?php echo $ObjUsuario->getIdUsuario(); ?>" readonly />
</p>

<p>
Usuario: <input type="text" name="nombreUsuario"  value="<?php echo $ObjUsuario->getNombreUsuario(); ?>" autofocus required />
</p>
<p>
Contrase&ntilde;a: <input type="password" name="contrasena"  value="<?php echo $ObjUsuario->getContrasena(); ?>" autofocus required />
</p>
<p>
Ruta de foto: <input type="text" name="foto"  value="<?php echo $ObjUsuario->getFoto(); ?>" autofocus required />
</p>
<p>
Nombre: <input type="text" name="nombre"  value="<?php echo $ObjUsuario->getNombre(); ?>" autofocus required />
</p>
<p>
Apellido: <input type="text" name="apellido"  value="<?php echo $ObjUsuario->getApellido(); ?>" autofocus required />
</p>
<p>
Fecha de Nacimiento: <input type="date" name="fechaNacimiento"  value="<?php echo $ObjUsuario->getFechaNacimiento(); ?>" autofocus required />
</p>
<p>
Acerda de mi: <input type="text" name="infoUsuario"  value="<?php echo $ObjUsuario->getInfoUsuario(); ?>" autofocus required />
</p>
<p>
G&eacute;nero: <input type="text" name="genero"  value="<?php echo $ObjUsuario->getGenero(); ?>" autofocus required />
</p>
<p>
Correo: <input type="text" name="email"  value="<?php echo $ObjUsuario->getEmail(); ?>" autofocus required />
</p>
<p>
Pa&iacute;s: <input type="text" name="pais"  value="<?php echo $ObjUsuario->getPais(); ?>" autofocus required />
</p>
<a href="index.php">Cancelar</a>
<input type="submit" value="Guardar" />

</form>
