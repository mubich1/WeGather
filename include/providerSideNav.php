<?php
$con=mysqli_connect('localhost','root','','booking');
session_start();
function PageName() {
  return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
}

$current_page = PageName();

?>


<?php 
// require('include/providerHeader.php');
if(!isset($_SESSION['email'])){
  header('location:login.php');  
}
?>
<html>
    <head>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">
</head>
<body>
<style>
body {
  margin: 0;
  font-family: "Lato", sans-serif;
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;

}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #04AA6D;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }

.logout {
  bottom:0;
  background-color: #f44336;
}
}



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
<nav class="sidebar">
  
  <div>
    <img src="img/NAV.png" height="9%" class="w-100" style="background:black;">
  </div>
  <div class="<?php echo $current_page == 'providerDashBoard.php' ? 'active':NULL ?>">
  <a href="providerDashBoard.php">Profile</a>
  </div>
  <div class="<?php echo $current_page == 'addhall.php' ? 'active':NULL ?>">
  <a href="addhall.php">ADD Venue</a>
  </div>
  <div class="<?php echo $current_page == 'providerHall.php' ? 'active':NULL ?>">
  <a href="providerHall.php">Venue</a>
  </div>
  <div class="<?php echo $current_page == 'bookingRequest.php' ? 'active':NULL ?>">
  <a href="bookingRequest.php">Customer Requests</a>
  </div>
  <a href="#about">Customer Feedback</a>

  <a href="providerLogout.php" style="position : absolute;
bottom   : 0;"  class="w-100 bg-danger">LogOut</a>
</div>
</nav>

</body>
</html>