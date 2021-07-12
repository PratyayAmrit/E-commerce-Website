<?php
include 'common.php' ;
session_start();
$Old_Password = $_POST['Old_Password'];
if ($_POST['New_Password'] == $_POST['Confirm_Password'])
{
$New_Password = $_POST['New_Password'] ;
} else {
echo "Password didnot match" ;
}
$user_id = $_SESSION['Id'] ;
$select_query = "SELECT Password FROM users WHERE Id = '$user_id'" ;
$result = mysqli_query($con, $select_query) or die(mysqli_error($con)) ; 
$row = mysqli_fetch_array($result);
if ($Old_Password == $row['Password'])
{
$update_password_query = "UPDATE users SET Password = '$New_Password' WHERE Password = '$Old_Password' " ;
$update_password_result = mysqli_query($con, $update_password_query) or die(mysqli_error($con)) ;
echo "Password Successfully Updated";?><a href="login.php"><?php echo "Click here to LOGIN Again";?> </a> 
<?php
}
else {
echo "Incorrect Password details" ;
}
?>

