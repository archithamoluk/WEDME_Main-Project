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
				        <div class="row">
            
            <div class="col-sm-8">
              <div style="color:black; font-size:13px;" class="reg-box shado-1">
                  <h1>Edit Profile</h1><br>



<?php
$username = $_SESSION['username'];
//$username = "$_SESSION['username']";
$sql1="SELECT * FROM tbl_users WHERE email='".$username."'";
//echo $sql1;
// $query=mysqli_query($con,"SELECT * FROM register WHERE username='".$username."'");
if($result=mysqli_query($con,$sql1))
{
	//echo "success";
}
else
echo "fail ".mysqli_error($con);

// $fetch=mysqli_query($con,$sql1);
//echo $username;
//echo $query;
// $fetch = mysqli_fetch_assoc($query);

while($row= mysqli_fetch_array($result))
{
	
	//echo "  ";
	$uname22 = $row['email'];
	$created = $row['created'];
	$name = $row['fname']." ".$row['lname'];
	$dob = $row['dob'];
	$gender = $row['gender'];
	$marital_status = $row['marital_status'];
	$email = $row['email'];
	$phno = $row['phno'];
	$address = $row['address'];
	$district = $row['district'];
	$state = $row['state'];
	$pincode = $row['pincode'];
	$caste = $row['caste'];
	$star = $row['star'];
	$raashi = $row['raashi'];
	$suddha_jadakam = $row['suddha_jadakam'];
	$fathername = $row['fathername'];
	$father_occupation = $row['father_occupation'];
	$father_native_place = $row['father_native_place'];
	$mothername = $row['mothername'];
	$mother_occupation = $row['mother_occupation'];
	$mother_native_place = $row['mother_native_place'];
	$no_of_bro = $row['no_of_bro'];
	$no_of_sis = $row['no_of_sis'];
	$family_type = $row['family_type'];
	$family_value = $row['family_value'];
	$family_status = $row['family_status'];
	$height = $row['height'];
	$weight = $row['weight'];
	$skin_color = $row['skin_color'];
	$physical_status = $row['physical_status'];
	$photo = $row['photo'];

	// Ek ek karke variables me store karna paad raha he
}

	

?>


