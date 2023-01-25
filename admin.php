<?php
require('include/header.php');
if (!isset($_SESSION['email'])) {
    header('location:login.php');
}
if (isset($_GET['status']) and isset($_GET['hid'])) {
    $st = $_GET['status'];
    $hid = $_GET['hid'];
    if ($st == "1") {

        $query = "UPDATE halls set status='booked' where id='$hid'";
        $rr = mysqli_query($con, $query);
    } else {
        $qrr = "UPDATE halls set status='' where id='$hid'";
        $qqrr = mysqli_query($con, $qrr);
    }
}
?>
<div style="background:black;height:70px;"></div>
<h1 class="text-center font-weight-bold" style="color: #515b64;"><u>Requestes Venues Received</u></h1><br>    
<div class="container">
    <div class="card">
        <!-- <div class="card-header"> <a href="addhall.php"><button class="btn btn-primary">ADD HALL</button></a> 
 <a href="view.php"><button class="btn-primary float-right">VIEW HALLS</button></a> 
</div> -->
        <?php
        $sq = "SELECT * from booked";
        $res = mysqli_query($con, $sq);
        if (mysqli_num_rows($res) > 0) {
        ?>
            <div class="card-body">
                <table class="table table-sm table-striped table-responsive-sm table-responsive-md">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>CNIC</th>
                            <th>Contact Number</th>
                            <th>Start date</th>
                            <th>End date</th>
                            <th>Email</th>
                            <th>Hall</th>
                            <th>Status</th>
                            <!-- <th>Actions</th> -->
                        </tr>
                    </thead>
                    <?php
                    while ($d = mysqli_fetch_assoc($res)) {
                    ?>
                        <tbody>
                            <tr>
                                <td><?php echo $d['name']; ?></td>
                                <td><?php echo $d['cnic']; ?></td>
                                <td><?php echo $d['contact']; ?></td>
                                <td><?php echo $d['start_date']; ?></td>
                                <td><?php echo $d['end_date']; ?></td>
                                <td><?php echo $d['email']; ?></td>
                                <td><?php $hall_id = $d['hall_id'];
                                    $qu = "SELECT * FROM halls where id='$hall_id'";
                                    $r = mysqli_query($con, $qu);
                                    $data = mysqli_fetch_array($r);
                                    echo $data['title'];
                                    ?></td>
                                <td><?php if ($data['status'] == "available") {
                                        echo "Pending";
                                    } elseif ($data['status'] == "booked") {
                                        echo "approved";
                                    } else {
                                        echo "Cancelled";
                                    } ?></td>
                                <!-- <td>
                                    <a href="?status=1&hid=<?php echo $hall_id; ?>"> <button class="btn btn-success btn-sm" name="approve">Approve</button></a>
                                    <a href="?status=2&hid=<?php echo $hall_id; ?>"> <button class="btn btn-info btn-sm" name="cancel">Cancel</button></a>
                                </td> -->
                            </tr>

                    <?php
                    }
                }
                    ?>
                        </tbody>

                </table>
            </div>
    </div>







</div>

</div>