<?php 

$dbHost     = "localhost"; 
$dbUsername = "root"; 
$dbPassword = " "; 
$dbName     = "heavenlysweets"; 

// Create database connection 
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName); 

// Check connection 
if ($conn->connect_error) { 
    die("Connection failed: " .$db->connect_error); 
}else{
    die("Connection Successfull");
}

?>