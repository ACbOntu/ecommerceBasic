<?php
include 'config.php';
$username = $_POST['username'];
$password = $_POST['password'];


$query = "SELECT * FROM user WHERE username = '$username' AND password = '$password' ";
$result = mysqli_query($con,$query);

if(mysqli_num_rows($result) > 0) {

  session_start();
  $row = mysqli_fetch_array($result);
  
  $_SESSION['name'] = $row['username'];
  $_SESSION['id'] = $row['id'];
    
    header("location:index.php");
}
  else {
    echo "Error: " . $query . "<br>" . mysqli_error($con);
  }

?>