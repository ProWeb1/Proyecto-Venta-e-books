<html>
<head>
</head>
<?php
include_once("AutorCollector.php");
$AutorCollectorObj = new AutorCollector();
?>
<body>
<div id="main">
<table>
<tr><td><a href="formularioAutorInsert.php">Nuevo</a></td></tr>
<?php
foreach ($AutorCollectorObj->readAutor() as $c){
  echo "<tr>";
  echo "<td>".$c->getIdAutor() ."</td>";
  echo "<td>".$c->getnombreCompleto()."</td>";
  echo "<td><a href='formularioAutorEditar.php?id=".$c->getIdAutor()."'>editar</a></td>";
  echo "<td><a href='eliminar.php?id=".$c->getIdAutor()."'>eliminar</a></td>"; 
  echo "</tr>"; 
}
?>
</table>
</div>
</body>
</html>
