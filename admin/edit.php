
<!DOCTYPE html>
<html lang="en">
<?php include 'header.html' ?>
<body>
<?php include 'nav.html' ?>
<div class="d-flex" id="wrapper">


<?php include 'sidebar.html' ?>

<!-- Page Content -->
<div id="page-content-wrapper">


  <div class="container-fluid mt-2">

<form action="update.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Prpduct Name</label>


    <?php

include 'config.php';
$query = "SELECT * FROM products WHERE id = ".$_POST['id'];
$result = mysqli_query($con,$query);
if(mysqli_num_rows($result) > 0) {
 while( $row = mysqli_fetch_array($result)){
   echo $row['id'];
echo  '<input type="hidden" name="prid" value="'.$row['id'].'">';
?>
    <input type="text" name="productName" class="form-control" value="<?php echo $row['product_name']; ?>" id="exampleInputEmail1" aria-describedby="emailHelp" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Product Description</label>
    <input type="text" rows="5" class="form-control" name="productDescription" value="<?php echo $row['product_description']; ?>" id="exampleInputPassword1" >
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Prpduct price</label>
    <input type="number" name="productPrice" value="<?php echo $row['price']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Prpduct image</label>
    <input type="file" class="form-control" name="productImage" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Product image">
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php

}
}
?>

</div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>