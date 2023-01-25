<?php
require('include/header.php');
?>
<link href="css/style2.css" rel="stylesheet" />

<div style="background:black;height:70px;"></div>
<h1 class="text-center"> HALL DETAIL</h1>
<?php if (isset($_GET['hallid'])) {
    $id = $_GET['hallid'];
    $sq = "SELECT * FROM halls where id='$id'";
    $res = mysqli_query($con, $sq);
    if (mysqli_num_rows($res) > 0) {
        $d = mysqli_fetch_array($res);
?>
        <div class="container">
            <h1 style="color:#669999; font-size:72px;"><?php echo $d['title']; ?></h1>
            <h3 class="text-right" style="background: -webkit-linear-gradient(#33ccff, #ff99cc);
            -webkit-background-clip: text;-webkit-text-fill-color: transparent; font-size: 50px;">
                <?php echo $d['level']; ?></h3>
            <div class="row">
                <div class="">
                    <h3 class="p-3 mb-2 border border-warning border-top-0 text-center rounded-circle " style="color:#ff1985;"> About Venue</h3><br><br>
                    <p><?php echo $d['description']; ?></p>
                    <br><br>
                    <table class="table table-borderless">
                        <tr>
                            <th class="text-center font-weight-bold text-info">Price</th>
                            <th class="text-center font-weight-bold text-info">Capacity</th>
                        </tr>
                        <tr>
                            <td class="text-center">
                                <p>Price per head : <?php echo $d['price']; ?></p>
                            </td>
                            <td class="text-center">
                                <p>People Capacity : <?php echo $d['capacity']; ?></p>
                            </td>
                        </tr>
                    </table>
                    <h3 class="p-3 mb-2 border border-warning border-top-0 text-center rounded-circle " style="color:#ff1985;"> Venue Gallery</h3><br><br>
                    <div class="row">
                        <?php if (!empty($d['pic1'])) { ?> <div class="col-md-6"> <img src="img/halls/<?php echo $d['pic1']; ?>" alt="" class="img-fluid"><br><br> </div><?php } ?>
                        <?php if (!empty($d['pic2'])) { ?> <div class="col-md-6 "> <img src="img/halls/<?php echo $d['pic2']; ?>" alt="" class="img-fluid "> </div><?php } ?>
                        <?php if (!empty($d['pic3'])) { ?> <div class="col-md-6"><br> <img src="img/halls/<?php echo $d['pic3']; ?>" alt="" class="img-fluid"> </div><?php } ?>
                        <?php if (!empty($d['pic4'])) { ?> <div class="col-md-6"><br> <img src="img/halls/<?php echo $d['pic4']; ?>" alt="" class="img-fluid "> </div><?php } ?>
                    </div><br><br>
                    <h3 class="p-3 mb-2 border border-warning border-top-0 text-center rounded-circle " style="color:#ff1985;"> ADDRESS</h3><br><br>
                    <p><?php echo $d['city']; ?></p>
                    <p><img src="img/location.svg" class="icon" style=" width: 15px;"> &nbsp;&nbsp;<?php echo $d['address']; ?></p>
                    <h3 class="p-3 mb-2 border border-warning border-top-0 text-center rounded-circle " style="color:#ff1985;"> CONATCT</h3>
                    <p><i class="fa fa-phone-square">&nbsp;&nbsp;&nbsp;&nbsp;</i><b><i><?php echo $d['contact']; ?></i></b></p>
                    <p><i class="fa fa-envelope"></i>&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $d['email']; ?></b></p>
                    <p><i class="fa fa-globe"></i>&nbsp;&nbsp;&nbsp;&nbsp;<b>www.wegather.pk</b></p>
                    <h3 class="p-3 mb-2 border border-warning border-top-0 text-center rounded-circle " style="color:#ff1985;"> Venue Available Services</h3>
                    <table class="table table-striped ">
                        <tr style="color:#5b1e47;">To make a reservation, check the availability or other inquiries, please contact us now! Not only that, to ensure your event starts and goes as
                            smoothly as possible, we also provide advance venue set- up service. All the basic equipment such as tables, chairs, projector & screen, PA system will be set-up before your arrival, and it’s free.</tr>
                        <tr>
                            <td><b><?php echo $d['services']; ?><b></td>
                        </tr>
                    </table>
                    <h3 class="p-3 mb-2 border border-warning border-top-0 text-center rounded-circle " style="color:#ff1985;"> More About VenueHub.pk</h3>
                    <p style="color:#5b1e47;">Event space for You, seminar, training, product launch, exhibition and open day event Accommodate up to your required people.

                        Being an iconic landmark located at the heart of Lahore, The Wave offers spacious event space for your company to host business meeting, seminar,
                        training, product launch, exhibition and open day event. Our event space never ceases to amazed our clients with how customisable it is to cater

                        with different needs and requirements. It is conveniently located within 5 mins walking distance from the Metro and surrounded with amenities and services.</p>
                </div>
            <?php
        } else {
            ?>
                <div class="container">
                    No record found
                </div>
            <?php
        }
            ?>
            <div class="container">

            </div>
        <?php
    } else {

        ?>
            <div class="container">
                No record found
            </div>
        <?php
    } ?>