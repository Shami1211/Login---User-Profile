<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User Register Form</title>
    <link rel="stylesheet" href="insert.css" />
  </head>
  <body>
    <div class="full">
      <div class="container">
        <h2>User Register Form</h2>
        <form action="Main_insert.php" method="POST">
          <table>
            <tr>
              <td><label for="name">Name:</label></td>
              <td><input type="text" id="date" name="name" required /></td>
            </tr>

            <tr>
              <td><label for="age">Email:</label></td>
              <td><input type="email" id="email" name="email" required /></td>
            </tr>
            <tr>
              <td><label for="contact">Contact No:</label></td>
              <td>
                <input
                  type="text"
                  id="contact"
                  name="contact"
                  pattern="[0-9]{10}"
                  required
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
                  required
                />
              </td>
            </tr>
            <tr>
              <td><label for="address">User Address:</label></td>
              <td>
                <input type="text" id="address" name="address" required />
              </td>
            </tr>
            <tr>
              <td><label for="role">Role:</label></td>
              <td><input type="text" id="role" name="role" required /></td>
            </tr>
            <tr>
              <td><label for="status">Status:</label></td>
              <td>
                <input type="status" id="status" name="status" required />
              </td>
            </tr>
            <tr>
              <td><label for="date">Register Date:</label></td>
              <td><input type="date" id="date" name="date" required /></td>
            </tr>
          </table>

          <div class="buttons">
            <button class="regis">Create User</button>
            <button class="regis">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
