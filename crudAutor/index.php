<html>
<head>
</head>
<?php
include_once("AutorCollector.php");
$AutorCollector = new AutorCollector();
?>
<body>
<div id="main">
<table>
<tr><td><a href="formularioAutorInsert.php">Nuevo</a></td></tr>
<?php
foreach ($AutorCollector->readAutor() as $c){
  echo "<tr>";
  echo "<td>".$c->getIdAutor() ."</td>";
  echo "<td>".$c->getnombreCompleto()."</td>";
  echo "<td>".$c->getFoto()."</td>";
  echo "<td><a href='formularioAutorEditar.php?id=".$c->getIdAutor()."'>editar</a></td>";
  echo "<td><a href='eliminar.php?id=".$c->getIdAutor()."'>eliminar</a></td>"; 
  echo "</tr>"; 
}
?>
</table>
</div>
</body>
</html>
