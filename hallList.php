<div style="background:black;height:70px;"></div>

<?php
require('include/header.php');
if (isset($_GET['randId'])) {
    $randId = $_GET['randId'];
    $sq = "SELECT * from halls WHERE randId='$randId' ";
    $res = mysqli_query($con, $sq);
    if (mysqli_num_rows($res) > 0) {
        $data = mysqli_fetch_array($res);
        $i = 1;
?>
<p class="text-center font-weight-bold" style=" font-size: 42px;"><u>Venues list</u></p>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Venue Name</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>

                    <td><?php echo $i++ ?></td>
                    <td><?php echo $data['title']; ?></td>
                    <td><?php echo $data['address']; ?></td>
                    <td><?php echo $data['city']; ?></td>
                    <td><?php echo $data['email']; ?></td>
                    <td><?php echo $data['contact']; ?></td>
                    <td><a href="signup_action.php?id=<?php echo $data['id']; ?>" class="btn btn-danger btn-sm">Delete</a></td>
                </tr>
        <?php
    }
}
        ?>