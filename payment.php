<?php
session_start();
include 'header.php' ;
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
<div class="row">
<div class="col-md-4">
</div>
<div class="col-md-4">
<div class=panel panel-default">
<div class="panel-heading">
<h4> Payment Details </h4>
</div>
<div class="panel-body">
<form method="POST" action="success.php">
<div class="form-group">
<label for="select">Select Prefered Payment Option:</label>
      <select class="form-control" id="select" name="payment">
        <option>Debit Card</option>
        <option>Credit Card</option>
        <option>Wallet</option>
        <option>Cash On Delivery</option>
      </select>
</div>
<div class="form-group">
<label for="Address">Enter Your Address:</label>
      <textarea class="form-control" rows="5" id="Address" name="Address"></textarea>
</div>
<div class="form-group">
<input type="submit" value="Submit" class="btn btn-success" >
</div>

</div>
</form>
</div>
</div>
</div>

</div>
<?php
include 'footer.php' ;
?>
</body>
</html>