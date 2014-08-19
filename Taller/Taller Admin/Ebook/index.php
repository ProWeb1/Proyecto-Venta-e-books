<html>
<head>
</head>
<?php
include_once("EbookCollector.php");
$$EbookCollectorObj = new EbookCollector();
?>
<body>
<div id="main">
<table>
<tr><td><a href="formularioEbookInsert.php">Nuevo</a></td></tr>
<?php
foreach ($EbookCollectorObj->readEbooks() as $c){
  echo "<tr>";
  echo "<td>".$c->getidEbook() ."</td>";
  echo "<td>".$c->gettitulo()."</td>";
   echo "<td>".$c->getautor() ."</td>";
  echo "<td>".$c->getprecio()."</td>";

  
  echo "<td><a href='formularioEbookEditar.php?id=".$c->getidEbook()."'>editar</a></td>";
  
  echo "<td><a href='eliminar.php?id=".$c->getidEbook()."'>eliminar</a></td>"; 
  echo "</tr>"; 
}
?>
</table>
</div>
</body>
</html>
