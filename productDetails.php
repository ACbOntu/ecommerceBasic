<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>All Products - EasyShop </title>
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<?php

$id = $_GET['id'];
include 'config.php';
$query = "SELECT * FROM products WHERE id = ".$id;
$result = mysqli_query($con,$query);
if(mysqli_num_rows($result) > 0) {
 while( $row = mysqli_fetch_array($result)){

?>
		<div class="container">
			<div class="navbar">
					<div class="logo">
						<img src="images/Group 2.png" width="125px">
					</div>
					<nav>
						<ul id="MenuItems">
							<?php include 'menu.php' ?>
						</ul>
					</nav>
					<img src="images/cart.png" width="30px" height="30px">
					<img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
			</div>
		</div>
	
    <!-- single product details -->

    <div class="small-container single-product">
        <div class="row">
            <div class="col-2">
                <img src="admin/uploads/<?php $row['image'] ?>" width="100%" id="ProductImg">

                <div class="small-img-row">
                    <div class="small-img-col">
                        <img src="images/gallery-1.jpg" width="100" class="smallImage1">
                    </div>
                     <div class="small-img-col">
                        <img src="images/gallery-2.jpg" width="100" class="smallImage2">
                    </div>
                     <div class="small-img-col">
                        <img src="images/gallery-3.jpg" width="100" class="smallImage3">
                    </div>
                     <div class="small-img-col">
                        <img src="images/gallery-4.jpg" width="100" class="smallImage4">
                    </div>
                </div>

            </div>
            <div class="col-2">
                <p> Home / T-shirt</p>
                <h1> <?php echo $row['product_name']; ?> </h1>
                <h4><?php echo $row['price']; ?></h4>
                <select>
                <option> Select Size </option>
                <option> XXL </option>
                <option> XL </option>
                <option> Large </option>
                <option> medium </option>
                <option> Small </option>
            </select>
            <form action="saveToCart.php" method="post">
            <input type="number" name="quantity"> pieces
            <input type="hidden" value = "<?php echo $row['id']; ?>" name="id" >
            <input type="submit" class="btn btn-info" value="Add to cart">
            </form>
            <h3>product Details <i class="fa fa-indent"> </i> </h3>
            <br>
            <p><?php echo $row['product_description']; ?></p>
            
            </div>
        </div>
    </div>

    <?php
 }
}
    ?>
<!-- title -->

<div class="small-container">
    <div class="row row-2">
        <h2>Related Products</h2>
        <p>View More</p>
    </div>
</div>

<!-- products  -->

	<div class="small-container">
	 
        <div class="row">
            <div class="col-4">
                <img src="images/product-9.jpg" alt="">
                <h4>Red Printed T-Shirt</h4>
                <div class="rating">     <!-- products rating -->
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-half-o" ></i>
                    <i class="fa fa-star-o" ></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="images/product-10.jpg" alt="">
                <h4>Red Printed T-Shirt</h4>
                <div class="rating">     <!-- products rating -->
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-o" ></i>
                    <i class="fa fa-star-o" ></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="images/product-11.jpg" alt="">
                <h4>Red Printed T-Shirt</h4>
                <div class="rating">     <!-- products rating -->
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-half-o" ></i>
                    <i class="fa fa-star-o" ></i>
                    <i class="fa fa-star-o" ></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="images/product-12.jpg" alt="">
                <h4>Red Printed T-Shirt</h4>
                <div class="rating">     <!-- products rating -->
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-o" ></i>
                    <i class="fa fa-star-o" ></i>
                    <i class="fa fa-star-o" ></i>
                </div>
                <p>$50.00</p>
            </div>
        </div>
    </div>

	 
 
<!-- footer -->

<div class="footer">
	<div class="container">
		<div class="row">
			<div class="footer-col-1">
				<h3>Download our app</h3>
				<p>Download App for Android and ios mobile phone</p>
				<div class="app-logo">
					<img src="images/play-store.png" >
					<img src="images/app-store.png" >
				</div>
			</div>
			<div class="footer-col-2">
				<img src="images/Group 2.png" >
				<p>Our purpose is to sustainable make <br> the pleasure and benefits of sports <br> accessible to the many</p>
			</div>
			<div class="footer-col-3">
				<h3>Useful Links</h3>
				<ul>
					<li>Coupons</li>
					<li>Blog Post</li>
					<li>Return Policy </li>
					<li>Join Affiliate </li>
				</ul>
			</div> 
			<div class="footer-col-4">
				<h3>Useful Links</h3>
				<ul>
					<li>Facebook</li>
					<li>Twitter</li>
					<li>Instagram </li>
					<li>YouTube </li>
				</ul>
			</div>
		</div>
	</div>
</div>

<!-- js for togglemenu -->
<script>
	var MenuItems = document.getElementById("MenuItems"); 

	MenuItems.style.maxHeight = "0px";

	function menutoggle(){
		if(MenuItems.style.maxHeight == "0px";)
		{
			MenuItems.style.maxHeight = "200px";
		}
		else{
			MenuItems.style.maxHeight ="0px";
		}
	}
	
</script>

<!-- js for product gallery -->

<script>
    var ProductImg = document.getElementById("ProductImg");
    var SmallImg1 = document.getElementByClassName("smallImage1");
    var SmallImg2 = document.getElementByClassName("smallImage2");
    var SmallImg3 = document.getElementByClassName("smallImage3");
    var SmallImg4 = document.getElementByClassName("smallImage4");
    SmallImg1.onclick = function()
    {
        ProductImg.src = SmallImg1.src;
    }
     SmallImg2.onclick = function()
    {
        ProductImg.src = SmallImg2.src;
    }
     SmallImg3.onclick = function()
    {
        ProductImg.src = SmallImg3.src;
    }
     SmallImg4.onclick = function()
    {
        ProductImg.src = SmallImg4.src;
    }


</script>

</body>
</html>