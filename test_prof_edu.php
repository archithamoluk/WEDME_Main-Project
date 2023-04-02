<?php
include 'dbconnect.php';
include 'header.php';
error_reporting(0);
$username = $_SESSION['username'];
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
			<h3> Update Education and Professional Details </h3><br>

				        <div class="row">
            
            <div class="col-sm-8">
              <div style="color:black; font-size:13px;" class="reg-box shado-1">




<?php

$sql1="SELECT * FROM tbl_education_details WHERE username='".$username."'";
//echo $sql1;
$query=mysqli_query($con,$sql1);



while($fetch=mysqli_fetch_array($query))
{
	$emp_type = $row['emp_type'];
	$occupation = $row['occupation'];
	$income = $row['income'];
	$highest_qualification = $row['highest_qualification'];
	$qual_in_details = $row['qual_in_details'];
	$university = $row['university'];
	
}
?>



<div>
    <div>
    </div>
	<div>
	<form method="post" action="test_prof_edu.php">
		<table>
			<tbody>
				<tr>
					<td><h3> Professional Details</h3> </td>
				</tr>
				<tr>
					<td>
						Employement type :
					</td>
					<td>
						<!-- <input style="width: 100%;" type="text" name="emp_type" placeholder="<?php echo $emp_type; ?>" required> -->
						<input type="radio" name="emp_type" value="Government">Government 
						<input type="radio" name="emp_type" value="Private">Private
						<input type="radio" name="emp_type" value="Freelancer">Freelancer
						<input type="radio" name="emp_type" value="Unemployed">Unemployed
					</td>
				</tr>

				<tr>
					<td>
						Occupation :
					</td>
					<td>
					<br><input style="width: 100%;" type="text" name="occupation" placeholder="<?php echo $occupation; ?>" required>
					</td>
				</tr>
				<tr>
					<td>
						Annual Income:
					</td>
					<td>
					<br><input style="width: 100%;" type="text" name="income" placeholder="<?php echo $income; ?>" required>
					</td>
				</tr>
				<tr>
					<td><br><br><h3> Educational Details</h3></td>
				</tr>
				<tr>
					<td>
						Highest Qualification :
					</td>
					<td>
					<br><input class="inputbox" style="width: 100%;" type="text" name="highest_qualification" placeholder="<?php echo $highest_qualification; ?>" required>
					</td>
				</tr>
				
				<tr>
					<td>
						Qualification in Detail :
					</td>
					<td>
					<br><input style="width: 100%;" type="text" name="qual_in_details" placeholder="<?php echo $qual_in_details; ?>" required>
					</td>
				</tr>
                <tr>
					<td>
						Univeristy :
					</td>
					<td>
					<br><input style="width: 100%;" type="text" name="university" placeholder="<?php echo $university; ?>" required>
					</td>
				</tr>
                <tr>
					<td>
						
					</td>
					<td>
					<br><input type="submit" name='Submit' Value="SAVE" class="btn btn-success">
					</td>
				</tr>



			</tbody>
		</table>
	</form>
	</div>
		
</div>

<?php 

if(isset($_POST['Submit']))
{
    
    $username = $_SESSION['username'];
	$emp_type = $_POST['emp_type'];
	$occupation = $_POST['occupation'];
	$income = $_POST['income'];
	$highest_qualification = $_POST['highest_qualification'];
	$qual_in_details = $_POST['qual_in_details'];
	$university = $_POST['university'];

$query = "UPDATE tbl_education_details SET 
	emp_type = '".$emp_type."',
	occupation = '".$occupation."',
	income ='".$income."',
	highest_qualification = '".$highest_qualification."',
	qual_in_details = '".$qual_in_details."',
	university = '".$university."'
	WHERE username='".$username."'";
//echo $query;
    

if(mysqli_query($con,$query))
	{
		echo "<script>alert('You have Successfully Updated your Profile!')</script>";
		echo "<script>location.href='test_myprofile.php'</script>";

	}
}
?>