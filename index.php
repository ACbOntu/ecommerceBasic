<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>EasyShop | Ecommerce Website Design</title>
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
	<div class="header">
		<div class="container">
			<div class="navbar">
                              <div class="logo">
						<a href="index.html"><img src="images/Group 2.png" width="125px"></a>
					</div>
					<nav>
						<ul id="MenuItems">
						<?php include 'menu.php' ?>
						</ul>
					</nav>
					<a href="cart.html"><img src="images/cart.png" width="30px" height="30px"></a>

					<img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
			</div>
					<div class="row">
							<div class="col-2">
								<h1>Give Your Workout <br>A New Style!</h1>
								<p>Success isn't always about greatness. It's about consistency. Consistent<br> hard work gains success. Greatness will come</p>
								<a href=""class= "btn">Explore Now &#8594</a>
							</div>
                            
                            <div class="col-2">
                                <img src="images/image1.png" alt="">
                            </div>
					</div>
		</div>
	</div>
	<!-- featured categories -->

	<div class="row" style="margin-top:40px;">
				<div class="col-3">
					<img src="images/category-1.jpg" alt="">
				</div>
				<div class="col-3">
					<img src="images/category-2.jpg" alt="">
				</div>
				<div class="col-3">
					<img src="images/category-3.jpg" alt="">
				</div>
		    </div>

	<div class="categories">
		<div class="small-container">
		
		</div>
	</div>

	 <!-- featured products -->

	 <div class="small-container">
	 	<h2 class="title">Featured Products</h2>
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
	 	<h2 class="title"> Latest Products</h2>
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
    			    <i class="fa fa-star-half-o" ></i>
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
    				<i class="fa fa-star" ></i>
    			    <i class="fa fa-star-half-o" ></i>
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
    				<i class="fa fa-star" ></i>
    			    <i class="fa fa-star-half-o" ></i>
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
    			    <i class="fa fa-star-half-o" ></i>
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
    				<i class="fa fa-star" ></i>
    			    <i class="fa fa-star-half-o" ></i>
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
    				<i class="fa fa-star" ></i>
    			    <i class="fa fa-star-half-o" ></i>
    				<i class="fa fa-star-o" ></i>
    			</div>
    			<p>$50.00</p>
    		</div>
	 	</div>
	 </div>
	  <!-- offer -->

	  <div class="offer">
    	<div class="small-container">
    		<div class="row">
    			<div class="col-2">
    				<img src="images/exclusive.png" class="offer-img">
    			</div>
    			<div class="col-2">
    				<p>Exclusive Available on easyshop</p>
    				<h1>Smart Band 4</h1>
    				<small>The Mi Smart Band 4 features a 39.9% larger (then Band 3) AMOLIED color <br> full touch display with adjustable brightness, so everything is clear as can be </small><br>
				<a href="" class= "btn"> Buy Now &#8594; </a>
			    </div>

    		</div>
    	</div>
    </div>

     <!-- testimonial -->
    <div class="testimonial">
    	<div class="small-container">
    		<div class="row">
    			<div class="col-3">
    				<i class="fa fa-quote-left" ></i>
    				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br> Quisque orci nunc, laoreet in pellentesque eget, tempor id  <br> purus. Praesent luctus dui non magna ultricies mattis. Duis eu <br> nulla vestibulum, hendrerit lectus quis, eleifend metus.</p><br>
    				<div class="rating">     <!-- products rating -->
    				<i class="fa fa-star" ></i>
    				<i class="fa fa-star" ></i>
    				<i class="fa fa-star" ></i>
    				<i class="fa fa-star-half-o" ></i>
    				<i class="fa fa-star-o" ></i>
    			</div>
    				<img src="images/user-1.png" alt="">
    				<h3>Sean Parker</h3>
    			</div>
    			<div class="col-3">
    				<i class="fa fa-quote-left" ></i>
    				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br> Quisque orci nunc, laoreet in pellentesque eget, tempor id <br> purus. Praesent luctus dui non magna ultricies mattis. Duis eu <br> nulla vestibulum, hendrerit lectus quis, eleifend metus.</p><br>
    				<div class="rating">     <!-- products rating -->
    				<i class="fa fa-star" ></i>
    				<i class="fa fa-star" ></i>
    				<i class="fa fa-star" ></i>
    				<i class="fa fa-star-half-o" ></i>
    				<i class="fa fa-star-o" ></i>
    			</div>
    				<img src="images/user-2.png" alt="">
    				<h3>Mike Smith</h3>
    			</div>
    			<div class="col-3">
    				<i class="fa fa-quote-left" ></i>
    				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br> Quisque orci nunc, laoreet in pellentesque eget, tempor id <br> purus. Praesent luctus dui non magna ultricies mattis. Duis eu <br> nulla vestibulum, hendrerit lectus quis, eleifend metus.</p><br>
    				<div class="rating">     <!-- products rating -->
    				<i class="fa fa-star" ></i>
    				<i class="fa fa-star" ></i>
    				<i class="fa fa-star" ></i>
    				<i class="fa fa-star-half-o" ></i>
    				<i class="fa fa-star-o" ></i>
    			</div>
    				<img src="images/user-3.png" alt="">
    				<h3>Mabel Joe</h3>
    			</div>
    		</div>
    	</div>
    </div>
 <!-- brands -->

 <div class="brands">
 	<div class="small-container">
 		<div class="row">
 			<div class="col-5">
 				<img src="images/logo-godrej.png" alt="">
 			</div>
 			<div class="col-5">
 				<img src="images/logo-oppo.png" alt="">
 			</div>
 			<div class="col-5">
 				<img src="images/logo-paypal.png" alt="">
 			</div>
 			<div class="col-5">
 				<img src="images/logo-philips.png" alt="">
 			</div>
 			<div class="col-5">
 				<img src="images/logo-coca-cola.png" alt="">
 			</div>
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
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


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