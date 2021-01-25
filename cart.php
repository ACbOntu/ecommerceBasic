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
	
   
<!-- cart items details -->

<div class="small-container cart-page">
    <table>
        <tr>
            <th> Product</th>
            <th> Quantity</th>
            <th> Subtotal</th>
        </tr>
       
<?php


$user = $_SESSION['adminId'];
include 'config.php';
$sum = 0;



$query = "SELECT * FROM cart WHERE user_id = ".$user;
$result = mysqli_query($con,$query);
if(mysqli_num_rows($result) > 0) {
 while( $row = mysqli_fetch_array($result)){
	$query1 = "SELECT * FROM products WHERE id = ".$row['product_id'];
	$result1 = mysqli_query($con,$query1);
	if(mysqli_num_rows($result1) > 0) {
	 while( $row1 = mysqli_fetch_array($result1)){
echo ' <tr>
<td>
	<div class="cart-info">
		<img src="images/buy-1.jpg" >
		<div>
<p>'.$row1['product_name'].'</p><small>'.$row1['price'].'</small><br> <a href="removeFromCart.php?id='.$row['id'].'"> Remove</a>
</div>
</div>
</td>';
if($row['quantity']!=0){
	$temp = $row['quantity']*$row1['price'];
	echo '<td>'.$row['quantity'].'</td><td>'; 
}
else{
	echo '<td>1</td><td>';
	$temp = $row1['price'];
}

						echo $temp.'</td></tr>';
					$sum = $sum + $temp;
			
			
 }
}
 }
}
      ?>
    </table>

<div class="total-price">
    <table>
        <tr>
            <td>Subtotal</td>
            <td><?php echo $sum;  ?></td>
        </tr>
        <tr>
            <td>Tax</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Total</td>
            <td><?php echo $sum+50;  ?></td>
        </tr>
    </table>
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