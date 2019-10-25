<?php
require_once("Data.php");
require_once("SQLConnection.php");

$sqlconnection = new SQLConnection();
$sqlconnection->OpenCon();
$result = $sqlconnection->GETTable();
echo($result["guests"].", ".$result["sum_imc"]."\n");
$sqlconnection->InsertTable(1, 21.63);



?>