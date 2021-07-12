<?php
include 'common.php' ;
session_start() ;
include 'header.php' ;
?>
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
.jumbotron {
padding:10px;
}

</style>

</head>
<body>


<div class="container">
<div class="jumbotron">
<h1> Welcome To The Lifestyle Store </h1>
<p>We have the best cameras,watches and shirts for you. No need to hunt around we have all in one place.</p>
</div>
<div class="row">
<div class="col-sm-3">
<img src="5.jpg" class="img-thumbnail" alt="image1">
<div class="caption">
<h4 style="text-align:center">Canon EOS</h3>
<p style="text-align:center">Price Rs 20000.00</p>
<form method="POST" action = "item_1.php">
<div class="form-group">
<input type="submit" value="Add to Cart" class="btn btn-primary btn-block">
</div>
</form>
</div>
</div>
<div class="col-sm-3">
<img src="2.jpg" class="img-thumbnail" alt="image2">
<div class="caption">
<h4 style="text-align:center">Sony DSLR</h3>
<p style="text-align:center">Price Rs 40000.00</p>
<form method="POST" action = "item_2.php">
<div class="form-group">
<input type="submit" value="Add to Cart" class="btn btn-primary btn-block">
</div>
</form>
</div>
</div>
<div class="col-sm-3">
<img src="3.jpg" class="img-thumbnail" alt="image3">
<div class="caption">
<h4 style="text-align:center">Sony DSLR</h3>
<p style="text-align:center">Price Rs 50000.00</p>
<form method="POST" action = "item_3.php">
<div class="form-group">
<input type="submit" value="Add to Cart" class="btn btn-primary btn-block">
</div>
</form>
</div>
</div>
<div class="col-sm-3">
<img src="4.jpg" class="img-thumbnail" alt="image4">
<div class="caption">
<h4 style="text-align:center">Olympus DSLR</h3>
<p style="text-align:center">Price Rs 80000.00</p>
<form method="POST" action = "item_4.php">
<div class="form-group">
<input type="submit" value="Add to Cart" class="btn btn-primary btn-block">
</div>
</form>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-3">
<img src="9.jpg" class="img-thumbnail" alt="image1">
<div class="caption">
<h4 style="text-align:center">Titan Model #301</h3>
<p style="text-align:center">Price Rs 13000.00</p>
<form method="POST" action = "item_5.php">
<div class="form-group">
<input type="submit" value="Add to Cart" class="btn btn-primary btn-block">
</div>
</form>
</div>
</div>
<div class="col-sm-3">
<img src="10.jpg" class="img-thumbnail" alt="image2">
<div class="caption">
<h4 style="text-align:center">Titan Model #201</h3>
<p style="text-align:center">Price Rs 3000.00</p>
<form method="POST" action = "item_6.php">
<div class="form-group">
<input type="submit" value="Add to Cart" class="btn btn-primary btn-block">
</div>
</form>
</div>
</div>
<div class="col-sm-3">
<img src="11.jpg" class="img-thumbnail" alt="image3">
<div class="caption">
<h4 style="text-align:center">HMT Milan</h3>
<p style="text-align:center">Price Rs 8000.00</p>
<form method="POST" action = "item_7.php">
<div class="form-group">
<input type="submit" value="Add to Cart" class="btn btn-primary btn-block">
</div>
</form>
</div>
</div>
<div class="col-sm-3">
<img src="12.jpg" class="img-thumbnail" alt="image4">
<div class="caption">
<h4 style="text-align:center">Faber Luba#111</h3>
<p style="text-align:center">Price Rs 18000.00</p>
<form method="POST" action = "item_8.php">
<div class="form-group">
<input type="submit" value="Add to Cart" class="btn btn-primary btn-block">
</div>
</form>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-3">
<img src="8.jpg" class="img-thumbnail" alt="image1">
<div class="caption">
<h4 style="text-align:center">H&W</h3>
<p style="text-align:center">Price Rs 800.00</p>
<form method="POST" action = "item_9.php">
<div class="form-group">
<input type="submit" value="Add to Cart" class="btn btn-primary btn-block">
</div>
</form>
</div>
</div>
<div class="col-sm-3">
<img src="6.jpg" class="img-thumbnail" alt="image2">
<div class="caption">
<h4 style="text-align:center">Luis Phil</h3>
<p style="text-align:center">Price Rs 1000.00</p>
<form method="POST" action = "item_10.php">
<div class="form-group">
<input type="submit" value="Add to Cart" class="btn btn-primary btn-block">
</div>
</form>
</div>
</div>
<div class="col-sm-3">
<img src="13.jpg" class="img-thumbnail" alt="image3">
<div class="caption">
<h4 style="text-align:center">John Zok</h3>
<p style="text-align:center">Price Rs 1500.00</p>
<form method="POST" action = "item_11.php">
<div class="form-group">
<input type="submit" value="Add to Cart" class="btn btn-primary btn-block">
</div>
</form>
</div>
</div>
<div class="col-sm-3">
<img src="14.jpg" class="img-thumbnail" alt="image4">
<div class="caption">
<h4 style="text-align:center">Jhalsani</h3>
<p style="text-align:center">Price Rs 1300.00</p>
<form method="POST" action = "item_12.php">
<div class="form-group">
<input type="submit" value="Add to Cart" class="btn btn-primary btn-block">
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