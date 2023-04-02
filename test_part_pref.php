<?php
include 'header.php';
include 'dbconnect.php';
//$_SESSION['username'] = 'sam@gmail.com';
//$username = 'sam@gmail.com';
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
				        <div class="row">
            
            <div class="col-sm-8">
              <div style="color:black; font-size:13px;" class="reg-box shado-1">
                  <h1>My Profile</h1><br>




<?php
$sql1="SELECT * FROM tbl_partner_preference WHERE username='".$username."'";
$query=mysqli_query($con,$sql1);



while($fetch=mysqli_fetch_assoc($query))
{
	$age = $fetch['age'];
	$height = $fetch['height'];
	$marital_status = $fetch['marital_status'];
	$physical_status = $fetch['physical_status'];
	$eating_habits = $fetch['eating_habits'];
	$drink_habit = $fetch['drink_habit'];
    $smoking = $fetch['smoking'];
	$religion = $fetch['religion'];
	$caste = $fetch['caste'];
	$star = $fetch['star'];
    $dosham = $fetch['dosham'];
	$education = $fetch['education'];
	$emp_status = $fetch['emp_status'];
	$occupation = $fetch['designation'];
    $annual_income = $fetch['annual_income'];
	$state = $fetch['state'];
	$district = $fetch['district'];
	$family_type = $fetch['family_type'];
    $family_value = $fetch['family_value'];
	$fathers_occup = $fetch['fathers_occup'];
	$mother_occup = $fetch['mother_occup'];
	
	
}
?>



