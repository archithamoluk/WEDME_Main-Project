<?php
session_start();
include 'dbconnect.php';
if($_SESSION['username']){
    $email = $_SESSION['username'];
}
else{
    echo '<script> alert ("Error!");</script>';
    echo'<script>window.location.href="forgotpswd.php";</script>';
}

if(isset($_POST['submit_otp'])){
    $otp = $_POST['otp-enter'];
    $otp_check = "SELECT `otp_code` FROM `tbl_login` WHERE `username`= '$email'";
    $otp_run = mysqli_query($con,$otp_check);
    $row = mysqli_fetch_array($otp_run);
    // echo $row['otp_code'];
    if($row['otp_code'] === $otp){
        $upotp = "UPDATE `tbl_login` SET `otp_code`='0' WHERE `username`= '$email'";
        mysqli_query($con,$upotp);
        echo '<script> alert ("OTP verified");</script>';
        echo'<script>window.location.href="updatePass.php";</script>';
    }else{
        echo '<script> alert ("Invalid OTP");</script>';
        echo'<script>window.location.href="enter-otp.php";</script>';
    }
}
?>

<?php
include 'header.php';
?>


<!DOCTYPE html>
<html class="no-js">
<title>WEDME-OTP Verification</title>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>WEDME</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	
	<link rel="shortcut icon" href="favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Montez" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	
	<link rel="stylesheet" href="css/style.css">
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
    
    <style>
        body{
            background-image:url("./images/wed11.jpg");
            background-size: cover;
            background-repeat: no-repeat;
        }

   
        .ticket{
            position: absolute;
            width: 561px;
            height: 497px;
            left: 807px;
            top: 163px;
        }
        table{
            position: absolute;
            left: 550px;
            top: 200px;
        }
        table label{
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 700;
            font-size: 23px;
            line-height: 48px;
            color:black;

        }
        input:not([type=submit]){
            box-sizing: border-box;
            background: white;
            border: 2px solid #757070;
            border-radius: 9px;
            padding: 10px;
            width: 300px;
            height: 45px;
        }
        input[type="submit"] {
            position: absolute;
            background: #1E1E1E;
            top: 120px;
            height: 40px;
            width: 90px;
            border-radius: 20px;
            color: white;
            border: none;
            font-family: 'Poppins';
            /* font-weight: bold; */
            
        }
        input[type="submit"]:hover{
            background-color: #000000;
            cursor: pointer;
        }
        ::placeholder{
            font-family: 'Poppins';
            padding-left: 8px;
            font-weight: 700;
        }
        </style>
</head>
<body>
    <form action="" method="POST">
    <table>
        <tr><td><label for="email">OTP Verification</label></td></tr>
        <tr><td><input type="text" name="otp-enter" placeholder="Enter your OTP here" maxlength="6" required></td></tr>
        <tr><td><input type="submit" name="submit_otp" value="Verify OTP"></td></tr>
    </table>
    </form>
</body>
</html>