<?php
session_start() ;
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
<h4> Change Password </h4>
</div>
<div class="panel-body">
<form method="POST" action="setting_script.php">
<div class="form-group">
<input type="password" class="form-control" name="Old_Password" placeholder="Old Password">
</div>
<div class="form-group">
<input type="password" class="form-control" name="New_Password" placeholder="New Password">
</div>
<div class="form-group">
<input type="password" class="form-control" name="Confirm_Password" placeholder="Confirm Password">
</div>
<div class="form-group">
<input type="submit" value="Submit" class="btn btn-primary" >
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