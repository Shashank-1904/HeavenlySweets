<?php
$dbHost     = "157.173.222.78";
$dbUsername = "heavenlysweets-db-user";
$dbPassword = "sWCowdoQTPFd9rWBxL4c";
$dbName     = "heavenlysweets-db";

// Create database connection
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connection successful";
}
?>