<div>
	<div>
	<form method="post" action="test_editprofile.php">
		<table>
			<tbody>
			<tr>
					<td>
					<br><br><h3>Personal Informations</h3>
					</td>
				</tr>
				<tr>
					<td>
						Profile created by :
					</td>
					<td>
					<br><input style="width: 100%;" type="text" name="login_id" placeholder="<?php echo $created; ?>" readonly>
					</td>
				</tr>

				<tr>
					<td>
						Name :
					</td>
					<td>
					<br><input style="width: 100%;" type="text" name="name" placeholder="<?php echo $name; ?>" readonly>
					</td>
				</tr>
				<tr>
					<td>
						Date of Birth:
					</td>
					<td>
					<br><input style="width: 100%;" type="text" name="login_id" placeholder="<?php echo $dob; ?>" >
					</td>
				</tr>
				<tr>
					<td>
						Gender:
					</td>
					<td>
					<br><input class="inputbox" style="width: 100%;" type="text" name="login_id" placeholder="<?php echo $gender; ?>" >
					</td>
				</tr>
				<tr>
					<td>
						Marital status:
					</td>
					<td>
					<br><input style="width: 100%;" type="text" name="login_id" placeholder="<?php echo $marital_status; ?>" >
					</td>
				</tr>
				<tr>
					<td>
						Email:
					</td>
					<td>
					<br><input style="width: 100%;" type="text" name="login_id" placeholder="<?php echo $email; ?>" >
					</td>
				</tr>
				<tr>
					<td>
						Phone Number:
					</td>
					<td>
					<br>	<input style="width: 100%;" type="text" name="login_id" placeholder="<?php echo $phno; ?>" >
					</td>
				</tr>
				<tr>
					<td>
						Address:
					</td>
					<td>
					<br><input style="width: 100%;" type="text" name="address" placeholder="<?php echo $address; ?>" required>
					</td>
				</tr>
				<tr>
					<td>
						District:
					</td>
					<td>
					<br><input style="width: 100%;" type="text" name="district" placeholder="<?php echo $district; ?>" required>
					</td>
				</tr>
				<tr>
					<td>
						State :
					</td>
					<td>
						<!-- <input style="width: 100%;" type="text" name="state" placeholder="<?php echo $state; ?>" required> -->
						<br><select name="state">
						<option selected="selected" value="0">Select State</option>
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
					</td>
				</tr>
				<tr>
					<td>
						Pincode:
					</td>
					<td>
					<br><input style="width: 100%;" type="text" name="pincode" placeholder="<?php echo $pincode; ?>" required>
					</td>
				</tr>
				<tr>
					<td>
					<br><br><h3>Religious Informations</h3>
					</td>
				</tr>
				
				<tr>
					<td>
						Subcaste :
					</td>
					<td>
					<br>	<input style="width: 100%;" type="text" name="caste" placeholder="<?php echo $caste; ?>" required>
					</td>
				</tr>
				<tr>
					<td>
						Star:
					</td>
					<td>
					<br><input style="width: 100%;" type="text" name="star" placeholder="<?php echo $star; ?>" required>
					</td>
				</tr>
				<tr>
					<td>
						Raashi:
					</td>
					<td>
					<br><input style="width: 100%;" type="text" name="raashi" placeholder="<?php echo $raashi; ?>" required>
					</td>
				</tr>
				
				<tr>
					<td>
						Suddha Jadhagam :
					</td>
					<td>
					<br><input style="width: 100%;" type="text" name="suddha_jadakam" placeholder="<?php echo $suddha_jadakam; ?>" required>
					</td>
				</tr>
				<tr>
					<td>
						<br><br><h3>Family Informations</h3>
					</td>
				</tr>
				<tr>
					<td>
						Fathername :
					</td>
					<td>
					<br><input style="width: 100%;" type="text" name="fathername" placeholder="<?php echo $fathername; ?>" required>
					</td>
				</tr>
				<tr>
					<td>
						Father Occupation :
					</td>
					<td>
					<br>	<input style="width: 100%;" type="text" name="father_occupation" placeholder="<?php echo $father_occupation; ?>" required>
					</td>
				</tr>
				<tr>
					<td>
						Father Native Place :
					</td>
					<td>
					<br><input style="width: 100%;" type="text" name="father_native_place" placeholder="<?php echo $father_native_place; ?>" required>
					</td>
				</tr>
				<tr>
					<td>
					Mothername :
					</td>
					<td>
					<br>	<input style="width: 100%;" type="text" name="mothername" placeholder="<?php echo $mothername; ?>" required>
					</td>
				</tr>
				<tr>
					<td>
						Mother Occupation :
					</td>
					<td>
					<br><input style="width: 100%;" type="text" name="mother_occupation" placeholder="<?php echo $mother_occupation; ?>" required>
					</td>
				</tr>
				<tr>
					<td>
						Mother Native Place :
					</td>
					<td>
					<br><input style="width: 100%;" type="text" name="mother_native_place" placeholder="<?php echo $mother_native_place; ?>" required>
					</td>
				</tr>
				<tr>
					<td>
						Number of Sister :
					</td>
					<td>
					<br><input style="width: 100%;" type="text" name="no_of_sis" placeholder="<?php echo $no_of_sis; ?>" required>
					</td>
				</tr>
				<tr>
					<td>
						Number of Brother :
					</td>
					<td>
					<br><input style="width: 100%;" type="text" name="no_of_bro" placeholder="<?php echo $no_of_bro; ?>" required>
					</td>
				</tr>
				<tr>
					<td>
						Family Status:
					</td>
					<td>
						<!-- <input style="width: 100%;" type="text" name="family_status" placeholder="<?php echo $family_status; ?>" required> -->
						<br>	<input type="radio" name="family_status" value="Lower Class">Lower Class
						<input type="radio" name="family_status" value="Lower Class">Middle Class
						<input type="radio" name="family_status" value="Lower Class">Upper Class
					</td>
				</tr>
				<tr>
					<td>
						Family type:
					</td>
					<td>
						<!-- <input style="width: 100%;" type="text" name="family_type" placeholder="<?php echo $family_type; ?>" required> -->
						<br><input type="radio" name="family_type" value="Joint">Joint
						<input type="radio" name="family_type" value="Nuclear">Nuclear
					</td>
				</tr>
				<tr>
					<td>
						Family Value:
					</td>
					<td>
						<!-- <input style="width: 100%;" type="text" name="family_value" placeholder="<?php echo $family_value; ?>" required> -->
						<br><input type="radio" name="family_value" value="Orthodox">Orthodox
						<input type="radio" name="family_value" value="Traditional">Traditional
						<input type="radio" name="family_value" value="Moderate">Moderate
						<input type="radio" name="family_value" value="Liberal">Liberal
					</td>
				</tr>
				<tr>
					<td>
					<br><br><h3>Physical Informations</h3>
					</td>
				</tr>
				<tr>
					<td>
						Height:
					</td>
					<td>
					<br>	<input style="width: 100%;" type="text" name="height" placeholder="<?php echo $height; ?>" required>
					</td>
				</tr>
				<tr>
					<td>
						Weight:
					</td>
					<td>
					<br><input style="width: 100%;" type="text" name="weight" placeholder="<?php echo $weight; ?>" required>
					</td>
				</tr>
				<tr>
					<td>
						Complexion:
					</td>
					<td>
						<!-- <input style="width: 100%;" type="text" name="skin_color" placeholder="<?php echo $skin_color; ?>" required> -->
						<br><select name="skn_color">
						<option selected="selected" value="0">Select</option>
                              <option value="Ezhava">Fair</option>
							  <option value="Thiyya">White</option>
							  <option value="Kavuthiya">Black</option>
