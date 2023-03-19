<?php
    include 'dbconnect.php';
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    require 'vendor/autoload.php';

    session_start();
    if(isset($_POST['send_otp']))
    {
        $mail = $_POST['email'];
        $checkMail = "SELECT * FROM tbl_login WHERE username='$mail'";
        $result = mysqli_query($con,$checkMail);
        $rsltCheck = mysqli_num_rows($result);
        $fetch = mysqli_fetch_array($result);
        if($rsltCheck>0)
        {
            $_SESSION['username'] = $fetch['username'];
            $email = $_SESSION['username'];
            $code = rand(999999, 111111);
            
            $insert_otp = "UPDATE `tbl_login` SET `otp_code`='$code' WHERE `username`='$email'";
            $data_check = mysqli_query($con, $insert_otp);
            if($data_check)
            {   
                    $mail = new PHPMailer(true);
                    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
                    $mail->isSMTP();                                             //Send using SMTP
                    $mail->Host       = 'smtp.gmail.com';                        //Set the SMTP server to send through
                    $mail->SMTPAuth   =  true;                                   //Enable SMTP authentication
                    $mail->Username   = 'wedme427@gmail.com';                    //SMTP username
                    $mail->Password   = 'zfpkbxclhwwnsmbx';                      //SMTP password
                    $mail->SMTPSecure = "ssl";                                   //Enable implicit TLS encryption
                    $mail->Port       = 465;                                     //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
                    $mail->setFrom('wedme427@gmail.com');
                    $mail->addAddress($email);                                    //Add a recipient
                    $mail->isHTML(true);                                          //Set email format to HTML
                    $mail->Subject = 'Forgot Password - OTP DO NOT SHARE - WEDME';
                    $mail->Body    = "OTP code for your forgot password is <b>".$code."</b>.<br> This OTP would only be valid for 15 minutes. <b>WEDME</b>";
                    
        
                        if($mail->send())
                        {
                             echo '<script> alert ("OTP sent successfully");</script>';
                             echo'<script>window.location.href="enter-otp.php";</script>';
                   }
                        else
                         {
                             echo '<script> alert ("OTP sent failed");</script>';
                             echo'<script>window.location.href="forgotpswd.php";</script>';
                         }
 
        }
        }
        else
        {
             echo '<script> alert ("The user doesnot exist!");</script>';
             echo'<script>window.location.href="forgotpswd.php";</script>';
         }
    }
    
?>
<?php
include 'header.php';
?>


<!DOCTYPE html>
<html class="no-js">
<title>WEDME-Reset Password</title>
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
        <tr><td><label for="email">Reset Password</label></td></tr>
        <tr><td><input type="email" name="email" placeholder="Enter your email here" required pattern="/^[\w\+\'\.-]+@[\w\'\.-]+\.[a-zA-Z]{2,}$/" title="Please enter a valid email address"></td></tr>
        <tr><td><input type="submit" name="send_otp" value="Send OTP"></td></tr>
    </table>
    </form>
</body>
</html>
