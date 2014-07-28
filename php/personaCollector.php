<?php
//require_once 'coneccion.php';
require 'persona.php';
$counter = 0;
class personaCollector{
	private $presonaCollector = array();
}
//CONEXION CON LA BD Y TABLA    
$conn= mysql_connect("localhost","root", "root") or die (mysql_error());
mysql_select_db("ebbbooks", $conn);
$query = "SELECT * FROM persona"; 	 
$result = mysql_query($query) or die(mysql_error());
//**********************************

while ($row = mysql_fetch_row($result)){ //LEE UNO DE LOS ELEMENTOS DE LA TABLA CON CADA VUELTA
	//CREA UNA NUEVA PERSONA CON LOS DATOS DE ROW
	$per = new persona($row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7],$row[8],$row[9],$row[10],$row[11]);
	//ASIGNA LA PERSONA AL ARREGLO DEL COLECTOR
	$personaCollector[$counter] = $per;
	$counter++;
}

//LEYENDO DATOS DEL COLECTOR
echo "REGISTROS DENTRO DEL COLECTOR <br />";
for ($i=0; $i<count($personaCollector); $i++){
	echo "Codigo: ".$personaCollector[$i]->getCodigo()." <br />";
	echo "Nombre: ".$personaCollector[$i]->getPrimerNombre()." <br />";
	echo "Apellido: ".$personaCollector[$i]->getPrimerApellido()." <br />";
	echo "<br />";
}
?>