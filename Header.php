<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" 
   integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" 
   crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
ul {
margin-left:700px;
}
</style>
</head>
</body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
<a href="#" class="navbar-brand"><img src = "lifestyleStore_main.png"></a>
<ul class="navbar-nav">

 <?php
 if (isset($_SESSION['Email']))
 { ?>
<li class="nav-item"> <a class="nav-link" href="products.php"><span class='fas'> &#xf015;</span>Home</a></li>
<li class="nav-item"> <a class="nav-link" href="cart.php"><span class="fas fa-shopping-cart"></span>Cart</a></li>
<li class="nav-item"> <a class="nav-link" href="my_orders.php"><span class="fas fa-cart-plus"></span>My Orders</a></li>
<li class="nav-item"> <a class="nav-link" href="setting.php"><span class="fas fa-tools"></span>Setting</a></li>
<li class="nav-item"> <form method="POST" action = "logout.php"> <div class="form-group">
<input type="submit" value="LogOut"></div></form> </li>
</ul>
</nav>
<?php } 
else { ?>
<li class="nav-item"> <a class="nav-link" href="#"><span class="fas fa-smile"></span>Welcome To The Store</a></li>
<li class="nav-item"> <a class="nav-link" href="login.php"><span class="fas fa-user"></span>Login</a></li>
<li class="nav-item"> <a class="nav-link" href="signup.php"><span class="fas fa-user"></span>Signup</a></li>
</ul>
</nav>
<?php } ?> 

 
</body>
</html>
