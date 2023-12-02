<?php
$servername = "localhost";  // database server name
$username = "root";  // database username
$password = "";  // database password
$dbname = "user";  // database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
