<?php
//error_reporting(0);
$conn = mysqli_connect('localhost','root','','testing');
if($conn)
{
	echo "Connection succesfull";
}
else
{
	echo "error";
}
$connect = mysqli_connect('localhost', 'root', '', 'testing');

	$name = $_POST["name"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	$confirmPassword = $_POST["confirmPassword"];
	$phone = $_POST["phone"];
	$city =  $_POST["city"];
	$collegeName = $_POST["collegeName"];
	

	$qy = "INSERT INTO tbl_employee(name, email, password, confirmPassword, phone, city, collegeName) VALUES ('$name', '$email', '$password', '$confirmPassword','$phone','$city','$collegeName')";

	$data = mysqli_query($conn, $qy) or die(mysqli_error($conn));

			if($data)
			{
				echo '<script language="javascript">';
				echo 'alert("Data is successfully sent")';
				echo '</script>';
			}
			else
			{
				echo '<script language="javascript">';
				echo 'alert("All fields are required.")';
				echo '</script>';
			}

?>
<META HTTP-EQUIV="Refresh" CONTENT="0; URL= http://localhost/versatile/index.php">
