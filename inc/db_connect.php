<?php 

class database{
    private $SERVER_NAME = "localhost";
    private $USERNAME = "root";
    private $PASSWORD = "";
    private $DATABASE = "easybuild";
    public $conn;
    
    public function getconnection() {
       $this->conn = null;
       try {
           $this->conn = new mysqli($this->SERVER_NAME,$this->USERNAME, $this
           ->PASSWORD, $this->DATABASE);
        } catch (Expection $expection){
           echo "connection error: " . $expection->getMessage();
       }
       return $this->conn;

    }
}
?>