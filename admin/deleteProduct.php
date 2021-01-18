<?php

$id =  $_POST['id'];
include 'config.php';
$query = "DELETE FROM products WHERE id =".$id;
$result = mysqli_query($con,$query);
header("location:index.php");
?>