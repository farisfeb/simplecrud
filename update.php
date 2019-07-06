<?php
include_once("connect.php");

if(isset($_POST['update'])){
	$nik = $_POST['nik'];
	$name = $_POST['name'];
	$birthdate = $_POST['birthdate'];
  $gender = $_POST['gender'];
  $address = mysqli_real_escape_string($mysqli, $_POST['address']);
  $telp = $_POST['telp'];
  $email = $_POST['email'];
  $position = $_POST['position'];
  $salary = $_POST['salary'];

	$result = mysqli_query($mysqli, "UPDATE simplecrud SET nik='$nik', name='$name',
		birthdate='$birthdate', gender='$gender', address='$address', telp='$telp',
		email='$email', position='$position', salary='$salary' WHERE nik=$nik");

	header("Location: index.php");
	}

$nik = $_GET['nik'];
$result = mysqli_query($mysqli, "SELECT * FROM simplecrud WHERE nik=$nik");

while($res = mysqli_fetch_array($result)){
	$name = $res['name'];
	$birthdate = $res['birthdate'];
	$gender = $res['gender'];
	$address = $res['address'];
	$telp = $res['telp'];
	$email = $res['email'];
	$position = $res['position'];
	$salary = $res['salary'];
}

?>
<html>
<head>
	<title>Update Data</title>
</head>

<body>
	<a href="index.php">Home</a><br>
	<h1/>Update Data<h1/>

	<form method="post" action="<?php $_PHP_SELF;?>">
		<table width="50%">
			<tr>
        <td>Name</td>
        <td><input name="name" value="<?php echo $name;?>"></td>
      </tr>
      <tr>
        <td>Birthdate</td>
        <td><input type="date" name="birthdate" value="<?php echo $birthdate;?>"></td>
      </tr>
      <tr>
        <td>Gender</td>
        <td>
          <input type="radio" name="gender" value="M" <?php if($gender == "M"){echo "checked";}?>>Male
          <input type="radio" name="gender" value="F" <?php if($gender == "F"){echo "checked";}?>>Female
        </td>
      </tr>
      <tr>
        <td>Address</td>
        <td><input name="address" value="<?php echo $address;?>"></td>
      </tr>
      <tr>
        <td>Telp</td>
        <td><input name="telp" value="<?php echo $telp;?>"></td>
      </tr>
      <tr>
        <td>Email</td>
        <td><input type="email" name="email" value="<?php echo $email;?>"></td>
      </tr>
      <tr>
        <td>Position</td>
        <td><input name="position" value="<?php echo $position;?>"></td>
      </tr>
      <tr>
        <td>Salary</td>
        <td><input name="salary" value="<?php echo $salary;?>"></td>
      </tr>
			<tr>
				<td><input type="hidden" name="nik" value=<?php echo $_GET['nik'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
