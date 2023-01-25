<?php
require('include/providerSideNav.php');
?>

<head>
    <link href="css/style1.css" rel="stylesheet" />
</head>

<body>
    <div style="  padding-left: 220px; padding-top:40px;">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <b>List of Venue</b>
                    <table class="table table-condensed table-bordered table-hover ">
                        <tr>
                            <th class="font-weight-bold">#</th>
                            <th class="font-weight-bold">Venue name</th>
                            <th class="font-weight-bold">location </th>
                            <th class="font-weight-bold">Capacity</th>
                            <th class="font-weight-bold">Rate /=</th>
                            <th class="font-weight-bold">Action</th>
                        </tr>
                        <tbody>
                            <?php
                            $i = 1;
                            if (isset($_SESSION['randId']) && isset($_SESSION['email'])) {
                                $randId = $_SESSION['randId'];
                                $sq = "SELECT * from halls WHERE randId='$randId' ";
                                $res = mysqli_query($con, $sq);
                                if (mysqli_num_rows($res) > 0) {
                                    while ($data = mysqli_fetch_assoc($res)) {
                            ?>
                                        <tr>
                                            <td><?php echo $i++ ?></td>
                                            <td><?php echo $data['title']; ?> </td>
                                            <td><?php echo $data['address']; ?></td>
                                            <td><?php echo $data['capacity']; ?></td>
                                            <td><?php echo $data['price']; ?></td>
                                            <td><a href="signup_action.php?id=<?php echo $data['id']; ?>" class="btn btn-danger btn-sm">Delete</a></td>
                                        </tr>
                        </tbody>
                    <?php } ?>

                    </table>
                </div>
            </div>
        </div>
    <?php
                                } else { ?>
        <div>
            <h3 class="text-center bg-danger " style="padding: 20px; color: white; margin-bottom: 15px;">
                No record Found
            </h3>
        </div>
<?php
                                }
                            }
?>
    </div>
</body>