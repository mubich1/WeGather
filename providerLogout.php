<?php 
require('include/providerSideNav.php');
session_destroy();
header('location:index.php');
?>

<?php 
require('include/footer.php');
?>