</select>
					</td>
				</tr>
				<tr>
					<td>
						Physical ability:
					</td>
					<td>
						<!-- <input style="width: 100%;" type="text" name="physical_status" placeholder="<?php echo $physical_status; ?>" required> -->
						<br><input type="radio" name="physical_status" value="Normal">Normal
						<input type="radio" name="physical_status" value="Physically Challenged">Physically Challenged
					</td>
				</tr>
				<tr>
					<td>
						
					</td>
					<td>
						<br><br><input type="submit" value="SAVE" name='Reg_sub' class="btn btn-success">
					</td>
				</tr>



			</tbody>
		</table>
	</form>
	</div>
		
</div>

<?php 

if(isset($_POST['Reg_sub']))
{
	//echo " Success";
	$username = $_SESSION['username'];

	//$prof = $_FILES["prof"]["tmp_name"];
	$address = $_POST['address'];
	$district = $_POST['district'];
	$state = $_POST['state'];
	$pincode = $_POST['pincode'];
	$caste = $_POST['caste'];
	$star = $_POST['star'];
	$raashi = $_POST['raashi'];
	$suddha_jadakam = $_POST['suddha_jadakam'];
	$fathername = $_POST['fathername'];
	$father_native_place = $_POST['father_native_place'];
	$father_occupation = $_POST['father_occupation'];
	$mothername = $_POST['mothername'];
	$mother_native_place = $_POST['mother_native_place'];
	$mother_occupation = $_POST['mother_occupation'];
	$no_of_bro = $_POST['no_of_bro'];
	$no_of_sis = $_POST['no_of_sis'];
	$family_status = $_POST['family_status'];
	$family_type = $_POST['family_type'];
	$family_value = $_POST['family_value'];
	$height = $_POST['height'];
	$weight = $_POST['weight'];
	$skin_color = $_POST['skin_color'];
	$physical_status = $_POST['physical_status'];

$query = "UPDATE tbl_users SET 
	address = '".$address."',
	district = '".$district."',
	state ='".$state."',
	pincode = '".$pincode."',
	caste = '".$caste."',
	star = '".$star."',
	raashi = '".$raashi."',
	suddha_jadakam = '".$suddha_jadakam."',
	fathername = '".$fathername."',
	father_native_place = '".$father_native_place."',
	father_occupation = '".$father_occupation."',
	mothername = '".$mothername."',
	mother_native_place = '".$mother_native_place."',
	mother_occupation = '".$mother_occupation."',
	no_of_bro = '".$no_of_bro."',
	no_of_sis = '".$no_of_sis."',
	family_status = '".$family_status."',
	family_type ='".$family_type."',
	family_value = '".$family_value."',
	height = '".$height."',
	weight = '".$weight."',
	skin_color = '".$skin_color."',
	physical_status = '".$physical_status."'
	WHERE email ='".$username."'";


if(mysqli_query($con,$query))
	{
		echo "<script>alert('You have Successfully Updated your Profile!')</script>";
		echo "<script>location.href='test_myprofile.php'</script>";
	}
}
?>
</body>
</html>