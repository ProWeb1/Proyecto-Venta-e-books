<?php
//require_once 'coneccion.php';
require 'persona.php';

class personaCollector{
	private $presonaCollector = array();
}
      
$conn= mysql_connect("localhost","root", "root") or die (mysql_error());
mysql_select_db("ebbbooks", $conn);
$query = "SELECT * FROM persona"; 
	 
$result = mysql_query($query) or die(mysql_error());
//$result = $sql->query("SELECT * FROM `persona`;");
/*
for ($set = array (); $row = $result->fetch_row(); $set[] = $row){
	print_r($set);
}

//print_r($set);


 //PRUEBA DE QUE SI CREA PERSONAS
echo "<br /> \n";
$andy = new persona(919, "andy", "daniel", "jefferson", "primero", "1994-12-1", 0924953243, "M", "bla@", 911, "la luna", "guayaquil");
print_r ($andy->getCodigo());

*/
while ($row = mysql_fetch_row($result)){
	/*for($i=0; $i<count($row); $i++){
		echo $row[$i];
		echo "<br />";
	}*/
	$per = new persona($row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7],$row[8],$row[9],$row[10],$row[11]);
}

?>