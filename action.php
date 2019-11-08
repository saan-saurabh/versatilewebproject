<?php
session_start();


$con = mysqli_connect('localhost','root','','testing');
if($con)
{
	echo "Connection succesfull";
}
else
{
	echo "error";
}

$name = $_POST['user'];
$pass = $_POST['password'];

$q = "SELECT * FROM tbl_employee WHERE email = '$name' && password = '$pass' ";

$result = mysqli_query($con,$q);

$num = mysqli_num_rows($result);

if($num == 1)
{
	$_SESSION['email'] = $name;
	header('location:index.php');
}
else
{
	header('location:Model login.php');
}

?>