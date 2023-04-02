<?php
include 'dbconnect.php';

?>

<!DOCTYPE html>
 <html class="no-js">
	<head>
		<style>
			td {
  font-family: Arial, sans-serif;
  font-size: 15px;
  font-weight: bold;
  color: black;
}
			</style>
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
			<h1>Upload Photos</h1><br>

			<div class="row">
            <div class="col-sm-8">
              <div style="color:black; font-size:13px;" class="reg-box shado-1">

   <div class="services">
   	  <div class="col-sm-10 login_left">
	   <form action="" method="post" enctype="multipart/form-data">
  	    <div class="form-item form-type-textfield form-item-name">
	      <label for="edit-name">Upload Your Photos (Upto 4 images, Use 300 x 250 dimensions) <span class="form-required" title="This field is required.">*</span></label><br>
	    <b>Profile Photo1</b><input type="file" id="edit-name" name="pic1" class="form-file required"><br>
        <b>Profile Photo2</b><input type="file" id="edit-name" name="pic2" class="form-file required"><br>
        <b>Profile Photo3</b><input type="file" id="edit-name" name="pic3" class="form-file required"><br>
       <b> Family Photo</b><input type="file" id="edit-name" name="pic4" class="form-file required"><br>
	    </div><br>
	    <div class="form-actions">
	    	<input type="submit" id="edit-submit" name="op" value="Upload" class="btn btn-success">
	    </div>
	   </form>
	   <?php 
              if(isset($_POST['op']))
              {
                $uname=$_SESSION['username'];
                $target = "profile/". $uname ."/";
if (!file_exists($target)) {
    mkdir($target, 0777, true);
}
//specifying target for each file
$target1 = $target . basename( $_FILES['pic1']['name']);
$target2 = $target . basename( $_FILES['pic2']['name']);
$target3 = $target . basename( $_FILES['pic3']['name']);
$target4 = $target . basename( $_FILES['pic4']['name']);


// This gets all the other information from the form
$pic1=($_FILES['pic1']['name']);
$pic2=($_FILES['pic2']['name']);
$pic3=($_FILES['pic3']['name']);
$pic4=($_FILES['pic4']['name']);

$sql="SELECT id FROM tbl_photo WHERE username='".$uname."'";
$result = mysqli_query($con,$sql);

//code part to check weather a photo already exists
if(mysqli_num_rows($result) == 0) {
     // no photo for curret user, do stuff...
		$sql="INSERT INTO tbl_photo (username, pic1, pic2, pic3, pic4) VALUES ('$uname', '$pic1' ,'$pic2', '$pic3','$pic4')";
		// Writes the information to the database
		mysqli_query($con,$sql);

		
} else {
    // There is a photo for customer so up
     $sql="UPDATE tbl_photo SET pic1 = '$pic1', pic2 = '$pic2', pic3 = '$pic3', pic4 = '$pic4' WHERE username='".$uname."'";
		// Writes the information to the database
                mysqli_query($con,$sql);
}

// Writes the photo to the server
if(move_uploaded_file($_FILES['pic1']['tmp_name'], $target1)&&move_uploaded_file($_FILES['pic2']['tmp_name'], $target2)&&move_uploaded_file($_FILES['pic3']['tmp_name'], $target3)&&move_uploaded_file($_FILES['pic4']['tmp_name'], $target4))
{
    echo "<script>
                    alert('Photo Uploaded Successfully!');
                    location.href='test_myprofile.php';
            </script>";
}
else {
    echo "<script>alert('Unable to Upload Photos!');
            location.href='photoupload.php';
    </script>";
}

              }
              ?>
			  
	  </div>
	
	  <div class="clearfix"> </div>
   </div>
  </div>
</div>


<!-- FlexSlider -->
<script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>   
</html>