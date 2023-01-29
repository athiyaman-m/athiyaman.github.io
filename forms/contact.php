<?php

$name = $_POST['name'];
$email  = $_POST['email'];
$msg = $_POST['message'];

if (!empty($name) || !empty($email) || !empty($msg))
{

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "portfolio";

// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{
  $INSERT = "INSERT Into info (name , email ,msg)values(?,?,?,?)";
  echo "Message sent";
  die();
}
}
?>
