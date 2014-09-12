<html>
<head>
</head>
<?php
include_once("UsuarioCollector.php");
$UsuarioCollectorObj = new UsuarioCollector();
?>
<body>
<div id="main">
<table>
<tr><td><a href="formularioUsuarioInsert.php">Nuevo</a></td></tr>
<tr>
<td><strong>Id</strong></td>
<td><strong>Usuario</strong></td>
<td><strong>Contrase&ntilde;a</strong></td>
<td><strong>Url de Foto</strong></td>
<td><strong>Nombre</strong></td>
<td><strong>Apellido</strong></td>
<td><strong>Fecha de Nacimiento</strong></td>
<td><strong>Informaci&oacute;n del Usuario</strong></td>
<td><strong>G&eacute;nero</strong></td>
<td><strong>Email</strong></td>
<td><strong>Pa&iacute;s</strong></td></tr>
<?php
foreach ($UsuarioCollectorObj->readUsuarios() as $c){
  echo "<tr>";
  echo "<td>".$c->getIdUsuario() ."</td>";
  echo "<td>".$c->getNombreUsuario()."</td>";
  echo "<td>".$c->getContrasena()."</td>";
  echo "<td>".$c->getFoto()."</td>";
  echo "<td>".$c->getNombre()."</td>";
  echo "<td>".$c->getApellido()."</td>";
  echo "<td>".$c->getFechaNacimiento()."</td>";
  echo "<td>".$c->getInfoUsuario()."</td>";
  echo "<td>".$c->getGenero()."</td>";
  echo "<td>".$c->getEmail()."</td>";
  echo "<td>".$c->getPais()."</td>";
  echo "<td><a href='formularioUsuarioEditar.php?id=".$c->getIdUsuario()."'>editar</a></td>";
  if ($c->getIdUsuario() > 1)
  	echo "<td><a href='eliminar.php?id=".$c->getIdUsuario()."'>eliminar</a></td>"; 
  echo "</tr>"; 
}
?>
<tr><td colspan='11'><a href='../perfilAdmin.php'>Regresar a Perfil de Administrador</a></td></tr>
</table>
</div>
</body>
</html>
