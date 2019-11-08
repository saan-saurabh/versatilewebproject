<?php


require("common.php");

 
// Getting the values from the signup page using $_POST[] and cleaning the data submitted by the user.
  
$name = $_POST['name'];
  
$name = mysqli_real_escape_string($con, $name);

  
$email = $_POST['e-mail'];
  
$email = mysqli_real_escape_string($con, $email);

  
$message = $_POST['message'];
  
$message = mysqli_real_escape_string($con, $message);
     
    
$query = "INSERT INTO contact(name, email, message)VALUES('" . $name . "','" . $email . "','" . $message . "')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    
header('location: alertmessage.php?error=We will reach you soon.');


 

?>