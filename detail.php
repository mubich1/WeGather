<?php
require('include/userHeader.php');
?>
<link href="css/style2.css" rel="stylesheet" />
<div style="background:black;height:70px;"></div>
<head>
<script src="https://code.jquery.com/jquery-2.2.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link  href="https://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css" rel="stylesheet"/>

<script language="javascript">
    $(document).ready(function(){
        var minDate = new Date();
        $("#start_date").datepicker({
            showAnim: 'drop',
            numberOfMonth: 1,
            minDate: minDate,
            dateFormat:'dd/mm/yy',
            onClose: function(selectedDate){
                $('#return').datepicker("option","minDate",selectedDate);
            }
        });


        $("#return").datepicker({
            showAnim: 'drop',
            numberOfMonth: 1,
            minDate: minDate,
            dateFormat:'dd/mm/yy',
            onClose: function(selectedDate){
                $('#return').datepicker("option","minDate",selectedDate);
            }
        });
    })
    </script>
</head>


<body style="background: #ecf0f3;">
    <br>
    <h1 class="text-center " style="font-family: Lucida Handwriting, Cursive;"> HALL DETAIL</h1><br>
    <?php if (isset($_GET['hallid'])) {
        $id = $_GET['hallid'];
        $sq = "SELECT * FROM halls where id='$id'";
        $res = mysqli_query($con, $sq);
        if (mysqli_num_rows($res) > 0) {
            $d = mysqli_fetch_array($res);
    ?>

            <div class="container">
                <h1 style="color:#2c6868; font-size:72px; font-family: Segoe Print, Fantasy;"><?php echo $d['title']; ?></h1>
                <h3 class="text-right font-weight-bold" style="background: -webkit-linear-gradient(#33ccff, #ff99cc);
                -webkit-background-clip: text;-webkit-text-fill-color: transparent; font-size: 50px;">
                    <?php echo $d['level']; ?></h3>
                <div class="row">
                    <div class="col-md-8">
                        <h3 class=" border-top-0 text-center rounded-circle " style="color:#ff1985;border: 10px solid; border-color:orange; font-size:42px; font-family: Bahnschrift SemiBold, Fantasy;"> About Venue</h3><br><br>
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

                        <h3 class=" border-top-0 text-center rounded-circle " style="color:#ff1985; font-size:42px;border: 10px solid; border-color:orange; font-family: Bahnschrift SemiBold, Fantasy; border: 10px solid; border-color:orange;"> Venue Gallery</h3><br><br>
                        <div class="container">
                            <div class="category-data">
                                <div class="row">
                                    <div class="col-md-2 col-sm-4 col-lg-5 col-xs-12">
                                        <div class="category1">
                                            <?php if (!empty($d['pic1'])) { ?> <img src="img/halls/<?php echo $d['pic1']; ?>" alt="" class="none1"><?php } ?>
                                            <?php if (!empty($d['pic2'])) { ?> <img src="img/halls/<?php echo $d['pic2']; ?>" alt="" class="none1 "> <?php } ?>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-lg-5 col-xs-12">
                                        <div class="category1">
                                            <?php if (!empty($d['pic3'])) { ?> <img src="img/halls/<?php echo $d['pic3']; ?>" alt="" class="none1"> <?php } ?>
                                            <?php if (!empty($d['pic4'])) { ?> <img src="img/halls/<?php echo $d['pic4']; ?>" alt="" class="none1 "> <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><br><br><br><br>


                        <div class="clearfix"></div>
                        <h3 class=" border-top-0 text-center rounded-circle " style="color:#ff1985; font-size:42px;border: 10px solid; border-color:orange; font-family: Bahnschrift SemiBold, Fantasy;"> ADDRESS</h3><br><br>
                        <p><?php echo $d['city']; ?></p>
                        <p><img src="img/location.svg" class="icon" style=" width: 15px;"> &nbsp;&nbsp;<?php echo $d['address']; ?></p>
                        <h3 class=" border-top-0 text-center rounded-circle " style="color:#ff1985; font-size:42px;border: 10px solid; border-color:orange; font-family: Bahnschrift SemiBold, Fantasy;"> CONATCT</h3><br>
                        <p><i class="fa fa-phone-square">&nbsp;&nbsp;&nbsp;&nbsp;</i><b><i><?php echo $d['contact']; ?></i></b></p>
                        <p><i class="fa fa-envelope"></i>&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $d['email']; ?></b></p>
                        <p><i class="fa fa-globe"></i>&nbsp;&nbsp;&nbsp;&nbsp;<b>www.wegather.pk</b></p>
                        <h3 class=" border-top-0 text-center rounded-circle " style="color:#ff1985; font-size:42px;border: 10px solid; border-color:orange; font-family: Bahnschrift SemiBold, Fantasy;"> Venue Available Services</h3>
                        <table class="table table-striped ">
                            <tr style="color:#5b1e47;">To make a reservation, check the availability or other inquiries, please contact us now! Not only that, to ensure your event starts and goes as
                                smoothly as possible, we also provide advance venue set- up service. All the basic equipment such as tables, chairs, projector & screen, PA system will be set-up before your arrival, and it’s free.</tr>
                            <tr>
                                <td><b><?php echo $d['services']; ?><b></td>
                            </tr>
                        </table>
                        <h3 class="">Best suited for</h3>
                        <table class="table table-borderless center ">
                            <tr>
                                <td>&#10004; Anniversary </td>
                                <td>&#10004; Corporate Party</td>
                            <tr>
                                <td>&#10004; First Birthday Party</td>
                                <td>&#10004; Party</td>
                            </tr>
                            <tr>
                                <td>&#10004; Reception</td>
                                <td>&#10004; Team Building</td>
                            </tr>
                            <tr>
                                <td>&#10004; Birthday Party</td>
                                <td>&#10004; Conference</td>
                            <tr>   
                                <td>&#10004; Engagement</td>
                                <td>&#10004; Meeting</td>
                            </tr>
                            <tr>  
                                <td>&#10004; Social Gathering</td>
                                <td>&#10004; Wedding</td>
                            </tr>
                            <tr>
                                <td>&#10004; Barat</td>
                                <td>&#10004; Valima</td>
                            </tr>
                            <tr>
                                <td>&#10004; Mehndi</td>
                                <td>&#10004; Get to Gather</td>
                            </tr>
                        </table>

                        <h3 class=" border-top-0 text-center rounded-circle " style="color:#ff1985; font-size:42px;border: 10px solid; border-color:orange; font-family: Bahnschrift SemiBold, Fantasy;"> More About VenueHub.pk</h3>
                        <p style="color:#5b1e47;">Event space for You, seminar, training, product launch, exhibition and open day event Accommodate up to your required people.

                            Being an iconic landmark located at the heart of Lahore, The Wave offers spacious event space for your company to host business meeting, seminar,
                            training, product launch, exhibition and open day event. Our event space never ceases to amazed our clients with how customisable it is to cater

                            with different needs and requirements. It is conveniently located within 5 mins walking distance from the Metro and surrounded with amenities and services.</p>

                    </div>

                    <!-- card fot booking request -->
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">Book Hall Now</div>
                        </div>
                        <div class="card-body bg-light">
                            <form action="success.php" method="post">
                                <input type="hidden" class="form-control" name="id" value="<?php echo $d['id']; ?>" required>
                                <input type="hidden" class="form-control" name="randId" value="<?php echo $d['randId']; ?>" required>

                                <div class="form-group">
                                    <label for="">Name:</label>
                                    <input type="text" class="form-control" name="name" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Email:</label>
                                    <input type="email" class="form-control" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label for="">CNIC</label>
                                    <input type="number" class="form-control" name="cnic" required maxlength="13">
                                </div>

                                <div class="form-group">
                                    <label for="">Mobile</label>
                                    <input type="number" class="form-control" name="contact" required maxlength="11">
                                </div>
                                <div class="form-group">
                                    <label for="">Book From </label>
                                    <input type="text" id="start_date" class="form-control" name="start_date" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Book to </label>
                                    <input type="text" id="return" class="form-control" name="end_date" required>
                                </div>
                                <div class="form-group d-flex justify-content-center">
                                    <button class="btn btn-priamry" type="submit" style="background:#4285f4; color:white;">Book Now</button>
                                </div>

                            </form>

                        </div>
                    </div>

                </div>
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
</body>
<?php
require('include/footer.php');
?>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


