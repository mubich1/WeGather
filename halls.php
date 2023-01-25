<?php
require('include/userHeader.php');
?>

<head>
    <link href="css/style1.css" rel="stylesheet" />
</head>
<div style="background:black;height:70px;"></div>



<!-- Show city name  -->
<?php if (isset($_GET['city'])) {
    $city = $_GET['city'];
    $sq = "select * from halls where city='$city'";
    $res = mysqli_query($con, $sq);
    if (mysqli_num_rows($res) > 0) {
        $data = mysqli_fetch_assoc($res)

?>
        <div class="cp-inner-banner" id="cp-inner-blog" style="z-index:-1">
            <div class="container">
                <div class="cp-inner-banner-outer">
                    <h2 id="venuenameshow"><?php echo $data['city']; ?></h2>
                </div>
            </div>
        </div>

    <?php
    }else{
        $city = $_GET['city'];
        ?>
        <div class="cp-inner-banner" id="cp-inner-blog" style="z-index:-1">
            <div class="container">
                <div class="cp-inner-banner-outer">
                    <h2 id="venuenameshow"><?php echo $city ?></h2>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>

        <br>
        <div style="width:100%;text-align:center"><br>
        <i class="fa fa-info-circle align-center" style="font-size:100px;color:red"></i>
            <h3 class="text-center text-danger">No venue available in that city</h3>
        </div>
        <br>
        <?php
    }
} else {
    ?>

    <div class="cp-inner-banner" id="cp-inner-blog" style="z-index:-1; ">
        <div class="container">
            <div class="cp-inner-banner-outer">
                <h2 id="venuenameshow">Venues</h2>
            </div>
        </div>
    </div>
<?php
} ?>

<!-- Show halls card on hall page  -->
<div class="clear-fix"></div>
<div class="container">
    <div class="row">
        <?php if (isset($_GET['city']) && isset($_GET['level'])) {
            $city = $_GET['city'];
            $level = $_GET['level'];
            $sq = "select * from halls where city='$city' && level='$level' ";
            $res = mysqli_query($con, $sq);
            if (mysqli_num_rows($res) > 0) {
                while ($data = mysqli_fetch_assoc($res)) {
        ?>
                    <div class="col-md-4">
                        <div class="card" style="margin-bottom: 1rem; margin-top:1rem;">
                            <div class="card-body"> <img src="img/halls/<?php echo $data['pic1']; ?>" style="width:100%;height:200px;" alt="">
                                <h5><?php echo $data['title']; ?> <span class="float-right text-info"><?php echo $data['city']; ?></span></h5>
                                <hr>
                                <span class="badge badge-success float-right" class="text-right" style="background: -webkit-linear-gradient(#33ccff, #ff99cc);
                                -webkit-background-clip: text;-webkit-text-fill-color: transparent; font-size: 15px;">
                                    <?php echo $data['level']; ?></span>
                                <p>
                                <p style="margin-bottom: 0;"><b>Starting from Rs : </b><span><?php echo $data['price']; ?> </span> /=</p>
                                <p style="margin-bottom: 0;"><b>Capacity : </b><?php echo $data['capacity']; ?></p>
                                <b>Location : </b> <?php echo $data['address']; ?>

                                <span class="badge badge-success float-right"><?php $data['status']; ?></span>
                                </p>
                                <?php
                                if (
                                    $data['status'] == "booked"
                                    or $data['status'] == "available"
                                    and $data['start_date'] < date('Y-m-d')
                                    and $data['end_date'] > date('Y-m-d')
                                ) {
                                    echo "booked from " . $data['start_date'] . " to " . $data['end_date'];
                                } else {
                                ?>
                                    <a href="detail.php?hallid=<?php echo $data['id']; ?>" class="d-flex justify-content-center btn btn-sm btn-primary">View
                                            Details</a>
                                <?php
                                }  ?>

                            </div>
                        </div>
                    </div>
                <?php

                }
            }
        } else {
            $sq = "select * from halls ";
            $res = mysqli_query($con, $sq);
            if (mysqli_num_rows($res) > 0) {
                while ($data = mysqli_fetch_assoc($res)) {
                ?>
                    <div class="col-md-4">
                        <div class="card " style="margin-bottom: 1rem; margin-top:1rem;">
                            <div class="card-body"> <img src="img/halls/<?php echo $data['pic1']; ?>" style="width:100%;height:200px;" alt="">
                                <h5><?php echo $data['title'];?> <span class="float-right  text-info"><?php echo $data['city']; ?></span></h5> 
                                <hr>
                                <!-- <p><b>Starting from Rs </b><span><?php echo $data['standard']; ?> </span> /=</p> -->
                                <span class="badge badge-success float-right" class="text-right" style="background: -webkit-linear-gradient(#33ccff, #ff99cc);
                                -webkit-background-clip: text;-webkit-text-fill-color: transparent; font-size: 15px;">
                                    <?php echo $data['level']; ?></span>
                                <p style="margin-bottom: 0;"><b>Starting from Rs </b><span><?php echo $data['price']; ?> </span> /=</p>
                                <p style="margin-bottom: 0;"><b>Capacity : </b><?php echo $data['capacity']; ?></p>
                                <p ><b>Location : </b><?php echo $data['address']; ?><span class="badge badge-success float-right"><?php echo $data['status']; ?></span></p>                                    
                                <?php if ($data['status'] == "booked" or $data['status'] == "available" and $data['start_date'] < date('Y-m-d') and $data['end_date'] > date('Y-m-d')) {
                                    echo "booked from " . $data['start_date'] . " to " . $data['end_date'];
                                } else {
                                ?>
                                    <a href="detail.php?hallid=<?php echo $data['id']; ?>" class="d-flex justify-content-center"><button class="btn btn-primary btn-sm ml-2  pl-4 pr-4" style="border-radius: 12px;">View Details</button></a>
                                <?php
                                }  ?>

                            </div>
                        </div>
                    </div>
        <?php
                }
            }
        }
        ?>
    </div>
</div>
</div>
</div>
<div class="clearfix"></div>

<div style="bottom: auto; position : absolute;" class="p-fixed  w-100">
    <?php
    require('include/footer.php');
    ?>

</div>
<!-- INSERT INTO `halls` (`id`, `question`, `answer`, `pic1`, `pic2`, `pic3`, `pic4`, `price`, `duration`, `address`, `start_date`, `end_date`, `status`, `title`, `description`, `contact`, `city`) VALUES (NULL, 'longe', '2', 'i.png', '2.png', '3.png', '4.png', '1200', 'person', 'kumhara wala chowk', '', '', 'available', 'arroma garden', 'arooma garden locates in multann', '041-1212121', 'Multan'); -->