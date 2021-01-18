<html>
<body>   
    <head> 
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="login.css" rel="stylesheet">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
    <h3>Admin Login</h3>
    </div>

    <!-- Login Form -->
    <form action="loginCheck.php" method="post">
      <input type="text" id="login" class="fadeIn second" name="emailAdmin" placeholder="username">
      <input type="password" id="password" class="fadeIn third" name="passwordAdmin" placeholder="password">
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>


  </div>
</div>
</body>
</html>