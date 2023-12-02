<?php
require('Connection.php');

// Retrieve data from the "user" table
$result = $conn->query("SELECT * FROM user ORDER BY id DESC LIMIT 1");

// Check if any data is available
if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $id = $row['id'];
    $name = $row['name'];
    $email = $row['email'];
    $contact = $row['contact'];
    $phone = $row['phone'];
    $address = $row['address'];
    $role = $row['role'];
    $status = $row['status'];
    $date = $row['date'];
} else {
    // No data available or an error occurred
    $id = "";
    $name = "";
    $email = "";
    $contact = "";
    $phone = "";
    $address = "";
    $role = "";
    $status = "";
    $date = "";
}

// Close the connection
$conn->close();
?>
