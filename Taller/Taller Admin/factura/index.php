<html>
<head>
</head>
<?php
include_once("CabeceraCollector.php");
$CabeceraCollectorObj = new CabeceraCollector();
?>
<body>
<div id="main">
<table>
<tr><td><a href="formularioCabeceraInsert.php">Nuevo</a></td></tr>
<?php
foreach ($CabeceraCollectorObj->readCabeceras() as $c){
  echo "<tr>";
  echo "<td>".$c->getIdCabecera() ."</td>";
  echo "<td>".$c->getUsuario()."</td>";
  echo "<td>".$c->getfecha()."</td>";
  echo "<td>".$c->gettotal()."</td>";
  echo "<td><a href='formularioCabeceraEditar.php?id=".$c->getIdCabecera()."'>editar</a></td>";
  echo "<td><a href='eliminar.php?id=".$c->getIdCabecera()."'>eliminar</a></td>"; 
  echo "</tr>"; 
}
?>
</table>
</div>
</body>
</html>
