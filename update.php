<?php
require('Connection.php');

// Initialize variables
$id = "";
$name = "";
$email = "";
$contact = "";
$phone = "";
$address = "";
$role = "";
$status = "";
$date = "";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data and update the user details in the database
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $role = $_POST['role'];
    $status = $_POST['status'];
    $date = $_POST['date'];

    $sql = "UPDATE user SET name='$name', email='$email', contact='$contact', phone='$phone', address='$address', role='$role', status='$status', date='$date' WHERE id=(SELECT MAX(id) FROM user)";
    if ($conn->query($sql) === TRUE) {
      echo "<script>
      alert('User account updated successfully.');
      window.location.href = 'Main_Display.php';
    </script>";
    } else {
        echo "Error updating user account: " . $conn->error;
    }
} else {
    // Retrieve data from the "user" table
    $result = $conn->query("SELECT * FROM user ORDER BY id DESC LIMIT 1");

    // Check if any data is available
    if ($result && $result->num_rows > 0) {
        // Fetch the data row
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
    }
}

// Close the connection
$conn->close();
?>
