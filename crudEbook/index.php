<html>
<head>
</head>
<?php
include_once("EbookCollector.php");
$EbookCollectorObj = new EbookCollector();
?>
<body>
<div id="main">

<a href="formularioEbookInsert.php">Nuevo</a>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>T&iacute;tulo</th>
      <th>Autor</th>
      <th>Precio</th>
      <th>Idioma</th>
      <th>N&uacute;mero de P&aacute;ginas</th>
      <th>Categor&iacute;as</th>
      <th>Isbn</th>
      <th>Editorial</th>
      <th>Traductor</th>
      <th>Portada</th>
      <th>Rese&ntilde;a</th>
      <th>Enlace</th>
    </tr>
  </thead>
  <tbody>

<?php
foreach ($EbookCollectorObj->readEbooks() as $c){
  echo "<tr>";
  echo "<td>".$c->getidEbook() ."</td>";
  echo "<td>".$c->gettitulo()."</td>";
  echo "<td>".$c->getfk_autor() ."</td>";
  echo "<td>".$c->getprecio()."</td>";
  echo "<td>".$c->getidioma()."</td>";
  echo "<td>".$c->getnumero_Paginas() ."</td>";
  echo "<td>".$c->getcategoria()."</td>";
  echo "<td>".$c->getisbn()."</td>";
  echo "<td>".$c->geteditorial() ."</td>";
  echo "<td>".$c->gettraductor()."</td>";
  echo "<td>".$c->getportada()."</td>";
  echo "<td>".$c->getresena() ."</td>";
  echo "<td>".$c->getenlace()."</td>";

  
  echo "<td><a href='formularioEbookEditar.php?id=".$c->getidEbook()."'>editar</a></td>";
  
  echo "<td><a href='eliminar.php?id=".$c->getidEbook()."'>eliminar</a></td>"; 
  echo "</tr>"; 
}
?>

  </tbody>
</table>

</div>
</body>
</html>