<div>
    <div>
        <h3> Choose Partner's preferences here
    </div>
	<div>
	<form method="post" action="">
		<table>
			<tbody>
				<!-- <tr>
					<td>
						'''Dummy Username''':
					</td>
					<td>
						
						<input style="width: 100%;" type="text" name="username" placeholder="<?php echo $username; ?>" readonly>
					</td>
				</tr> -->
				<tr>
					<td>
						Age between :
					</td>
					<td>
						<input style="width: 100%;" type="text" name="age" placeholder="<?php echo $age; ?>"required>
					</td>
				</tr>

				<tr>
					<td>
                    Height :
					</td>
					<td>
						<input style="width: 100%;" type="text" name="height" placeholder="<?php echo $height; ?>" required>
					</td>
				</tr>
				<tr>
					<td>
                    Marital status:
					</td>
					<td>
						<input style="width: 100%;" type="text" name="marital_status" placeholder="<?php echo $marital_status; ?>" required>
					</td>
				</tr>
				<tr>
					<td>
                    Physical status :
					</td>
					<td>
						<input class="inputbox" style="width: 100%;" type="text" name="physical_status" placeholder="<?php echo $physical_status; ?>" required>
					</td>
				</tr>
				<tr>
					<td>
                    Eating habit :
					</td>
					<td>
						<input style="width: 100%;" type="text" name="eating_habits" placeholder="<?php echo $eating_habits; ?>" required>
					</td>
				</tr>
                <tr>
					<td>
                    Drinking habit :
					</td>
					<td>
						<input style="width: 100%;" type="text" name="drink_habit" placeholder="<?php echo $drink_habit; ?>" required>
					</td>
				</tr>
                <tr>
					<td>
                    Smoking habit :
					</td>
					<td>
						<input class="inputbox" style="width: 100%;" type="text" name="smoking" placeholder="<?php echo $smoking; ?>" required>
					</td>
				</tr>
                <tr>
					<td><h3> Religious Details</h3></td>
				</tr>
				<tr>
					<td>
                    Religion :
					</td>
					<td>
						<input style="width: 100%;" type="text" name="religion" placeholder="<?php echo $religion; ?>" required>
					</td>
				</tr>
                <tr>
					<td>
                    Caste :
					</td>
					<td>
						<input style="width: 100%;" type="text" name="caste" placeholder="<?php echo $caste; ?>" required>
					</td>
				</tr>
                <tr>
					<td>
                    Star :
					</td>
					<td>
						<input class="inputbox" style="width: 100%;" type="text" name="star" placeholder="<?php echo $star; ?>" required>
					</td>
				</tr>
				<tr>
					<td>
                    Dosham :
					</td>
					<td>
						<input style="width: 100%;" type="text" name="dosham" placeholder="<?php echo $dosham; ?>" required>
					</td>
				</tr>
                <tr>
					<td><h3> Qualification & Job Details</h3></td>
				</tr>
                <tr>
					<td>
                    Education Qualification :
					</td>
					<td>
						<input style="width: 100%;" type="text" name="education" placeholder="<?php echo $education; ?>" required>
					</td>
				</tr>
                <tr>
					<td>
                    Employement Type :
					</td>
					<td>
						<input class="inputbox" style="width: 100%;" type="text" name="emp_status" placeholder="<?php echo $emp_status; ?>" required>
					</td>
				</tr>
				<tr>
					<td>
                    Job Occupation :
					</td>
					<td>
						<input style="width: 100%;" type="text" name="occupation" placeholder="<?php echo $occupation; ?>" required>
					</td>
				</tr>
                <tr>
					<td>
                    Annual Income :
					</td>
					<td>
						<input style="width: 100%;" type="text" name="annual_income" placeholder="<?php echo $annual_income; ?>" required>
					</td>
				</tr>
                <tr>
					<td><h3> Location </h3></td>
				</tr>
                <tr>
					<td>
                    State :
					</td>
					<td>
						<input class="inputbox" style="width: 100%;" type="text" name="state" placeholder="<?php echo $state; ?>" required>
					</td>
				</tr>
				<tr>
					<td>
                    District :
					</td>
					<td>
						<input style="width: 100%;" type="text" name="district" placeholder="<?php echo $district; ?>" required>
					</td>
				</tr>
                <tr>
					<td><h3> Family Preferences</h3></td>
				</tr>
                <tr>
					<td>
                    Family Type :
					</td>
					<td>
						<input style="width: 100%;" type="text" name="family_type" placeholder="<?php echo $family_type	; ?>" required>
					</td>
				</tr>
                <tr>
					<td>
                    Family Value :
					</td>
					<td>
						<input style="width: 100%;" type="text" name="family_value" placeholder="<?php echo $family_value ; ?>" required>
					</td>
				</tr>
                <tr>
					<td>
                    Father's Occupation :
					</td>
					<td>
						<input style="width: 100%;" type="text" name="fathers_occup" placeholder="<?php echo $fathers_occup	; ?>" required>
					</td>
				</tr>
                <tr>
					<td>
                    Mother's Occupation :
					</td>
					<td>
						<input style="width: 100%;" type="text" name="mother_occup" placeholder="<?php echo $mother_occup	; ?>" required>
					</td>
				</tr>
                <tr>
					<td>
						
					</td>
					<td>
						<input type="submit" name='Submit' Value="SAVE">
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
    $age = $_POST['age'];
	$height = $_POST['height'];
	$marital_status = $_POST['marital_status'];
	$physical_status = $_POST['physical_status'];
	$eating_habits = $_POST['eating_habits'];
	$drink_habit = $_POST['drink_habit'];
	$smoking = $_POST['smoking'];
    $religion = $_POST['religion'];
	$caste = $_POST['caste'];
	$star = $_POST['star'];
	$dosham = $_POST['dosham'];
	$education = $_POST['education'];
    $emp_status = $_POST['emp_status'];
	$occupation = $_POST['occupation'];
	$annual_income = $_POST['annual_income'];
	$state = $_POST['state'];
	$district = $_POST['district'];
    $family_type = $_POST['family_type'];
	$family_value = $_POST['family_value'];
	$fathers_occup = $_POST['fathers_occup'];
	$mother_occup = $_POST['mother_occup'];
	

$query = "UPDATE tbl_partner_preference SET 
	age = '".$age."',
	height = '".$height."',
	marital_status = '".$marital_status."',
	physical_status = '".$physical_status."',
    eating_habits ='".$eating_habits."',
	drink_habit = '".$drink_habit."',
	smoking = '".$smoking."',
    religion = '".$religion."',
	caste = '".$caste."',
    star ='".$star."',
	dosham = '".$dosham."',
	education = '".$education."',
    emp_status ='".$emp_status."',
	designation = '".$occupation."',
	annual_income = '".$annual_income."',
	state = '".$state."',
    district ='".$district."',
	family_type = '".$family_type."',
	family_value = '".$family_value."',
    fathers_occup ='".$fathers_occup."',
	mother_occup = '".$mother_occup."'
	WHERE username='".$username."'";

    //echo $query;

if(mysqli_query($con,$query))
	{
		echo "<script>alert('You have Successfully Updated your Profile!')</script>";
		
	}
}
?>