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
  echo "<td>".$c->getNombre()."</td>";
  echo "<td>".$c->getContrasena()."</td>";
  echo "<td><a href='formularioUsuarioEditar.php?id=".$c->getIdUsuario()."'>editar</a></td>";
  echo "<td><a href='eliminar.php?id=".$c->getIdUsuario()."'>eliminar</a></td>"; 
  echo "</tr>"; 
}
?>
</table>
</div>
</body>
</html>
