<?php

  $username =   $_POST['usernameAdmin'];
  $password =   $_POST['passwordAdmin'];
  include 'config.php';
  
  $query = "SELECT * FROM admins WHERE username = '$username' AND password = '$password' ";
  $result = mysqli_query($con,$query);
  
  if(mysqli_num_rows($result) > 0) {
  
    session_start();
    $row = mysqli_fetch_array($result);
    
    $_SESSION['admin'] = $row['username'];
    $_SESSION['adminId'] = $row['id'];
      
      header("location:index.php");
  }
    else {
      echo "Error: " . $query . "<br>" . mysqli_error($con);
    }
 
?>