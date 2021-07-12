<?php
include 'common.php' ;
 session_start() ; 
include 'header.php' ;
$users_Id = $_SESSION['Id'] ; 
$select_query = "SELECT Item_Id, Item_Name, Price FROM users_items WHERE User_Id = '$users_Id' && status = 'ADDED TO CART' " ;
$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con)) ;

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
<div class="container">
<h3>Look Into Your Cart</h3>
<table class="table table-bordered">
<thead>
<tr>
<th>Item Number</th>
<th>Item Name</th>
<th>Price</th>
<th> </th>
</tr>
</thead>
<?php 
$total = 0 ;
while ($row = mysqli_fetch_array($select_query_result)) 
{ ?>

<tbody>
<tr>
<td><?php echo $row['Item_Id']; ?> </td>
<td><?php echo $row['Item_Name']; ?> </td>
<td><?php echo $row['Price']; ?>  </td>
<td><form method="POST" action="delete_cart.php"><div class="form-group">
<input type="submit" value="Delete" class="btn btn-warning" >
</div></form> </td>
<?php $total = $total + $row['Price'] ; ?>
</tr>
<?php } ?>
<tr>
<td> </td>
<td><b>Total</b></td>
<td><?php echo $total ; ?></td>
<td><a href="payment.php" class="btn btn-primary" role="button">Confirm Order</a></td>
</tr>
</tbody>
</table>

</div>
<?php 
include 'footer.php' ;
?>
</body>
</html>