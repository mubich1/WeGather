<?php
$con = mysqli_connect('localhost', 'root', '', 'booking');
session_start();
function PageName()
{
    return substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);
}
$current_page = PageName();
if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sq = "SELECT * FROM 	sigunup_provider where email='$email' AND password ='$password'";

    $res = mysqli_query($con, $sq);
    if ($res) {
        if (mysqli_num_rows($res) > 0) {
            $d = mysqli_fetch_array($res);
            $_SESSION['randId'] = $d['randId'];
            $_SESSION['email'] = $d['email'];
            header('Location:providerDashBoard.php');
        }
    }
}
?>
<div class="wrapper">
    <div class="logo"> <img src="img/logoweb.png" alt=""> </div>
    <div class="text-center mt-4 name"> </div><br><br>
    <form class="p-3 mt-3" action="listYourServicesLogin.php" method="post">
        <div class="form-field d-flex align-items-center"> <span class="far fa-user"></span> <input type="text" name="email" id="email" placeholder="email" required> </div>
        <div class="form-field d-flex align-items-center"> <span class="fas fa-key"></span> <input type="password" name="password" id="pwd" placeholder="Password" requireds> </div>
        <button class="btn mt-3" type="submit" name="submit" value="submit" href="sigunupProvider.php">Login</button>
    </form><br>
    <p style="font-size: 15px; color:#8d4368;">If you don't have account<a href="sigunupProvider.php"> Sign Up</a> here. </p>
    
</div>
</div>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif
    }

    body {
        /* background: #ecf0f3; */
        background-image: url("img/login.jpg");
        background-size: cover;
    }

    .wrapper {
        max-width: 300px;
        min-height: 450px;
        margin: 80px auto;
        padding: 40px 30px 30px 30px;
        grid-template-columns: 1fr 6fr 1fr;
        /* background-color: #ecf0f3; */
        background: -webkit-linear-gradient(#33ccff, #ff99cc);
        border-radius: 15px;
        box-shadow: 5px 5px 30px .2px #ff99cc, -5px -5px 30px #33ccff;
    }

    .logo {
        width: 80px;
        margin: auto
    }

    .logo img {
        width: 100%;
        height: 80px;
        object-fit: cover;
        border-radius: 50%;
        box-shadow: 0px 0px 3px #5f5f5f, 0px 0px 0px 5px #ecf0f3, 8px 8px 15px #a7aaa7, -8px -8px 15px #fff
    }

    .wrapper .name {
        font-weight: 600;
        font-size: 1.4rem;
        letter-spacing: 1.3px;
        padding-left: 10px;
        color: #555
    }

    .wrapper .form-field input {
        width: 100%;
        display: block;
        border: none;
        outline: none;
        background: none;
        font-size: 1.2rem;
        color: #666;
        padding: 10px 15px 10px 10px
    }

    .wrapper .form-field {
        padding-left: 10px;
        margin-bottom: 20px;
        border-radius: 20px;
        box-shadow: inset 8px 8px 8px #cbced1, inset -8px -8px 8px #fff
    }

    .wrapper .form-field .fas {
        color: #555
    }

    .wrapper .btn {
        box-shadow: none;
        width: 100%;
        height: 40px;
        background-color: #03A9F4;
        color: #fff;
        border-radius: 25px;
        box-shadow: 3px 3px 3px #b1b1b1, -3px -3px 3px #fff;
        letter-spacing: 1.3px
    }

    .wrapper .btn:hover {
        background-color: #039BE5
    }

    .wrapper a {
        text-decoration: none;
        font-size: 0.8rem;
        color: #03A9F4
    }

    .wrapper a:hover {
        color: #039BE5
    }

    @media(max-width: 380px) {
        .wrapper {
            margin: 30px 20px;
            padding: 40px 15px 15px 15px
        }
    }
</style>