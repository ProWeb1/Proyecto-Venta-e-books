<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>formulario Usuario</title>
</head>
<body>
<form action="insert.php" method="post" >
<p>
Usuario: <input type="text" name="usuario" autofocus required /></br>
Contrase&ntilde;a: <input type="password" name="contrasena" autofocus required /></br>
Ruta de foto: <input type="text" name="foto" autofocus required /></br>
Nombre: <input type="text" name="nombre" autofocus required /></br>
Apellido: <input type="text" name="apellido" autofocus required /></br>
Fecha de Nacimiento: <input type="date" name="fechaNacimiento" autofocus required /></br>
Acerca de mi: <input type="text" name="infoUsuario" autofocus required /></br>
G&eacute;nero:</br> 
Masculino<input type="radio" name="genero" value="m">
Femenino<input type="radio" name="genero" value="f"></br>
Correo: <input type="text" name="email" autofocus required /></br>
Pa&iacute;s: <input type="text" name="pais" autofocus required />
</p>
<input type="submit" value="Enviar"/>

</form>
