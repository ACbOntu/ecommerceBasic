<?php


// $target_dir = "uploads/";
// $target_file = $target_dir . basename($_FILES["productImage"]["name"]);
// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// if (isset($_POST['submit'])) { 

//   }
//   else{
//     echo "Sorry!";
//   } 





include 'config.php';
$name = $_POST['productName'];
$description = $_POST['productDescription'];
$price = $_POST['productPrice'];


$image = $_FILES["productImage"]["name"]; 
    $tempname = $_FILES["productImage"]["tmp_name"];     
        $folder = "uploads/".$image; 
          
    // $db = mysqli_connect("localhost", "root", "", "photos"); 
  
    //     // Get all the submitted data from the form 
    //     $sql = "INSERT INTO image (filename) VALUES ('$filename')"; 
  
    //     // Execute query 
    //     mysqli_query($db, $sql); 
          
        // Now let's move the uploaded image into the folder: image 
        move_uploaded_file($tempname, $folder);
    

$query = "INSERT INTO products (product_name,product_description, price,image) VALUES ('$name','$description','$price','$image')";
if (mysqli_query($con,$query)) {
    header("location:index.php");
  } else {
    echo "Error: " . $query . "<br>" . mysqli_error($con);
  }


?>