<?php
include("connect.php");

$nik = $_GET['nik'];
$result = mysqli_query($mysqli, "DELETE FROM simplecrud WHERE nik=$nik");
header("Location:index.php");
?>
