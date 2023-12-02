<?php
require('Connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    $id = $_POST['id'];
    $email = $_POST['email'];

    $sql = "SELECT * FROM user WHERE email = '$email' AND id = '$id'";
    $result = $conn->query($sql);

    if ($result) {
        if ($result->num_rows == 1) {
            echo "<script>alert('User login successful');</script>";
            echo "<script>window.location.href = 'welcome.php';</script>";
        } else {
            echo "<script>alert('User login failed ');</script>";
            echo "<script>window.location.href = 'login.php';</script>";
        }
    } else {
        echo "Query error: " . $conn->error;
    }
    
    $conn->close();
}
?>
