<?php
session_start();
if(isset($_SESSION['admin'])){

?>


<!DOCTYPE html>
<html lang="en">

<?php include 'header.html' ?>

<body>
<?php include 'nav.html' ?>
  <div class="d-flex" id="wrapper" >

   
  <?php include 'sidebar.html' ?>
    <!-- Page Content -->
    <div id="page-content-wrapper">


      <div class="container-fluid">

      <?php include 'products.php'; ?>

        </div>
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

<?php
}
else{
  echo "You are not authorized!!";
  header("location:login.php");
}

?>