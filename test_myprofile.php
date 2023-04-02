<?php
include 'dbconnect.php';
error_reporting(0);

?>
<!DOCTYPE html>
 <html class="no-js">
	<head>
		<style>
			td {
  font-family: Arial, sans-serif;
  font-size: 15px;
  color: black;
}

.mySlides {display:none;}

			</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

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

<?php
include 'header.php';

?>

		<div id="fh5co-couple"  class="fh5co-section-gray"  data-stellar-background-ratio="0.5">
			<div class="container">
			<h1>My Profile</h1><br>

			<div class="row">
            <div class="col-sm-8">
              <div style="color:black; font-size:13px;" class="reg-box shado-1">



<?php
	$uname=$_SESSION['username'];
	$age_sql = "SELECT DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y') + 0 AS age FROM tbl_users WHERE email='$uname'";
	$calc_age = mysqli_query($con, $age_sql);
	$age = mysqli_fetch_assoc($calc_age);

	$pic1="";
	$pic2="";
	$pic3="";
	$pic4="";
	$sql2="SELECT * FROM tbl_photo WHERE username='".$uname."'";
	$result2 = mysqli_query($con,$sql2);
	if($result2){
		$row2=mysqli_fetch_array($result2);
		$pic1=$row2['pic1'];
		$pic2=$row2['pic2'];
		$pic3=$row2['pic3'];
		$pic4=$row2['pic4'];
	}


	$sql3="SELECT * FROM tbl_education_details WHERE username='".$uname."'";
	$result3 = mysqli_query($con,$sql3);
	if($result3){
		$row3=mysqli_fetch_array($result3);
		$emp_type = $row3['emp_type'];
		$occupation = $row3['occupation'];
		$income = $row3['income'];
		$highest_qualification = $row3['highest_qualification'];
		$qual_in_details = $row3['qual_in_details'];
		$university = $row3['university'];
		
	}
	$sql1="SELECT * FROM tbl_bio_details WHERE username='".$uname."'";
	$result1 = mysqli_query($con,$sql1);
	if($result1){
		$row1=mysqli_fetch_array($result1);
		$hobbies = $row1['hobbies'];
		$food_preference = $row1['food_preference'];
		$drinking = $row1['drinking'];
		$smoking = $row1['smoking'];
		$bio = $row1['bio'];
		
	}
	
			  //$uname=$_SESSION['username']; 
			  $result = mysqli_query($con, "SELECT * FROM tbl_users,tbl_login where tbl_users.email='$uname' and tbl_login.username='$uname'");
              $row = mysqli_fetch_array($result);
			  $id = $row["uid"];
			  if($row)
              {
				
				
?>



	<table id="customers">

	<tr><td>
	<b>Profile ID: WEDME458<?=$id?></b>

			<div class="card"><br>
			<div class="w3-content w3-section" style="max-width:300px">
  <img class="mySlides" src="profile/<?php echo $uname;?>/<?php echo $pic1;?>" style="width:300px">
  <img class="mySlides" src="profile/<?php echo $uname;?>/<?php echo $pic2;?>" style="width:300px">
  <img class="mySlides" src="profile/<?php echo $uname;?>/<?php echo $pic3;?>" style="width:300px">
  <img class="mySlides" src="profile/<?php echo $uname;?>/<?php echo $pic4;?>" style="width:300px">
  <img class="mySlides" src="../<?php echo $row['photo'];?>" style="width:300px">

</div>

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

	<tr><td><center><h2><b>Education Details</b></h2></center></td></tr><br>
	<tr><td>Highest Qualification :</td><td><?php echo $highest_qualification;?></td></tr>
	<tr><td>Qualification In Details :</td><td><?php echo $qual_in_details;?></td></tr>
	<tr><td>University :</td><td><?php echo $university;?></td></tr>
	<tr><td>Employment Type :</td><td><?php echo $emp_type;?></td></tr>
	<tr><td>Occupation :</td><td><?php echo $occupation;?><br><br></td></tr>
	
	
	<tr><td><center><h2><b>Physical Details</b></h2></center></td></tr>
	<tr><td>Hobbies :</td><td><?php echo $hobbies;?></td></tr>
	<tr><td>Food Preference :</td><td><?php echo $food_preference;?></td></tr>
	<tr><td>Drinking :</td><td><?php echo $drinking;?></td></tr>
	<tr><td>Smoking :</td><td><?php echo $smoking;?></td></tr>
	<tr><td>About Me :</td><td><?php echo $bio;?><br><br></td></tr>
	</form>
    <table>
    <tbody>
				<tr>
					<td>						
						<input style="width: 100%;" onclick="window.location='test_editprofile.php';" type="button" name="login_id" value="Edit Personal,Religion,Family,Physical details" class="btn btn-success">
					</td>
				</tr><br>
				<tr>
                <td>						
						<input style="width: 100%;"  onclick="window.location='test_prof_edu.php';" type="button" name="login_id" value="Edit Education & Professional details" class="btn btn-success">
					</td>
				</tr>
				<tr>
                <td>						
						<input style="width: 100%;" onclick="window.location='test_bio_hob.php';" type="button" name="login_id" value="Edit Bio & Hobbies details" class="btn btn-success" >
					</td>
				</tr>
				<!-- <tr>
                    <td>						
						<input style="width: 100%;" onclick="window.location='test_pers_pref.php';" type="button" name="login_id" value="Edit Personal preference details" >
					</td>
				</tr> -->
                <tr>
                   <!--  <td>						
						<input style="width: 100%;" onclick="window.location='test_part_pref.php';" type="button" name="login_id" value="Edit Partner preference details" class="btn btn-success">
					</td> -->
				</tr>

			</tbody>
    </table>

	</div>
			  </div>
			  </div>	
</div>
<?php
			  }
?>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

</body>
</html>
