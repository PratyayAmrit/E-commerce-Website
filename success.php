<?php 
include 'common.php' ;
session_start() ;
include 'header.php' ;
$User_Id = $_SESSION['Id'] ;
$update_password_query = "UPDATE users_items SET Status ='Order Confirmed' WHERE User_Id = '$User_Id' " ;
$update_password_result = mysqli_query($con, $update_password_query) or die(mysqli_error($con)) ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<h4>: Your order is confirmed. Thank you for shopping
with us.<a href="products.php">​Click here</a>​ to purchase any other item.</h4>
<?php
include 'footer.php' ;
?>
</body>
</html>
