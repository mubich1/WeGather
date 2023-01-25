<?php 
require('include/header.php');
session_destroy();
header('location:login.php');
?>

<?php 
require('include/footer.php');
?>