<?php
include 'dbconnect.php';
include 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
	<style>

#pay_button_yearly {
  background-color:#E91E63;
  color: white;
  font-size: 16px;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

#pay_button_yearly:hover {
  background-color: #E91E63;
}

		</style>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>WEDME-UPGRADE</title>
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
	<link href="//fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Spa Pricing Table template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free Web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/stylee.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all">
<!-- //Custom Theme files -->
<!-- web font -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'><!--web font-->
<link href="//fonts.googleapis.com/css?family=Petit+Formal+Script" rel="stylesheet">
<!-- //web font --> 
</head>
<body>

	
	<!-- main -->
	<div class="main">
		<h1>.....UPGRADE NOW....</h1>
		<div class="main-agileinfo"> 
			<div id="owl-demo" class="owl-carousel owl-theme"><!-- owl-carousel -->
				
				<div class="item">
					<div class="pricing">
						<div class="pricing-top">
							<h3>Premium</h3>
							<p>$5000 / Year</p>
						</div>
						<div class="pricing-bottom"> 
							<p>Access verified mobile numbers</p> 
							<p>Enchance Privacy</p> 
							<p>Chat instantly with prospects</p> 
							<p>View Others Profile</p> 
							 
							<div class="agileits-buy">
							<button id="pay_button_yearly" onclick="pay_now('yearly')">Upgrade Now</button>
							</div>
						</div>
					</div> 
				</div>  
				
				
			<!-- //owl-carousel -->
		</div>	
		
	</div>	

</div>
</div>
</div>
	<!-- //main -->

	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
	<script>
     function pay_now(option) {
            // alert(option);
            // var amount = document.getElementById("amount").getAttribute("value");
            var amount;

            // Retrieve the value of the selected option based on the parameter
            if (option === 'yearly') {
                amount = 5000;
                // alert(amount);
            } 
            make_payment(amount);
        }
        function make_payment(amount) {
            // var amt = 100;
            // alert(amount);
            var options = {
                "key": "rzp_test_cWI3crnad1WSIV",
                "amount": amount * 100,
                "currency": "INR",
                "name": "Wedme",
                "description": "Test Transaction",
                "handler": function (response) {
                    console.log(response);
                    // alert(response);
                    jQuery.ajax({
                        type: 'POST',
                        url: '',
                        data: "payment_id=" + response.razorpay_payment_id + "&amt=" + response.amount,
                        success: function (result) {
                        	<?php 
							$uname=$_SESSION['username'];
                        	$sql="UPDATE tbl_login SET plan_status=1 WHERE username='$uname'";
                        	$query=mysqli_query($con,$sql);
                        	 ?>
                            //alert("Payment Successfull")
                            // window.location.href="uploadfile/component-file-upload.php?payment_id="+response.razorpay_payment_id;
                        }

                    })
                    // if(response){
                    //     window.location.href="/adsol/index.php";
                    // }


                }
            };

            var rzp1 = new Razorpay(options);
            document.getElementById('pay_button_yearly').onclick = function (e) {
                rzp1.open();
                e.preventDefault();
            }
           
           

        }
    </script>
	<!-- //js -->
	<!-- popup js --> 
	<script src="js/jquery-1.9.1.min.js"></script> 
	<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function() { 
			$("#owl-demo").owlCarousel({
				
			  autoPlay: 3000, //Set AutoPlay to 3 seconds 
			  items : 3,
			  itemsDesktop : [640,5],
			  itemsDesktopSmall : [414,4]
		 
			}); 
		}); 
	</script> 
	<!-- //js -->
	<!-- popup js --> 
	<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>  
	<script>
		$(document).ready(function() {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			}); 															
		});
	</script>
	<!-- //popup js --> 
</body>
</html>