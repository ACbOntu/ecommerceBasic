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
                <img src="images/gallery-1.jpg" width="100%" id="ProductImg">

                <div class="small-img-row">
                    <div class="small-img-col">
                        <img src="images/gallery-1.jpg" width="100" class="ProductImg">
                    </div>
                     <div class="small-img-col">
                        <img src="images/gallery-2.jpg" width="100" class="ProductImg">
                    </div>
                     <div class="small-img-col">
                        <img src="images/gallery-3.jpg" width="100" class="ProductImg">
                    </div>
                     <div class="small-img-col">
                        <img src="images/gallery-4.jpg" width="100" class="ProductImg">
                    </div>
                </div>

            </div>
            <div class="col-2">
                <p> Home / T-shirt</p>
                <h1>Red Printed T-Shirt by HRX </h1>
                <h4>$50.00</h4>
                <select>

                <option> Select Size </option>
                <option> XXL </option>
                <option> XL </option>
                <option> Large </option>
                <option> medium </option>
                <option> Small </option>
            </select>
            
            <input type="number" value="1">
            <a href="" class="btn"> Add to cart </a>
            <h3>product Details <i class="fa fa-indent"> </i> </h3>
            <br>
            <p>Give your summer wardrobe a style upgrade with the HRX Men's Active T-shirt. Team it with a <br> pair of shorts for your morning workout or a denims for an evening out with the guys.</p>

            </div>
        </div>
    </div>
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
    var SmallImg = document.getElementByClassName("small-img");

    SmallImg[0].onclick = function()
    {
        ProductImg.src = SmallImg[0].src;
    }
     SmallImg[1].onclick = function()
    {
        ProductImg.src = SmallImg[1].src;
    }
     SmallImg[2].onclick = function()
    {
        ProductImg.src = SmallImg[2].src;
    }
     SmallImg[3].onclick = function()
    {
        ProductImg.src = SmallImg[3].src;
    }


</script>

</body>
</html>