<?php
$con=mysqli_connect('localhost','root','','booking');
session_start();
function PageName() {
  return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
}

$current_page = PageName();

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Online Hall Booking</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css5/bootstrap.min.css" rel="stylesheet">
  <link href="css5/bootstrap.grid.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">
  <style type="text/css">
    html,
    body,
    header,
    .carousel {
      height: 60vh;
    }
    .active{
      background:orange!important;
    }

    @media (max-width: 740px) {

      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {

      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {
      .navbar:not(.top-nav-collapse) {
        background: #929FBA !important;
      }
    }

  </style>
</head>

<body>

  <header>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
      <div class="container">

        <!-- Brand -->
        <a class="navbar-brand" href="admin.php?status=2&hid=0" >
          <img src="img/logonav.png">
        </a>

        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <!-- Left -->

          <ul class="navbar-nav mr-auto">
          
            <li class="nav-item <?php echo $current_page == 'admin.php' ? 'font-weight-bold':NULL ?>">
              <a class="nav-link" href="admin.php">Home
              </a>
            </li>
            <li class="nav-item <?php echo $current_page == 'providersDetail.php' ? 'font-weight-bold':NULL ?>">
              <a class="nav-link" href="providersDetail.php" >Providers</a>
            </li>
            <li class="nav-item <?php echo $current_page == 'adminHall.php' ? 'font-weight-bold':NULL ?>">
              <a class="nav-link" href="adminHall.php" >Halls</a>
            </li>
            <li class="nav-item <?php echo $current_page == 'adminMessages.php' ? 'font-weight-bold':NULL ?>">
              <a class="nav-link" href="adminMessages.php" >Messages</a>
            </li>
            <!-- <li class="nav-item <?php echo $current_page == 'about.php' ? 'active':NULL ?>">
              <a class="nav-link" href="about.php" >About Us</a>
            </li> -->
          </ul>

          <!-- Right -->
          <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item">
              <a href="#" class="nav-link" target="_blank">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link" target="_blank">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
           <?php 
    if(!isset($_SESSION['email'])){
           ?>
            <li class="nav-item <?php echo $current_page == 'login.php' ? 'active':NULL ?>">
              <a href="login.php" class="nav-link border border-light rounded"
                >
                <i class="fab fa-github mr-2"></i>Admin Login
              </a>
            </li>
    <?php } else {?>
      <li class="nav-item">
              <a href="logout.php" class="nav-link border border-light rounded"
                >
                <i class="fab fa-github mr-2"></i>Logout
              </a>
            </li>
            
      <!-- <li class="nav-item">
              <a href="admin.php" class="nav-link border border-light rounded">
              <i class="fab fa-github mr-2"></i>admin
              </a>
            </li> -->
    <?php } ?>
          </ul>

        </div>

      </div>
    </nav>
    <!-- Navbar -->