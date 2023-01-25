<div style="background:black;width:200px; height:700px; position: fixed; ">
</div>
<?php
require('include/providerSideNav.php');
?>

<head>
  <link href="css/style1.css" rel="stylesheet" />

</head>

<body>
  <div style="  padding-left: 220px; padding-top:40px;">

    <h3 class="text-center font-weight-bold" style="color: #515b64;" ><u style="text-decoration-color: #495057; font-size: 42px;">Welcome To We Gather </u></h3>
    <div class="col-md-8">
      <div class="card-body p-4">
        <h6>Profile Info..</h6>
        <?php
        $randId = $_SESSION['randId'];
        $sq = "SELECT * from sigunup_provider WHERE randId='$randId' ";
        $res = mysqli_query($con, $sq);
        if (mysqli_num_rows($res) > 0) {
          while ($data = mysqli_fetch_assoc($res)) {

        ?>
            <hr class="mt-0 mb-4">
            <div class="row pt-1">
              <div class="col-6 mb-3">
                <h6>Email</h6>
                <p class="text-muted"><?php echo $data['email']; ?></p>
              </div>
              <div class="col-6 mb-3">
                <h6>Phone</h6>
                <p class="text-muted"><?php echo $data['phone_number']; ?></p>
              </div>
            </div>
          <?php
          }
        }
        $randId = $_SESSION['randId'];
        $sq = "SELECT * from halls WHERE randId='$randId'  ";
        if ($res = mysqli_query($con, $sq)) {
          $data = mysqli_num_rows($res);
          ?>
          <h6>Venues Information</h6>
          <hr class="mt-0 mb-4">
          <div class="row pt-1">
            <div class="col-6 mb-3">
              <h6>Your Total Venues</h6>
              <p class="text-muted"><?php echo $data; ?></p>
            </div>
            <div class="col-6 mb-3">
              <?php

              $randId = $_SESSION['randId'];
              $sq = "SELECT * from booked WHERE randId='$randId'  ";
              if ($res = mysqli_query($con, $sq)) {
                $data = mysqli_num_rows($res);
              ?>
                <h6>Total Requests</h6>
                <p class="text-muted"><?php echo $data ?></p>
            </div>
          </div>
          <div class="d-flex justify-content-start">
            <a href="#!"><i class="fab fa-facebook-f fa-lg me-3"></i></a>
            <a href="#!"><i class="fab fa-twitter fa-lg me-3"></i></a>
            <a href="#!"><i class="fab fa-instagram fa-lg"></i></a>
          </div>
      </div>



  <?php
              }
            }
  ?>
    </div>
</body>
