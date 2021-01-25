<?php
session_start();
$id = $_POST['id'];
$x = $_POST['quantity'];
$user = $_SESSION['id'];

include 'config.php';

$query = "INSERT INTO cart (user_id,product_id, quantity) VALUES ('$user','$id','$x')";
if (mysqli_query($con,$query)) {

    header("location:cart.php");
  } else {
	echo "Error: " . $query . "<br>" . mysqli_error($con);
  }

?>