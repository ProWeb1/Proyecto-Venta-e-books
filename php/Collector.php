<?php
include_once('dataBase.php');

// Define configuration
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "root");
define("DB_NAME", "ebbbooks");


class Collector extends dataBase
{
  public static $db;
  private $host      = DB_HOST;
  private $username  = DB_USER;
  private $password  = DB_PASS;
  private $dbname    = DB_NAME;
    
  public function __construct()
  {
    Collector::$db = new dataBase($this->username, $this->password, $this->host, $this->dbname);
  }
 /* 
  public static function prueba(){
	  //Esta funcion es de ejemplo y es de ciclo infinito y recursiva
	  self::$db = 'sfasdf';
	  $obj = new Collector;
	  self::prueba();
  }
*/
}

//Collector::$db = new dataBase();

?>
