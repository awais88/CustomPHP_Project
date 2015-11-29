<?php

/* DataBase Connection File */

require_once(dirname(__File__)."/../config.php");               

global $conn;

$DB_Name = $config["db"]["DB_name"];
$DB_UserName = $config["db"]["DB_username"];
$DB_Pass = $config["db"]["DB_password"];
$DB_Server = $config["db"]["DB_server"];

$conn = new mysqli($DB_Server, $DB_UserName, $DB_Pass, $DB_Name);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


?>

