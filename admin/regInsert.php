<?php
include 'config.php';
$username = $_POST['usernameAdmin'];
$email = $_POST['emailAdmin'];
$password = $_POST['passwordAdmin'];

$query = "INSERT INTO admins (username,email, password) VALUES ('$username','$email','$password')";
if (mysqli_query($con,$query)) {
  header("location:login.php");
} else {
  echo "Error: " . $query . "<br>" . mysqli_error($con);
}


?>