<?php
include 'config.php';
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$query = "INSERT INTO user (username,email, password) VALUES ('$username','$email','$password')";
if (mysqli_query($con,$query)) {
  header("location:account.php");
} else {
  echo "Error: " . $query . "<br>" . mysqli_error($con);
}


?>