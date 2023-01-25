<?php
require('include/header.php');
?>
<div style="background:black;height:70px;"></div>
<?php
$sq = "select * from contactus ";
$res = mysqli_query($con, $sq);
if (mysqli_num_rows($res) > 0) {
    while ($data = mysqli_fetch_assoc($res)) {
?>

        <head>
            <style>
                body {
                    background-image: url("img/back3.jpg");
                    background-size: cover;

                }

                .card {
                    margin-left: 200px;
                    background-color: #d9d9d9;
                }

                /* Message box starts here */
                .container {
                    clear: both;
                    position: relative;
                }

                .container .arrow {
                    width: 12px;
                    height: 20px;
                    overflow: hidden;
                    position: relative;
                    float: left;
                    top: 6px;
                    right: -1px;
                }

                .container .arrow .outer {
                    width: 0;
                    height: 0;
                    border-right: 20px solid #000000;
                    border-top: 10px solid transparent;
                    border-bottom: 10px solid transparent;
                    position: absolute;
                    top: 0;
                    left: 0;

                }

                .container .arrow .inner {
                    width: 0;
                    height: 0;
                    border-right: 20px solid #33b5e57d;
                    border-top: 10px solid transparent;
                    border-bottom: 10px solid transparent;
                    position: absolute;
                    top: 0;
                    left: 2px;
                }

                .container .message-body {
                    float: left;
                    width: 500px;
                    height: auto;
                    border: 1px solid #CCC;
                    background-color: #33b5e57d;
                    border: 1px solid #000000;
                    padding: 10px 15px;
                    -webkit-border-radius: 5px;
                    -moz-border-radius: 5px;
                    -o-border-radius: 5px;
                    border-radius: 5px;
                }

                .container .message-body p {
                    margin: 0;
                }
            </style>
        </head>

        <body>
            <br><br>
            <div class="card" style="width: 70%; ">
                <div class="card-header">
                    <div class="container">
                        <div><a href="signup_action.php?id=<?php echo $data['id']; ?>" class="fa fa-archive float-right"></a>
                            <h5 class="float-right" style="padding-right: 110px;"><b>Contact Info..</b></h5>

                            <h3><b><?php echo $data['name']; ?> </b></h3>
                            <div class="row float-right">
                                <h5 class="float-right "><?php echo $data['email']; ?></h5>
                                <h5 class="float-right "><?php echo $data['number']; ?></h5>
                            </div>
                        </div>
                        <div class="arrow">
                            <div class="outer"></div>
                            <div class="inner"></div>
                        </div>
                        <div class="message-body">
                            <h5 class="font-weight-bold"><?php echo $data['subject']; ?></h5>
                            <p>&nbsp;&nbsp;&nbsp;<?php echo $data['message']; ?></p>

                        </div>
                    </div>
                </div>
            </div>
        </body>
<?php
    }
}
?>