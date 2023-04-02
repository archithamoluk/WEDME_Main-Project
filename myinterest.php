<?php
include 'dbconnect.php';
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
			<h1>My Interest</h1><br>
				        <div class="row">
            
            <div class="col-sm-8">
              <div style="color:black; font-size:13px;" class="reg-box shado-1">
                  


<!-- <?php
$uname=$_SESSION['username'];
	$date1=new DateTime($dob);
    $date2=new DateTime($date);
	$interval = $date1->diff($date2);

    $myage= $interval->y; 

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

    $p=1;
	$result = mysqli_query($con,"SELECT * FROM tbl_users,tbl_login where tbl_users.email=tbl_login.username and tbl_login.user_status='1' and tbl_users.gender!='$gender' and tbl_users.email in(select ur_id from tbl_interest where my_id='$uname')");
    while($row = mysqli_fetch_array($result))
        {
?>
<form method="POST" >

<table>
	<tr>
		<img src="../<?php echo $row['photo'];?>" alt="Avatar" style="height: 200px; width:200px;" > <!-- style="height: 100px; width:100px;" -->
	</tr>

    <tr><?php $ne=$row['email']; ?>
	<tr><td>Profile created by :</td><td><?php echo $row['created'];?></td></tr>
	<tr><td>Marital Status :</td><td><?php echo $row['marital_status'];?></td></tr>
	<tr><td>Name :</td><td><?php echo $row['fname'];?></td></tr>
	<tr><td>Date of Birth :</td><td><?php echo $row['dob'];?></td></tr>
	<tr><td>Age :</td><td><?php echo $row['age'];?></td></tr>
	<tr><td>Subcaste :</td><td><?php echo $row['caste'];?></td></tr>
	<tr><td>State :</td><td><?php echo $row['state'];?></td></tr>
	<tr><td>District :</td><td><?php echo $row['district'];?></td></tr>
	<tr><td>Height :</td><td><?php echo $row['height'];?></td></tr>
	<tr><td>Weight :</td><td><?php echo $row['weight'];?></td></tr>
</table>
</form>



<br><br>
<?php
			  }
?>


						</div>
					</div> 
				</div>  	
				
			<!-- //owl-carousel -->
		</div>	
		
	</div>	
	<!-- //main -->

	
</body>
</html>