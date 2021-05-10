<?php
class Connect{
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "blog";
    protected $conn ;
    public function __construct(){
      
      // Create connection
      $this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);
      // Check connection
      if (!$this->conn) {
        die("Connection failed: " . mysqli_connect_error());
      }
    }
    public function __destruct(){
      mysqli_close($this->conn);
    }
  }
?>