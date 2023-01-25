<?php
require('include/providerSideNav.php');
?>

<head>
    <link href="css/style1.css" rel="stylesheet" />
</head>

<body>
    <div style="  padding-left: 200px; padding-top:40px;">
        <?
        if (!isset($_SESSION['email'])) {
            header('location:listYourServicesLogin.php');
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
        <h1 class=" text-center">Customer Requests</h1>
        <div class="container">
            <div class="card">
                <!-- <div class="card-header"> <a href="addhall.php"><button class="btn btn-primary">ADD HALL</button></a> 
 <a href="view.php"><button class="btn-primary float-right">VIEW HALLS</button></a> 
</div> -->
                <?php
                $i = 1;
                $randId = $_SESSION['randId'];
                $sq = "SELECT * from booked WHERE randId='$randId' ";
                $res = mysqli_query($con, $sq);
                if (mysqli_num_rows($res) > 0) {
                ?>
                    <!-- <div class="card-body"> -->
                    <table class="table table-condensed table-bordered  table-hover">
                        <thead>
                            <tr>
                                <th class=" text-center font-weight-bold">#</th>
                                <th class="text-center font-weight-bold">Name</th>
                                <th class="text-center font-weight-bold">CNIC</th>
                                <th class="text-center font-weight-bold">Contact Number</th>
                                <th class="text-center font-weight-bold">Start date</th>
                                <th class="text-center font-weight-bold">End date</th>
                                <th class="text-center font-weight-bold">Email</th>
                                <th class="text-center font-weight-bold">Hall</th>
                                <th class="text-center font-weight-bold">Status</th>
                                <th class="text-center font-weight-bold">Actions</th>
                            </tr>
                        </thead>
                        <?php
                        while ($d = mysqli_fetch_assoc($res)) {
                        ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $i++ ?></td>
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
                                        ?>
                                    </td>
                                    <td><?php if ($data['status'] == "available") {
                                            echo "Pending";
                                        } elseif ($data['status'] == "booked") {
                                            echo "approved";
                                        } else {
                                            echo "Cancelled";
                                        } ?></td>
                                    <td>
                                        <a href="signup_action.php?status=1&hid=<?php echo $hall_id; ?>" class="btn btn-success btn-sm" name="approve">Approve</a>
                                        <a href="signup_action.php?status=2&hid=<?php echo $hall_id; ?>" class="btn btn-info btn-sm" name="cancel">Delete</a>
                                    </td>
                                </tr>
            </div>
        <?php
                        }
                    } else {
        ?>
        <div style="padding:10%; background-color:unset">
            <h1 class="text-center " style="padding:20; color:red; ">There is no request available !</h1>
        </div>
    <?php
                    }
    ?>
    </tbody>

    </table>
        </div>
    </div>













    </div>
</body>