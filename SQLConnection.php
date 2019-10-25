<?php
class SQLConnection {
    private $dbhost = "sql10.freesqldatabase.com";
    private $dbuser = "sql10309698";
    private $dbpass = "9pjQdb3b3q";
    private $db = "sql10309698";
    private $conn;
    public function __construct() {     
    }
    public function OpenCon() {
    $this->conn = new mysqli($this->dbhost, $this->dbuser, $this->dbpass,$this->db) or die("Connect failed: %s\n". $this->conn -> error);
    return $this->conn;
    }
    public function CloseCon($conn) {
    $this->conn -> close();
    }
    public function GETTable() {
       $query = mysqli_query($this->conn, "SELECT * FROM Data") or die ($this->conn->error);
        return  mysqli_fetch_array($query);
    }
    public function InsertTable($guests, $imc) {
        mysqli_query($this->conn, "UPDATE `Data` SET `guests`=".$guests.",`sum_imc`=".$imc." WHERE 1") or die("Connect failed: %s\n". $this->conn -> error);
    }
}
    ?>