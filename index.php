<?php
include_once("connect.php");
$result = mysqli_query($mysqli, "SELECT * FROM simplecrud ORDER BY nik");
?>

<html>
<head>
	<title>Home | Simple CRUD App</title>
</head>
<body>
	<h1>Simple CRUD App</h1>
	<a href="create.php">Add New Data</a><br>
	<table width="100%" border="0">
	<tr>
		<td>NIK</td>
		<td>Name</td>
		<td>Birthdate</td>
		<td>Gender</td>
		<td>Address</td>
		<td>Telp</td>
		<td>Email</td>
		<td>Position</td>
		<td>Salary</td>
	</tr>
	<?php
	while($res = mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<td>".$res['nik']."</td>";
		echo "<td>".$res['name']."</td>";
		echo "<td>".$res['birthdate']."</td>";
		echo "<td>".$res['gender']."</td>";
		echo "<td>".$res['address']."</td>";
		echo "<td>".$res['telp']."</td>";
		echo "<td>".$res['email']."</td>";
		echo "<td>".$res['position']."</td>";
		echo "<td>".$res['salary']."</td>";
		echo "<td><a href=\"update.php?nik=$res[nik]\">Edit</a> | <a href=\"delete.php?nik=$res[nik]\"
		 onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
	}
	?>
	</table>
</body>
</html>
