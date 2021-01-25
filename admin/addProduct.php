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

<form action="createProduct.php" method="post"  enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">Prpduct Name</label>
    <input type="text" name="productName" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Product name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Product Description</label>
    <textarea  class="form-control" name="productDescription" id="exampleInputPassword1" placeholder="Description"></textarea>
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Prpduct price</label>
    <input type="number" name="productPrice" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Product price">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Prpduct image</label>
    <input type="file" class="form-control" name="productImage" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Product image">
  </div>


  <input type="submit" name="submit" value="Submit" class="btn btn-primary">
</form>

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