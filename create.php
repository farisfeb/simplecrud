<?php
include_once("connect.php");

if(isset($_POST['create'])){
  $nik = $_POST['nik'];
	$name = $_POST['name'];
	$birthdate = $_POST['birthdate'];
  $gender = $_POST['gender'];
  $address = mysqli_real_escape_string($mysqli, $_POST['address']);
  $telp = $_POST['telp'];
  $email = $_POST['email'];
  $position = $_POST['position'];
  $salary = $_POST['salary'];

	$result = mysqli_query($mysqli, "INSERT INTO simplecrud VALUES('$nik','$name','$birthdate', '$gender',
    '$address','$telp','$email','$position','$salary')");
  header("Location: index.php");
}
?>
<html>
<head>
	<title>Add New Data</title>
</head>
<body>
  <a href="index.php">Home</a><br>
  <h1>Add New Data</h1>
  
  <form action="<?php $_PHP_SELF; ?>" method="post">
    <table width="50%">
      <tr>
        <td>NIK</td>
        <td><input type="text" name="nik" required></td>
      </tr>
      <tr>
        <td>Name</td>
        <td><input name="name" required></td>
      </tr>
      <tr>
        <td>Birthdate</td>
        <td><input type="date" name="birthdate" required></td>
      </tr>
      <tr>
        <td>Gender</td>
        <td>
          <input type="radio" name="gender" value="M" checked>Male
          <input type="radio" name="gender" value="F">Female
        </td>
      </tr>
      <tr>
        <td>Address</td>
        <td><input name="address" required></td>
      </tr>
      <tr>
        <td>Telp</td>
        <td><input name="telp" value="+62" required></td>
      </tr>
      <tr>
        <td>Email</td>
        <td><input type="email" name="email" required></td>
      </tr>
      <tr>
        <td>Position</td>
        <td><input name="position" required></td>
      </tr>
      <tr>
        <td>Salary</td>
        <td><input name="salary" required></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" name="create" value="Create"></td>
      </tr>
    </table>
  </form>
</body>
</html>
