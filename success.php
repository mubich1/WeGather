<body style="    background-color: gainsboro;">
    <?php
    require('include/userHeader.php');

    if (isset($_POST['id'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $cnic = $_POST['cnic'];
        $contact = $_POST['contact'];
        $start_date = $_POST['start_date'];
        $end_date = $_POST['end_date'];
        $id = $_POST['id'];
        $randId = $_POST['randId'];
        $sq = "INSERT INTO booked(name,email,cnic,contact,start_date,end_date,hall_id,randId) VALUES('$name','$email','$cnic','$contact','$start_date','$end_date','$id','$randId')";
        $res = mysqli_query($con, $sq);

        if ($res) {
            $sqq = "UPDATE halls set start_date='$start_date',end_date='$end_date' WHERE id = '$id'";
            $result = mysqli_query($con, $sqq);
    ?>
            <div style="background:black;height:70px;"></div><br>
            <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
            <i class="checkmark" style="color: #9ABC66;font-size: 100px;line-height: 200px;margin-left:60px;">✓</i>
            </div>
            <div class="container">
                <div class="d-flex justify-content-center">
                    <h1 class=" text-center "><b class="font-weight-bold font-italic" style="color: #9ABC66; font-size:50px;">Congratulations !</b> Your request submitted successfully our team will contact you soon</h1>
                </div>
                <h1 class=" text-center">Thanks</h1>
            </div><br>
            <br>
            <div class="d-flex justify-content-center">
                <a href="index.php"> <button class="btn btn-success ">BACK TO HOME</button> </a>
            </div>

            </div>
        <?php
        } else {
        ?>
            <div style="background:black;height:70px;"></div>
            <div class="container">
                <div class="d-flex justify-content-center">
                    <div>
                        <h1 class="bg-danger text-white text-center">Something went wrong! </h1>
                    </div>
                    <div class="d-flex justify-content-center">

                        <a href="index.php"> <button class="btn-primary">BACK TO HOME</button> </a>

                    </div>

                </div>
        <?php
        }
    }
        ?>
</body>