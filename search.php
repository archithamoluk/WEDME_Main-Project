<?php
include 'dbconnect.php';
error_reporting(0);
?>

<!DOCTYPE html>
 <html class="no-js">
	<head>
		<style>
            .input-sm, .input-group-sm > .form-control, .input-group-sm > .input-group-addon, .input-group-sm > .input-group-btn > .btn {
    height: 30px;
    padding: 5px 20px;
    font-size: 12px;
    line-height: 1.5;
    border-radius: 3px;
    font-family: sans-serif;
            }
			td {
  font-family: Arial, sans-serif;
  font-size: 15px;
  font-weight: bold;
  color: black;
}
.form-control {
    display: block;
    width: 100%;
    height: 42px;
    padding: 10px 20px;
    font-size: 14px;
    line-height: 1.42857;
    color: white;
    background-color: white;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    -webkit-transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
    -o-transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
    transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
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
			<h1>Search For the Perfect Match</h1><br>

			<div class="row">
            <div class="col-sm-8">
              <div style="color:black; font-size:13px;" class="reg-box shado-1">
              <form method="post" action="">
             


             <div class="row  to-fmid">
                 <div class="col-sm-4 no-padding">
                     <label class="cflo" for="gender">Searching For:</label>
                 </div>
                 <div class="col-sm-8" >
                 <input type="radio" class="radio_1" name="gender" value="Male" <?php echo "checked";?>/> Groom &nbsp;&nbsp;
		         <input type="radio" class="radio_1" name="gender" value="Female"/> Bride
		                 </div>
             </div><br>
             <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          <label class="cflo">Marital Status :</label>
                      </div>
                      <div class="col-sm-8">
                         <select name="marital_status" required="required" style="padding-top: 3px;" class="form-control sml-frm input-sm">
                              <option selected="selected" value="0">Select </option>
                              <option value="Unmarried">Unmarried</option>
							  <option value="Widow / Widower">Widow / Widower</option>
							  <option value="Divorced">Divorced</option>
							  <option value="Separated">Separated</option>
                          </select>
                      </div>
                  </div><br>
                  <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          <label class="cflo">Subcaste :</label>
                      </div>
                      <div class="col-sm-8">
                         <select name="caste" required="required" style="padding-top: 3px;" class="form-control sml-frm input-sm">
                              <option selected="selected" value="0">Select Subcaste</option>
                              <option value="Ezhava">Ezhava</option>
							  <option value="Thiyya">Thiyya</option>
							  <option value="Kavuthiya">Kavuthiya</option>
							  
                          </select>
                      </div>
                  </div><br>
                  <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          <label class="cflo">District :</label>
                      </div>
                      <div class="col-sm-8">
                      <input required="required" type="text" placeholder="Enter district name" class="form-control sml-frm input-sm" name="district" pattern='[a-zA-Z\s]{3,30}' title="Minimum 3 & maximum 30 characters. Letters only permitted.">                      
                         
                      </div>
                  </div><br>
                  <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          <label class="cflo">State :</label>
                      </div>
                      <div class="col-sm-8">
                         <select name="state" required="required" style="padding-top: 3px;" class="form-control sml-frm input-sm">
                              <option selected="selected" value="0">Select </option>
                              <option value="Andhra Pradesh">Andhra Pradesh</option>
                            <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                            <option value="Assam">Assam</option>
                            <option value="Bihar">Bihar</option>
                            <option value="Chandigarh">Chandigarh</option>
                            <option value="Chhattisgarh">Chhattisgarh</option>
                            <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                            <option value="Daman and Diu">Daman and Diu</option>
                            <option value="Delhi">Delhi</option>
                            <option value="Lakshadweep">Lakshadweep</option>
                            <option value="Puducherry">Puducherry</option>
                            <option value="Goa">Goa</option>
                            <option value="Gujarat">Gujarat</option>
                            <option value="Haryana">Haryana</option>
                            <option value="Himachal Pradesh">Himachal Pradesh</option>
                            <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                            <option value="Jharkhand">Jharkhand</option>
                            <option value="Karnataka">Karnataka</option>
                            <option value="Kerala">Kerala</option>
                            <option value="Madhya Pradesh">Madhya Pradesh</option>
                            <option value="Maharashtra">Maharashtra</option>
                            <option value="Manipur">Manipur</option>
                            <option value="Meghalaya">Meghalaya</option>
                            <option value="Mizoram">Mizoram</option>
                            <option value="Nagaland">Nagaland</option>
                            <option value="Odisha">Odisha</option>
                            <option value="Punjab">Punjab</option>
                            <option value="Rajasthan">Rajasthan</option>
                            <option value="Sikkim">Sikkim</option>
                            <option value="Tamil Nadu">Tamil Nadu</option>
                            <option value="Telangana">Telangana</option>
                            <option value="Tripura">Tripura</option>
                            <option value="Uttar Pradesh">Uttar Pradesh</option>
                            <option value="Uttarakhand">Uttarakhand</option>
                            <option value="West Bengal">West Bengal</option>
                          </select>
                      </div>
                  </div><br>
                  <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          <label class="cflo">Age :</label>
                      </div>
                      <div class="col-sm-8">
                      <input required="required" type="number" placeholder="Enter Minimum Age" class="form-control sml-frm input-sm" name="agemin"  title="Numbers only permitted.">   TO                   
                      <input required="required" type="number" placeholder="Enter Maximum Age" class="form-control sml-frm input-sm" name="agemax"  title=" only permitted.">                      

                      </div>
                  </div><br>
                  <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          <label class="cflo">Height :</label>
                      </div>
                      <div class="col-sm-8">
                         <input required="required" type="number" placeholder="Enter Height in cm" 
						 class="form-control sml-frm input-sm" name="height"
						 >
                      </div>
                  </div><br>
                  <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          <label class="cflo">Weight :</label>
                      </div>
                      <div class="col-sm-8">
                         <input required="required" type="number" placeholder="Enter Weight in kg" 
						 class="form-control sml-frm input-sm" name="weight"
						 >
                      </div>
                  </div><br>
                  <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          <label class="cflo">Complexion :</label>
                      </div>
                      <div class="col-sm-8">
                         <select name="skin_color" required="required" style="padding-top: 3px;" class="form-control sml-frm input-sm">
                              <option selected="selected" value="0">Select</option>
                              <option value="fair">Fair</option>
							  <option value="White">White</option>
							  <option value="Black">Black</option>
                          </select>
                      </div>
                  </div><br>
                  <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          
                      </div>
                      <div class="col-sm-8">
                        <button style="font-weight:600; float:right" name="search" class="btn btn-sm btn-success" type="submit">Search</button>
                      </div>
                  </div>

                  </form>

                  <h1>Profiles</h1>
<?php
//only start display profiles if and only if search is triggered
if(isset($_POST['search'])){
   $agemin=$_POST['agemin'];
    $agemax=$_POST['agemax'];
    $marital_status=$_POST['marital_status'];
    $caste=$_POST['caste'];
    $district=$_POST['district'];
    $state=$_POST['state'];
// $religion=$_POST['religion'];
    $height=$_POST['height'];
    $weight=$_POST['weight'];
    $gender= $_POST['gender'];
    $skin_color=$_POST['skin_color'];

$sql="SELECT * FROM tbl_users WHERE 
    gender='$gender' 
    AND age>='$agemin'
    AND age<='$agemax'
    AND marital_status = '$marital_status'
    AND caste = '$caste'
    AND district = '$district'
    AND state = '$state'
    AND height = '$height'
    AND weight = '$weight'
    AND skin_color = '$skin_color'";

    $result = mysqli_query($con,$sql);

 $c_count = '1';

 while ($row = mysqli_fetch_array($result)) {
   // Display profile information here, e.g. name, age, photo, etc.
   echo "<p>" . $row['fname'] . "</>";
   echo "<p>Age: " . $row['age'] . "</p>";
   // Retrieve and display profile photo
//    $photo_result = mysqli_query($con, "SELECT * FROM tbl_photo WHERE username=" . $row['']);
//    if ($photo_row = mysqli_fetch_array($photo_result)) {
//      echo "<img src='profile/" . $photo_row['pic1'] . "' alt='Profile photo'>";
//    }
 }
}
 ?>  

  
</div>
</div>
</div>
</div>
<script src="dist/scripts.min.js"></script>

</body>
</html>