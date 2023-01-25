
<?php

require('include/userHeader.php');

$conn = mysqli_connect('localhost','root','','booking');
if(!isset($conn)){
  echo 'Connection error';
}

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
    $sq="INSERT INTO contactus(name,email,subject,number,message) VALUES('$name','$email','$subject','$number','$message')";
    
    $res=mysqli_query($conn,$sq);
    if($res){
      header('location:index.php');
      
    }   
}
?>
<div style="background:black;height:70px;"></div>


<head>
<link href="css/style1.css" rel="stylesheet" />

</head>

<div class="cp-main-content">
    <section class="cp-contact-section pd-t60" style="background-color:white">
    <div class="container">
        <div class="cp-contact-inner pd-b60">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="cp-form-box">
                            <h3>Please fill this form to contact with us</h3>
                            <form action="" method="post">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="inner-holder">
                                            <input type="text" placeholder="Your Name" name="name" id="name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="inner-holder">
                                            <input type="text" placeholder="Your Email" name="email" id="email" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="inner-holder">
                                            <input type="text" placeholder="Subject" name="subject" id="subject">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="inner-holder">
                                            <input type="number" placeholder="Phone Number" name="number" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="inner-holder">
                                            <textarea  placeholder="Message" name="message" id="message" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="inner-holder cp-btn-holder">
                                            <button type="submit" class="btn-submit" name="submit" id="btn-save" value="Submit" style="background:#5b1e47;">Contact</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="cp-contact-info">
                            <h3>Head Office</h3>
                            <ul class="">

                                <li>
                                    <i class="fa fa-home"></i>
									2nd Fllor, Arfa karim software technology park, Lahore, Pakistan
                                    
                                </li>
                                
                                <li><i class="fa fa-phone-square"></i> 03-111-227-007</li>
                                <li><i class="fa fa-phone-square"></i> 03-111-444-078</li>
                                <li>
                                    <i class="fa fa-envelope-o"></i>
                                    <a href="">
                                        <span class="__cf_email__" data-cfemail="f5bc9b939ab583909b80909d8097db859e">wegather@gmail.com</span>
                                    </a>
                                </li>
                                <li><i class="fa fa-globe"></i> <a href="#">weGather.pk</a></li>
                            </ul>
                        </div>
                        <style>
                            li {
                                display: block;
                            }
                        </style>
                    </div>
                </div>
            </div>
        </div>
    </section>
        </div>
        <div class="clearfix"></div>

<?php

require('include/footer.php');
?>
