<html>
<head>
</head>
<?php
include_once("AutorCollector.php");
$AutorCollector = new AutorCollector();
?>
<body>
<div id="main">

<a href="formularioAutorInsert.php">Nuevo</a>
<table>
<thead>
	<tr>
		<th>ID</th>
		<th>Nombre</th>
	</tr>
</thead>
<?php
foreach ($AutorCollector->readAutor() as $c){
  echo "<tr>";
  echo "<td>".$c->getIdAutor() ."</td>";
  echo "<td>".$c->getnombreCompleto()."</td>";
  echo "<td><a href='formularioAutorEditar.php?id=".$c->getIdAutor()."'>editar</a></td>";
  echo "<td><a href='eliminar.php?id=".$c->getIdAutor()."'>eliminar</a></td>"; 
  echo "</tr>"; 
}
?>
</table>
</br><a href="../perfilAdmin.php">Regresar a Perfil de Administrador</a></br>
</div>
</body>
</html>
