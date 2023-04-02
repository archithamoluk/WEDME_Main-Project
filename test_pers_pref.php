<?php
include 'dbconnect.php';

//$_SESSION['username'] = 'sam@gmail.com';
//$username = 'sam@gmail.com';
$username = $_SESSION['username'];



$sql1="SELECT * FROM profession_education WHERE username='".$username."'";
$query=mysqli_query($con,$sql1);



while($fetch=mysqli_fetch_assoc($query))
{
	$emp_type = $fetch['emp_type'];
	$occupation = $fetch['occupation'];
	$income = $fetch['income'];
	$highest_qualification = $fetch['highest_qualification'];
	$qual_in_details = $fetch['qual_in_details'];
	$university = $fetch['university'];
	
}
?>



<div>
    <div>
        <h3> Update Education and Professional Details
    </div>
	<div>
	<form method="post" action="">
		<table>
			<tbody>
				<tr>
					<td>
						Username:
					</td>
					<td>
						
						<input style="width: 100%;" type="text" name="username" placeholder="<?php echo $username; ?>" readonly>
					</td>
				</tr>
				<tr>
					<td>
						Employement type :
					</td>
					<td>
						<input style="width: 100%;" type="text" name="emp_type" placeholder="<?php echo $emp_type; ?>" required>
					</td>
				</tr>

				<tr>
					<td>
						Occupation :
					</td>
					<td>
						<input style="width: 100%;" type="text" name="occupation" placeholder="<?php echo $occupation; ?>" required>
					</td>
				</tr>
				<tr>
					<td>
						Annual Income:
					</td>
					<td>
						<input style="width: 100%;" type="text" name="income" placeholder="<?php echo $income; ?>" required>
					</td>
				</tr>
				<tr>
					<td>
						Highest Qualification :
					</td>
					<td>
						<input class="inputbox" style="width: 100%;" type="text" name="highest_qualification" placeholder="<?php echo $highest_qualification; ?>" >
					</td>
				</tr>
				
				<tr>
					<td>
						Qualification in Detail :
					</td>
					<td>
						<input style="width: 100%;" type="text" name="qual_in_details" placeholder="<?php echo $qual_in_details; ?>" >
					</td>
				</tr>
                <tr>
					<td>
						Univeristy :
					</td>
					<td>
						<input style="width: 100%;" type="text" name="university" placeholder="<?php echo $university; ?>" >
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
	$emp_type = $_POST['emp_type'];
	$occupation = $_POST['occupation'];
	$income = $_POST['income'];
	$highest_qualification = $_POST['highest_qualification'];
	$qual_in_details = $_POST['qual_in_details'];
	$university = $_POST['university'];

$query = "UPDATE profession_education SET 
	emp_type = '".$emp_type."',
	occupation = '".$occupation."',
	income ='".$income."',
	highest_qualification = '".$highest_qualification."',
	qual_in_details = '".$qual_in_details."',
	university = '".$university."'
	WHERE username='".$username."'";

    

if(mysqli_query($con,$query))
	{
		echo "<script>alert('You have Successfully Updated your Profile!')</script>";
		
	}
}
?>