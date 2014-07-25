<?php
//require 'coneccion.php';
//require 'persona.php';

class personaCollector{
	private $presonaCollector = array();
}
//CONEXION
$sql = new MySQLi('localhost', 'root', 'root', 'ebbbooks');

$result = $sql->query("SELECT * FROM `persona`;");

for ($set = array (); $row = $result->fetch_row(); $set[] = $row);
print_r($set);



?>