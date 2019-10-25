<?php
require_once("Data.php");
require_once("SQLConnection.php");
if (file_exists($_SERVER['DOCUMENT_ROOT'] .'/src/resources/data.bin')) {
    // begin desserialização...
    $file = fopen($_SERVER['DOCUMENT_ROOT'] .'/src/resources/data.bin', 'r');
    $content = fread($file, filesize($_SERVER['DOCUMENT_ROOT'] .'/src/resources/data.bin'));
    $data = unserialize($content);
    fclose($file);
    // end
} else {
    $data = new Data();
}
$sqlconnection = new SQLConnection();
$sqlconnection->OpenCon();
$sqlconnection->GETTable();
$result = $sqlconnection->GETTable();
echo($result["guests"].", ".$result["sum_imc"]);
?>