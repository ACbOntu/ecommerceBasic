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
	
	<div class="small-container">

        <div class="row row-2">
            <h2> All Products </h2>
             <select>
                <option> Default Shorting</option>
                <option> Short by price</option>
                <option> Short by popularity</option>
                <option> Short by rating</option>
                <option> Short by sale</option>
            </select>
        </div>
	
	 	<div class="row">
	 		<div class="col-4">
    			<img src="images/product-2.jpg" alt="">
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
    			<img src="images/product-3.jpg" alt="">
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
    			<img src="images/product-4.jpg" alt="">
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
    			<img src="images/product-1.jpg" alt="">
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
	 	</div>
        <div class="row">
            <div class="col-4">
                <img src="images/product-5.jpg" alt="">
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
                <img src="images/product-6.jpg" alt="">
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
                <img src="images/product-7.jpg" alt="">
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
                <img src="images/product-8.jpg" alt="">
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

            <div class="page-btn">
                <span>1</span>
                <span>2</span>
                <span>3</span>
                <span>4</span>
                <span>&#8594;</span>
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
		if(MenuItems.style.maxHeight == "0px")
		{
			MenuItems.style.maxHeight = "200px";
		}
		else{
			MenuItems.style.maxHeight ="0px";
		}
	}
	
</script>
</body>
</html>