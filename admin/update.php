<?php
include 'config.php';
$prid = $_POST['prid'];
$name = $_POST['productName'];

$description = $_POST['productDescription'];
$price = $_POST['productPrice'];
$image = $_POST['productImage'];

$query = "UPDATE products SET product_name = '$name',product_description = '$description', price = '$price',image = '$image' WHERE id = '$prid'";
if (mysqli_query($con,$query)) {
    header("location:index.php");
  } else {
    echo "Error: " . $query . "<br>" . mysqli_error($con);
  }


?>