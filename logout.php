<?php 
include 'common.php' ;
session_start() ;
session_unset() ;
session_destroy() ;
include 'header.php' ;
echo "logged out Successfuly" ; ?> <a href="login.php"> <?php echo "Click Here to login again" ; ?> </a>
<?php 
include 'footer.php' ;
?>