
<?php
include 'dbconnect.php';
session_start();
$pass_value = $_SESSION['username'];
// echo $pass_value;
if(isset($_POST['submit_reset'])){
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
    if($pass != $cpass){
        echo '<script> alert ("Password doesnot match");</script>';
	    echo'<script>window.location.href="updatePass.php";</script>';
    }
    else{
        $insert = "UPDATE `tbl_login` SET `password`='$cpass' WHERE `username`='$pass_value'";
        mysqli_query($con,$insert);
        echo '<script> alert ("Password Updated Successfully");</script>';
	    echo'<script>window.location.href="login.php";</script>';
    }
}
?>
<?php
include 'header.php';
?>


<!DOCTYPE html>
<html class="no-js">
<title>WEDME-Update Password</title>
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
     .navbar {
        overflow: hidden;
        background-color: #333;
        position: absolute;
        width: 100%;
        left: 0px;
        top: 0px;
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
            top: 230px;
            height: 40px;
            width: 90px;
            border-radius: 20px;
            color: white;
            border: none;
            font-family: 'Poppins';
            
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
        <script>
            function validateForm() {
    var pw1 = document.getElementById("pass").value;
    var pw2 = document.getElementById("cpass").value;
    if(pw2!="" && pw1 != pw2) {
        document.getElementById('msg1').style.display = "block";
        document.getElementById('msg1').innerHTML = "Password doesnot match";
        return false;
    }
    else{
        document.getElementById('msg1').style.display = "none";
    }
}
        </script>
</head>
<body>
    <div class="navbar">
        <a class="left" href="index.php"><img src="imgs/main-logo.png" alt="BookMyTickets" width="200" height="80"></a>
    </div>
    <form action="" method="POST" onsubmit ="return validateForm()">
    <table>
        <tr><td><label for="pass">New password</label></td></tr>
        <tr><td><input type="password" name="pass" id="pass" onblur="return validateForm()" onKeyUp="return validateForm()" placeholder="Enter your new password here" required></td></tr>
        <tr><td><label for="cpass">Confirm password</label></td></tr>
        <tr><td><input type="password" name="cpass" id="cpass" onblur="return validateForm()" onKeyUp="return validateForm()" placeholder="Enter your password again here" required></td></tr>
        <tr><td><span id="msg1" style="color: red;"></span></td></tr>
        <tr><td><input type="submit" name="submit_reset" value="Reset"></td></tr>
    </table>
    </form>
</body>
</html>
