<?php
$conn = mysqli_connect('localhost', 'root', '', 'booking');
if (!isset($conn)) {
  echo 'Connection error';
}
if (isset($_POST['register_submit'])) {
  $randId = uniqid();
  $name = $_POST['name'];
  $email = $_POST['email'];
  $number = $_POST['number'];
  $address = $_POST['address'];
  $password = $_POST['password'];
  $sq = "INSERT INTO sigunup_provider(randId,name,email,phone_number,adress,password) VALUES('$randId','$name','$email','$number','$address','$password')";

  $res = mysqli_query($conn, $sq);
  if ($res) {

    header('location:listYourServicesLogin.php');
  }
}
?>

<!-- Delet Table record -->
<?php
if (isset($_GET['id'])) {
  $h_id = $_GET['id'];
  $del = "DELETE FROM halls WHERE id='$h_id'";
  $result = mysqli_query($conn, $del);
  header('location:providerHall.php');
}
?>

<!-- Delet provider signup Table record -->
<?php
if (isset($_GET['id'])) {
  $h_id = $_GET['id'];
  $del = "DELETE FROM sigunup_provider  WHERE randId='$h_id'";
  $result = mysqli_query($conn, $del);
  header('location:providersDetail.php');
}
?>

<?php
if (isset($_GET['status']) and isset($_GET['hid'])) {
  $st = $_GET['status'];
  $hid = $_GET['hid'];
  if ($st == "1") {
    $query = "UPDATE halls set status='booked' where id='$hid'";
    $rr = mysqli_query($conn, $query);
  } else {
    $qrr = "UPDATE halls set status='' where id='$hid'";
    $qqrr = mysqli_query($conn, $qrr);
  }
}
header('location:bookingRequest.php');
?>

<?php
if (isset($_GET['id'])) {
  $h_id = $_GET['id'];
  $del = "DELETE FROM contactus WHERE id='$h_id'";
  $result = mysqli_query($conn, $del);
  header('location:adminMessages.php');
}
?>

<?php
if (isset($_GET['id'])) {
  $h_id = $_GET['id'];
  $del = "DELETE FROM halls WHERE id='$h_id'";
  $result = mysqli_query($conn, $del);
  header('location:hallList.php');
}
?>
