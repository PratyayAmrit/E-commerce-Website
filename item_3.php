<?php 
include 'common.php' ;
session_start() ;
$users_id = $_SESSION['Id'] ;
$Item_Id = '3' ;
$select_query = "SELECT Name, Price FROM items WHERE Id = $Item_Id" ;
$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con)) ;
$row = mysqli_fetch_array($select_query_result);
$Item_Name = $row['Name'];
$Price = $row['Price'];
$insert_query = "INSERT INTO users_items (User_Id, Item_Id, Item_Name, Price, Status) VALUES ('$users_id', '$Item_Id', '$Item_Name', '$Price', 'ADDED TO CART')" ;
$insert_query_result = mysqli_query ($con, $insert_query);
header('location:products.php') ;
?>
