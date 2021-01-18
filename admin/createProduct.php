<?php
include 'config.php';
$name = $_POST['productName'];
$description = $_POST['productDescription'];
$price = $_POST['productPrice'];
$image = $_POST['productImage'];

echo $price;
$query = "INSERT INTO products (product_name,product_description, price,image) VALUES ('$name','$description','$price','$image')";
if (mysqli_query($con,$query)) {
    header("location:index.php");
  } else {
    echo "Error: " . $query . "<br>" . mysqli_error($con);
  }


?>