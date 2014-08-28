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
<a href='../perfilAdmin.php'>Regresar a Perfil de Adminstrador</a
</table>
</div>
</body>
</html>
