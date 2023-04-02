<?php
include 'dbconnect.php';
include 'header.php';
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
                  <h1>Update Bio And Hobbies</h1><br>



<?php

$sql1="SELECT * FROM tbl_bio_details WHERE username='".$username."'";
$query=mysqli_query($con,$sql1);



while($fetch=mysqli_fetch_assoc($query))
{
	$hobbies = $fetch['hobbies'];
	$food_preference = $fetch['food_preference'];
	$drinking = $fetch['drinking'];
	$smoking = $fetch['smoking'];
	$bio = $fetch['bio'];
	
	
}
?>



<div>
    <div>
        
    </div>
	<div>
	<form method="post" action="">
		<table>
			<tbody>
				<tr>
					<td>
						Write about yourself :
					</td>
					<td>
					<br><input style="width: 100%;" type="text" name="bio" placeholder="<?php echo $bio; ?>" required><br>
					</td>
				</tr>

				<tr>
					<td>
						Write about your hobbies :
					</td>
					<td>
					<br><input style="width: 100%;" type="text" name="hobbies" placeholder="<?php echo $hobbies; ?>" required><br>
					</td>
				</tr>
				<tr>
					<td>
						What are your food preferences :
					</td>
					<td>
					<br><input style="width: 100%;" type="text" name="food_preference" placeholder="<?php echo $food_preference; ?>" required><br>
					</td>
				</tr>
				<tr>
					<td>
						Do you drink? :
					</td>
					<td>
					<br><input class="inputbox" style="width: 100%;" type="text" name="drinking" placeholder="<?php echo $drinking; ?>" required><br>
					</td>
				</tr>
				
				<tr>
					<td>
						Do you smoke ? :
					</td>
					<td>
					<br><input style="width: 100%;" type="text" name="smoking" placeholder="<?php echo $smoking; ?>" required><br>
					</td>
				</tr>
                
                <tr>
					<td>
						
					</td>
					<td>
						<br><br><input type="submit" name='Submit' Value="SAVE" class="btn btn-success">
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
	$hobbies = $_POST['hobbies'];
	$food_preference = $_POST['food_preference'];
	$drinking = $_POST['drinking'];
	$smoking = $_POST['smoking'];
	$bio = $_POST['bio'];
	

$query = "UPDATE tbl_bio_details SET 
	hobbies = '".$hobbies."',
	food_preference = '".$food_preference."',
	drinking ='".$drinking."',
	smoking = '".$smoking."',
	bio = '".$bio."'
	WHERE username='".$username."'";

    

if(mysqli_query($con,$query))
	{
		echo "<script>alert('You have Successfully Updated your Profile!')</script>";
		echo "<script>location.href='test_myprofile.php'</script>";

	}
}
?>