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
				        <div class="row">
            
            <div class="col-sm-8">
              <div style="color:black; font-size:13px;" class="reg-box shado-1">
                  <h1>Interest On Me</h1><br>



<?php

	          $uname=$_SESSION['username'];
			  
			  $result = mysqli_query($con, "SELECT * FROM tbl_users,tbl_login where tbl_users.email in(select my_id from tbl_interest where  ur_id='$uname') and tbl_login.plan_status='1'");
              $row = mysqli_fetch_array($result);
			  
			  if($row)
              {
				
?>



	<table id="customers">
	<tr><td>
			<div class="card">
			<div class="w3-content w3-section" style="max-width:300px">
			  <img src="../<?php echo $row['photo'];?>" alt="Avatar" style="height: 200px; width: 200px;"> 
				<!--<p>Architect & Engineer</p> -->
				
			  </div>
			</div>
	<?php $ne=$row['email'];
	 $profid=$row['uid'];
	//		echo $ne;
	?>
	</td><td></td></tr>	


			  </div>
			</div>
	
	</td><td></td></tr>	
	<tr><td><center><h2><b>Personal Details</b></h2></center></td></tr>
	<tr><td>Fullname :</td><td><?php echo $row['fname'] . ' ' . $row['lname'];?></td></tr>
	<tr><td>Profile Created by :</td><td><?php echo $row['created'];?></td></tr>
	<tr><td>Gender :</td><td><?php echo $row['gender'];?></td></tr>
	<tr><td>Date of Birth :</td><td><?php echo $row['dob'];?></td></tr>
	<tr><td>Marital Status:</td><td><?php echo $row['marital_status'];?></td></tr>
	<tr><td>Mobile Number:</td><td><?php echo $row['phno'];?></td></tr>
	<tr><td>Email ID:</td><td><?php echo $row['email'];?></td></tr>
	<tr><td>Address :</td><td><?php echo $row['address'];?></td></tr>
	<tr><td>District :</td><td><?php echo $row['district'];?></td></tr>
	<tr><td>State :</td><td><?php echo $row['state'];?></td></tr>
	<tr><td>Pincode :</td><td><?php echo $row['pincode'];?></td></tr>
	<tr><td>Caste :</td><td><?php echo $row['caste'];?></td></tr>
	<tr><td>Star :</td><td><?php echo $row['star'];?></td></tr>
	<tr><td>Raashi :</td><td><?php echo $row['raashi'];?></td></tr>
	<tr><td>Suddha Jadhagam :</td><td><?php echo $row['suddha_jadakam'];?></td></tr>
	<tr><td>Physical Status :</td><td><?php echo $row['physical_status'];?><br><br></td></tr><br>



	<tr><td><center><h2><b>Family Details</b></h2></center></td></tr>
	<tr><td>Father Name :</td><td><?php echo $row['fathername'];?></td></tr>
	<tr><td>Occupation :</td><td><?php echo $row['father_occupation'];?></td></tr>
	<tr><td>Native Place :</td><td><?php echo $row['father_native_place'];?></td></tr>
	<tr><td>Mother Name :</td><td><?php echo $row['mothername'];?></td></tr>
	<tr><td>Occupation :</td><td><?php echo $row['mother_occupation'];?></td></tr>
	<tr><td>Native Place :</td><td><?php echo $row['mother_native_place'];?></td></tr>
	<tr><td>Number of Sister :</td><td><?php echo $row['no_of_sis'];?></td></tr>
	<tr><td>Number of Brother :</td><td><?php echo $row['no_of_bro'];?></td></tr>
	<tr><td>Family Type :</td><td><?php echo $row['family_type'];?></td></tr>
	<tr><td>Family Value :</td><td><?php echo $row['family_value'];?></td></tr>
	<tr><td>Family Status :</td><td><?php echo $row['family_status'];?><br><br></td></tr><br>
	</form>
	<tr><td><br><?php echo '<a href="test_myprofile.php?id={$profid}" style="background-color: blue; color: white; padding: 6px 12px; text-decoration: none;">View More Details</a>'?></tr></td>

	<tr><td><br><?php echo '<a href="accept.php?uid='.$ne.'" style="background-color: green; color: white; padding: 6px 12px; text-decoration: none;">Accept</a>'?>

	<?php echo '<a href="reject.php?uid='.$ne.'" style="background-color: red; color: white; padding: 6px 12px; text-decoration: none;">Reject</a>'?></tr></td>

	<!-- <tr><td><a href="accept.php"><input type="submit" name="accept" value="Accept" class="btn btn-success"></a></td> -->
      <!-- <td><a href="reject.php"><input type="submit" name="reject" value="Reject" class="btn btn-danger"></a></td></tr> -->
	</tr>
	</form>
    
	</div>
		
</div>
<?php
			  }
?>

