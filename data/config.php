<?php
class dbConfig {
   public $host;
   public $username;
   public $password;
   public $dab;
   public  $conn;
public function dbConnect() {
    $this->conn = mysqli_connect($this->host,$this->username,$this->password,$this->dab)
     or die("Database Connection Problem.");
  }
}
  $obj = new dbConfig();
  $obj->host = 'localhost';
  $obj->username = 'root';
  $obj->password = '';
  $obj->dab = 'statistics';
  $obj->dbConnect();
?>
