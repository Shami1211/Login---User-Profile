<?php
require('Connection.php');

// Retrieve form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $role = $_POST['role'];
    $status = $_POST['status'];
    $date = $_POST['date'];

    // Insert data into the table
    $sql = "INSERT INTO user (id,name, email, contact, phone, address, role, status, date) VALUES ('$id','$name', '$email', '$contact', '$phone', '$address', '$role', '$status', '$date')";


    if ($conn->query($sql) === true) {
        echo "Data inserted successfully.";
        header("Location: Main_Display.php"); // Redirect to the desplay page
    } else {
        echo "Error inserting data: " . $conn->error;
    }
}

// Close the connection
$conn->close();
?>
