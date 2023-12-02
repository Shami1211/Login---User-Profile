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







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="insert.css" />
    <script>
    // Function to display an alert box with the success message
    function showSuccessMessage() {
      alert("Record updated successfully");
      window.location.href = "Main_Display.php";
    }
  </script>
</head>
<body>
   
    <br><br><br>
    
    <!-- User account update form -->
    <div class="full">
        <div class="container">
            <div id="userforms">
            <form action="update.php" method="POST">
                <h3 class="ach_i">Update Account Details</h3>
                <br>
                <table>
        <tr>
            <td><label for="name">id:</label></td>
            <td><input type="text" id="id" name="id" value="<?php echo $id; ?>"  readonly/></td>
          </tr>
          <tr>
            <td><label for="name">Name:</label></td>
            <td><input type="text" id="date" name="name" value="<?php echo $name; ?>" require /></td>
          </tr>

          <tr>
            <td><label for="age">Email:</label></td>
            <td><input type="email" id="email" name="email" value="<?php echo $email; ?>" require /></td>
          </tr>
          <tr>
            <td><label for="contact">Contact No:</label></td>
            <td>
              <input
                type="text"
                id="contact"
                name="contact"
                pattern="[0-9]{10}"
                value="<?php echo $contact; ?>" require
              />
            </td>
          </tr>
          <tr>
            <td><label for="mobile">User Phone:</label></td>
            <td>
              <input
                type="tel"
                id="phone"
                name="phone"
                pattern="[0-9]{10}"
                value="<?php echo $phone; ?>" require
              />
            </td>
          </tr>
          <tr>
            <td><label for="address">User Address:</label></td>
            <td><input type="text" id="address" name="address" value="<?php echo $address; ?>" require /></td>
          </tr>
          <tr>
            <td><label for="role">Role:</label></td>
            <td><input type="text" id="role" name="role" value="<?php echo $role; ?>" require /></td>
          </tr>
          <tr>
            <td><label for="status">Status:</label></td>
            <td><input type="status" id="status" name="status" value="<?php echo $status; ?>" require /></td>
          </tr>
          <tr>
            <td><label for="date">Register Date:</label></td>
            <td><input type="date" id="date" name="date" value="<?php echo $date; ?>" require /></td>
          </tr>
    </table>
                <div class="btncr">
                    <button id="bottone" type="submit" class="regis">Update</button>
                </div>
            </form>
            </div>
        </div>
    </div>

    <br><br><br>

</body>
</html>
