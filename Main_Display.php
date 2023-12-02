<?php
require('Connection.php');

// Retrieve data from the "user" table
$result = $conn->query("SELECT * FROM user ORDER BY id DESC LIMIT 1");

if ($result) {
    if ($result->num_rows > 0) {
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
    } else {
        // No data available
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
} else {
    // An error occurred
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

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>User Account</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <link rel="stylesheet" href="insert.css" />
  </head>
  <body>
    <br /><br /><br />
    <div class="full">
      <div class="container">
        <div class="boxs">
          <div>
            <div id="userforms">
              <form action="Main_insert.php" method="POST">
                <table>
                  <tr>
                    <td><label for="name">id:</label></td>
                    <td>
                      <input
                        type="text"
                        id="id"
                        name="id"
                        value="<?php echo $id; ?>"
                        readonly
                      />
                    </td>
                  </tr>
                  <tr>
                    <td><label for="name">Name:</label></td>
                    <td>
                      <input
                        type="text"
                        id="date"
                        name="name"
                        value="<?php echo $name; ?>"
                        readonly
                      />
                    </td>
                  </tr>

                  <tr>
                    <td><label for="age">Email:</label></td>
                    <td>
                      <input
                        type="email"
                        id="email"
                        name="email"
                        value="<?php echo $email; ?>"
                        readonly
                      />
                    </td>
                  </tr>
                  <tr>
                    <td><label for="contact">Contact No:</label></td>
                    <td>
                      <input
                        type="text"
                        id="contact"
                        name="contact"
                        pattern="[0-9]{10}"
                        value="<?php echo $contact; ?>"
                        readonly
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
                        value="<?php echo $phone; ?>"
                        readonly
                      />
                    </td>
                  </tr>
                  <tr>
                    <td><label for="address">User Address:</label></td>
                    <td>
                      <input
                        type="text"
                        id="address"
                        name="address"
                        value="<?php echo $address; ?>"
                        readonly
                      />
                    </td>
                  </tr>
                  <tr>
                    <td><label for="role">Role:</label></td>
                    <td>
                      <input
                        type="text"
                        id="role"
                        name="role"
                        value="<?php echo $role; ?>"
                        readonly
                      />
                    </td>
                  </tr>
                  <tr>
                    <td><label for="status">Status:</label></td>
                    <td>
                      <input
                        type="status"
                        id="status"
                        name="status"
                        value="<?php echo $status; ?>"
                        readonly
                      />
                    </td>
                  </tr>
                  <tr>
                    <td><label for="date">Register Date:</label></td>
                    <td>
                      <input
                        type="date"
                        id="date"
                        name="date"
                        value="<?php echo $date; ?>"
                        readonly
                      />
                    </td>
                  </tr>
                </table>
              </form>
              <table>
                <tr>
                  <div class="btnc">
                    <td>
                      <button
                        id="bottone"
                        type="submit"
                        class="regis"
                        onclick="location.href='MainUpdate.php'"
                      >
                        Update
                      </button>
                    </td>
                  </div>
                  <form
                    action="Delete.php"
                    method="POST"
                    onsubmit="return confirmDelete();"
                  >
                    <!-- ... existing form fields ... -->
                    <input
                      type="hidden"
                      name="id"
                      value="<?php echo $row['id']; ?>"
                    />
                    <div class="btnc">
                      <td>
                        <button
                          id="bottonede"
                          type="submit"
                          class="regis d"
                          name="delete"
                        >
                          Delete
                        </button>
                      </td>
                    </div>
                  </form>
                </tr>
              </table>
              <br />
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Link JS file -->
    <script src="Delete.js"></script>
  </body>
</html>
