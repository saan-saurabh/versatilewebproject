<?php
require("common.php");



$con = mysqli_connect('localhost','root','','organization');
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

$q = "SELECT * FROM users WHERE email = '$name' && password = '$pass' ";

$result = mysqli_query($con,$q);



$num = mysqli_num_rows($result);

if($num == 1)
{
	$row=mysqli_fetch_assoc($result);
	 $username=$row['name'];
	$_SESSION['email'] = $name;
	$_SESSION['name'] = $username;
	 echo $_SESSION['name'];
	header('location:afterlogin.php');
}
else
{
	header('location:Model login.php');
}

?>