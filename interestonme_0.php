<?php
include 'dbconnect.php';
include 'header.php';

//$_SESSION['username'] = 'sam@gmail.com';
//$username = 'sam@gmail.com';
$username = $_SESSION['username'];
//echo $username;

//$x=$_GET['id'];
//$w=$_GET['op'];
//$user_id=$_GET["id"];
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
			<h1>Interest On Me</h1><br>
				        <div class="row">
            
            <div class="col-sm-8">
              <div style="color:black; font-size:13px;" class="reg-box shado-1">
                


<?php
	$uname=$_SESSION['username'];
	//$ne="SELECT * FROM tbl_users,tbl_login,interest where tbl_login.plan_status='0' and interest.ur_id='$uname'";
			 //echo $uname;
				//echo $ne;
			  //$uname=$_SESSION['username']; 
			  $result = mysqli_query($con, "SELECT * FROM tbl_users,tbl_login where tbl_users.email in(select my_id from tbl_interest where  ur_id='$uname') and tbl_login.plan_status='0'");
              $row = mysqli_fetch_array($result);
			  if($row)
              {
?>



	<table id="customers">
	<tr><td>
			<div class="card">
			  <img src="../<?php echo $row['photo'];?>" alt="Avatar" style="height: 200px; width: 200px;"> 
				<!--<p>Architect & Engineer</p> -->
				
			  </div>
			</div>
	
	</td><td></td></tr>	
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
	<tr><td><br><a href="upgrade.php"><input type="button" name="nil" value="UPGRADE TO GET MORE DETAILS" class="btn btn-success"></a></td></tr>
	</form>
    
	</div>
		
</div>
<?php
			  }
?>

