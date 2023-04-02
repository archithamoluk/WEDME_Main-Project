<?php
include '../dbconnect.php';
include 'header.php';
?>
<!DOCTYPE html>
 <html class="no-js">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>wedme.com</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />


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

	<script src="js/modernizr-2.6.2.min.js"></script>
	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">
		<div id="fh5co-couple"  class="fh5co-section-gray"  data-stellar-background-ratio="0.5">
			<div class="container">
				        <div class="row">
            
            <div class="col-sm-8">
              <div style="color:black; font-size:13px;" class="reg-box shado-1">
                  <h1>Send Interest</h1><br>



<!-- <?php

//Age calculator
$age_sql = "SELECT DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y') + 0 AS age FROM tbl_users WHERE email='$uname'";
$calc_age = mysqli_query($con, $age_sql);
$age = mysqli_fetch_assoc($calc_age); 
?> -->


<?php
$uname=$_SESSION['username'];
$sql2 = "SELECT gender FROM tbl_users WHERE tbl_users.email = '$uname'";
$r2 = mysqli_query($con,$sql2);
while($row2 = mysqli_fetch_array($r2))
{
	$gender = $row2['gender'];
	break;
}

    $result = mysqli_query($con,"SELECT * FROM tbl_users,tbl_login where tbl_users.email=tbl_login.username and tbl_login.user_status='1' and tbl_users.gender!='$gender' and tbl_users.email not in(select ur_id from tbl_interest where my_id='$uname')");
    while($row = mysqli_fetch_array($result))
        {
        	while($row2 = mysqli_fetch_array($r2))
				{
					$dob = $row2['dob'];
				}

?>
<form method="POST" >

<table>
	<tr>
		<td>

		</td>
		<td>

		</td>
	</tr>	
		<img src="../<?php echo $row['photo'];?>" alt="Avatar" style="height: 200px; width: 200px;">
	<tr>
		<tr>
		<td>Profile Created By :</td>
		<td><?php echo $row['created'];?></td>
	</tr> 
		<td>Full Name :</td>
		<td><?php echo $row['fname'] . ' ' . $row['lname']; ?></td>
	</tr>
	
	<tr>
		<td>Age :</td>
		<td><?php echo $row['age'];?></td>
	</tr> 
	<tr>
		<td>Marital Status :</td>
		<td><?php echo $row['marital_status'];?></td>
	</tr> 
		<tr>
		<td>Religion:</td>
		<td><?php echo "Hindu";?></td>
	</tr> 
	<tr>
		<td>Subcaste :</td>
		<td><?php echo $row['caste'];?></td>
	</tr> 

    <tr>
		<td>
		<?php $ne=$row['email']; ?>
		<input type=hidden name=emails value=<?php echo $row['email'];?>><br>
		<input type='submit' name='submit' value='SEND INTEREST' class="btn btn-success"></input></a>
	</td></tr><br>


</table>
</form>



<br><br>
<?php
			  }
?>

<?php
	
if(isset($_POST['submit']))
{
	$uname=$_SESSION['username'];
	$ne=$_POST['emails'];
	echo $ne;

	$q2="INSERT INTO tbl_interest(my_id,ur_id,status) values('$uname','$ne','Send Interest')";
	echo $q2;
	
				$n=mysqli_query($con,$q2);
				if($n){
					echo "<script>
									alert('Interest Sended!');
									location.href='myinterest.php';
							</script>";
				}
				else{
					echo "<script>alert('Interest Can't Send Try Again!');
							location.href='viewinterest.php';
					</script>";
				}
}

?>
						</div>
					</div> 
				</div>  	
				
			<!-- //owl-carousel -->
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
            if (option === 'daily') {
                amount = 500;
                // alert(amount);
            } else if (option === 'weekly') {
                amount = 1000;
                // alert(amount);
            } else if (option === 'monthly') {
                amount = 2000;
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
                            // alert("Payment Successfull")
                            // window.location.href="uploadfile/component-file-upload.php?payment_id="+response.razorpay_payment_id;
                        }

                    })
                    // if(response){
                    //     window.location.href="/adsol/index.php";
                    // }


                }
            };

            var rzp1 = new Razorpay(options);
            document.getElementById('pay_button_daily').onclick = function (e) {
                rzp1.open();
                e.preventDefault();
            }
            document.getElementById('pay_button_weekly').onclick = function (e) {
                rzp1.open();
                e.preventDefault();
            }
            document.getElementById('pay_button_monthly').onclick = function (e) {
                rzp1.open();
                e.preventDefault();
            }

        }
    </script>
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