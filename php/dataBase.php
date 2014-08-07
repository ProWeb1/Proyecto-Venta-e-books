<?php



class dataBase
{
  public $isConnected;
  protected $datab;

  private $host      = DB_HOST;
  private $username  = DB_USER;
  private $password  = DB_PASS;
  private $dbname    = DB_NAME;

  public function __construct($username, $password, $host, $dbname, $options=array()){
    $this->isConnected = true;

    try { 
      $this->datab = new PDO("mysql:host={$host};dbname={$dbname};charset=utf8", $username, $password, $options);
      $this->datab->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $this->datab->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    } 
    catch(PDOException $e) { 
      $this->isConnected = false;
      throw new Exception($e->getMessage());
    }
  }

  public function Disconnect(){
    $this->datab = null;
    $this->isConnected = false;
  }

  public function getRow($query, $params=array()){
    try{ 
      $stmt = $this->datab->prepare($query); 
      $stmt->execute($params);
      return $stmt->fetch();  
      }catch(PDOException $e){
      throw new Exception($e->getMessage());
    }
  }

  public function getRows($query, $params=array()){
    try{ 
      $stmt = $this->datab->prepare($query); 
      $stmt->execute($params);
      return $stmt->fetchAll();       
      }catch(PDOException $e){
      throw new Exception($e->getMessage());
    }       
  }

  public function insertRow($query, $params){
    try{ 
      $stmt = $this->datab->prepare($query); 
      $stmt->execute($params);
      }catch(PDOException $e){
      throw new Exception($e->getMessage());
    }           
  }

  public function updateRow($query, $params){
    return $this->insertRow($query, $params);
  }

  public function deleteRow($query, $params){
    return $this->insertRow($query, $params);
  }
}

/*
class Database {

    private $host, $username, $password, $con;

    public function __construct($ihost, $iusername, $ipassword){
        $this->host = $ihost;
        $this->username = $iusername;
        $this->password = $ipassword;
        $this->con = false;
        
        return true;
    }

    
    public function selectDatabase($database){
        if($this->con)
        {
            if(mysql_select_db($database))
            {
                //echo "Successfully Connected Database. $database.";
                return true;
            }
            else
            {
                echo "Unknown database.";
            }
        }
        else {
            echo "No active Connection.";
            return false;
        }
    }

    
    public function connect() {
        $connect = mysql_connect($this->host, $this->username, $this->password);
        return $connect;
    }


    public function connectdb(){
        $conn = $this->connect();
        if($conn)
        {
            $this->con = true;
            //echo "Successsfully Connected.";
            return true;
        }
        else {
            echo "Sorry Could Not Connect.";
            return false;
        }
    }
    

     public function disconnectdb(){
        if($this->con)
        {
            if(mysql_close($this->connect()))
            {
                $this->con = false;
                //echo "Successfully disconnected.";
                return true;
            }
        }
        else
        {
            echo "Could Not disconnect.";
            return false;
        }
    }
    
     public function query($query) {
        $result = mysql_query($query);
        if (!$result) die('Invalid query: ' . mysql_error());
        return $result;
    } 

}

*/

?>
