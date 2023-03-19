
<!DOCTYPE html>

    <html class="no-js">
	<head>
	<link href="//fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>wedme.com</title>
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

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
	
	<link href="https://fonts.googleapis.com/css?family=Montez" rel="stylesheet">
	
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
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">
	
		

<?php
include'header.php';
?>

		<!-- end:header-top -->
	


		<div id="fh5co-started" style="background-image:url(images/cover_bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
			<div class="container">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-1 heading-section">
					<div class="form-group last mb-5">

						<h2>Sign-in</h2>
						<p>If you haven't an account? <a href="register.php"><u> Register Here</u></a>
					</div>
				</div><br><br><br>
				<div class="row animate-box">
					<div class="col-md-10 col-md-offset-1 ">
						<form class="form-inline" action="check.php" method="POST" onsubmit="return validate();">
							<div class="col-md-4 col-sm-4">
								<div class="form-group">
									<label for="name" class="sr-only">Username</label>
									<input type="email" class="form-control" name="username" id="email" placeholder="Enter Email" required>
								</div>
							</div><br><br><br>
							<div class="col-md-4 col-sm-4">
								<div class="form-group">
									<label for="email" class="sr-only">Password</label>
									<input type="password" name="password" class="form-control" id="password" placeholder="Enter Password"
									pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" 
						            title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
								</div>
							</div><br><br><br>
							<div class="col-md-4 col-sm-4">
                <div style="margin-left:+0%;">
                <div class="g-recaptcha" data-sitekey="6Lc4uvUkAAAAAHjIEL4rlRFCVsosV-UznheBtlJ3"></div>
                <div id="g-recaptcha-error"></div>
                </div>
                </div><br><br><br><br>
							<div class="col-md-4 col-sm-4">
								
								<button type="submit" name="login" class="btn btn-primary btn-block">Login</button><br>
								<b><a href="forgotpswd.php" style="color: pink;">Forgot Password?</a></b>
								<script>
	function validate() {
            var email=document.getElementById('email').value;
            var pass=document.getElementById('password').value;
            
            if (grecaptcha.getResponse() == "") {

                document.getElementById('g-recaptcha-error').textContent = "Enter the Captcha";
                document.getElementById("g-recaptcha-error").style.color = "red";
                return false;
            }
            else if (grecaptcha.getResponse() == "") {
                alert(response)
                document.getElementById('g-recaptcha-error').innerHTML = '<span style="color:red;">This field is required.</span>';
                return false;
            } else if(!emailValidation(email)){
                document.getElementById('email').textContent="please enter the email";
                document.getElementById('email').style.color="red";
                return false;
            }
            else {
                return true;
            }
		}
		</script>
</div>
</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		

	</div>
	<!-- END fh5co-page -->

	</div>

	<!-- END fh5co-wrapper -->

	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<!-- jQuery -->
	<script src="dist/scripts.min.js"></script>
	
	</body>
</html>

