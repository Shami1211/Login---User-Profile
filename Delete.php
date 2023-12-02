<?php
require('Connection.php');

// Check if the delete button is clicked
if (isset($_POST["delete"])) {
    // Get the ID of the record to be deleted
    $id = $_POST["id"];

    // Delete the record from the "udetail" table
    $sql = "DELETE FROM user WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

// Close the connection
$conn->close();

// Redirect to the main display page after deletion
header("Location: insert.php");
exit();
?>
