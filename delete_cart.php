<?php
include 'common.php' ; 
session_start() ;
$user_Id = $_SESSION['Id'] ;
$delete_query = "DELETE From users_items WHERE User_Id = '$user_Id' && Status= 'ADDED TO CART' " ;
$delete_query_result = mysqli_query($con, $delete_query) OR die(mysqli_error($con)) ; 
header('location:cart.php');
?>