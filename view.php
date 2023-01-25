<?php
require('include/header.php');
if (!isset($_SESSION['email'])) {
  header('location:login.php');
}
?>
<div style="background:black;height:70px;"></div>
<h1 class="bg-primary text-white text-center">VIEW HALLS</h1>
<?php
require('include/footer.php');


?>