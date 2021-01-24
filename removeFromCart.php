<?php
include 'config.php';
$id =  $_GET['id'];
$query = "DELETE FROM cart WHERE id = ".$id;
if (mysqli_query($con,$query)) {

    header("location:cart.php");
  } else {
	echo "Error: " . $query . "<br>" . mysqli_error($con);
  }

?>