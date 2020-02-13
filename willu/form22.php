

<!DOCTYPE html>
<html>
<head>
  <title>Student Registration Form</title>
 
</head>
<body>
 

  <form method="POST" action="form_validation.php">
    <table>
      <tr>
        <td>First Name </td>
        <td><input type="text" name="fname" id="fname"></td>
      </tr>

      <tr>
        <td>Last Name </td>
        <td><input type="text" name="lname" id="lname"></td>
      </tr>

      <tr>
        <td>age </td>
        <td><input type="text" name="age" id="age"></td>
      </tr>

      <tr>
        <td>Gender </td>
        <td><input type="radio" name="gender" value="Female">Female
          <input type="radio" name="gender" value="Male">Male
          <input type="radio" name="gender" value="other">Other
          </td>
      </tr>

      <tr>
        <td>Phone No </td>
        <td><input type="text" name="phone"></td>
      </tr>

      <tr>
        <td>Email-ID </td>
        <td><input type="text" name="email"></td>
      </tr>

      <tr>
        <td>Username </td>
        <td><input type="text" name="username"></td>
      </tr>

      <tr>
        <td>Password </td>
        <td><input type="password" name="password"></td>
      </tr>

      <tr>
        <td>Confirm Password </td>
        <td><input type="password" name="cpassword"></td>
      </tr>

      <tr>
          <td colspan="2"><center><input type="submit" name="submit" value="SUBMIT"></center></td>
      </tr>
    </table>
  </form>

 

</body>
</html>

