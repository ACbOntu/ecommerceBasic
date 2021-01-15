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
	
   

<!-- Account page  -->

<div class="account-page">
	<div class="container">
		<div class="row">
			<div class="col-2">
				<img src="images/image1.png" width="100%">
			</div>
			<div class="col-2">
				<div class="form-container">
					<div class="form-btn">
						<span onclick="login()">Login</span>
						<span onclick="register()">Register</span>
						<hr id="Indicator">
					</div>
					<form id="LoginForm" action="login.php" method = "post">
						<input type="text" name="username" placeholder="Username">
						<input type="password" name="password" placeholder="Password">
						<button type="submit" class="btn"> Login </button>
						<a href="">Forget password</a>
					</form>
					<form id="RegForm" action="reg.php" method = "post">
						<input type="text" name="username" placeholder="Username">
						<input type="email" name="email" placeholder="Email">
						<input type="password" name="password" placeholder="Password">
						<button type="submit" class="btn"> Register</button>
						
					</form>

				</div>	
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

<!-- js for toggle form -->

<script>
	
	var LoginForm = document.getElementById("LoginForm"); 
	var RegForm = document.getElementById("RegForm"); 
	var Indicator = document.getElementById("Indicator"); 

	function register(){
		RegForm.style.transform = "translateX(0px)";
		LoginForm.style.transform = "translateX(0px)";
		Indicator.style.transform = "translateX(100px)";
	}

	function login (){
		RegForm.style.transform = "translateX(300px)";
		LoginForm.style.transform = "translateX(300px)";
		Indicator.style.transform = "translateX(0px)";
	}


</script>

</body>
</html>