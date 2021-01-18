<?php

  $email =   $_POST['emailAdmin'];
  $password =   $_POST['passwordAdmin'];
  if($email == 'sayma' && $password=='123'){
      session_start();
      $_SESSION['admin'] = 'true';
      header("location:index.php");
   
  }
  else{
      echo "<h2>Sorry! You are not authorized.</h2>";
  }
?>