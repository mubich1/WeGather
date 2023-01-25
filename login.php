<?php
$con = mysqli_connect('localhost', 'root', '', 'booking');
session_start();
function PageName()
{
  return substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);
}

$current_page = PageName();

if (isset($_POST['email'])) {
  $email = $_POST['email'];
  $pass = $_POST['password'];
  $sq = "SELECT * FROM admins where email='$email' AND password ='$pass'";

  $res = mysqli_query($con, $sq);
  if ($res) {
    if (mysqli_num_rows($res) > 0) {
      $d = mysqli_fetch_array($res);
      $_SESSION['email'] = $d['email'];
      header('location:admin.php');
    }
  }
}
?>

<head>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css5/bootstrap.min.css" rel="stylesheet">
  <link href="css5/bootstrap.grid.css" rel="stylesheet">
</head> 
<h1 class=" text-center font-weight-bold" style="color: #515b64;font-family: Papyrus, Fantasy,Red serif; font-size:60px; padding-top:20px;">ADMIN LOGIN</h1><br><br><br>
<div class="container">
  <div class="row d-flex justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <div class="card-body">
            <form action="" method="post">
              <div class="form-group">
                <label for="">Email:</label>
                <input type="text" class="form-control" name="email" required>
              </div>
              <div class="form-group">
                <label for="">Password:</label>
                <input type="password" class="form-control" name="password" required>
              </div>
              <div class="form-group d-flex justify-content-center  ">
                <button class="btn-primary btn-lg" type="submit">Login</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>