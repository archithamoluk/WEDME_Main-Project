<?php
require_once"dbconfig.php";
	if(isset($_REQUEST['login']))
	{
		
	$email=trim($_REQUEST['email']);
	$password=trim($_REQUEST['password']);
	
	$valid=true;
	 $query="select * from tbl_users where email='$email' and password='$password'";
	
	
	
	if($valid)
	{
	$login_data=select($query);
	$n=mysqli_num_rows($login_data);
	if($n==1)
	{
		while($data=mysqli_fetch_array($login_data))
		{
		extract($data);
		
		}
		
		$_SESSION['id']=$id;
		$_SESSION['login']="yes";
		
		echo"<script>alert('Login success');
		 window.location='index.php';
		 </script>";
	}
	else
	{
		echo"<script>alert('INVALID USERNAME OR PASSWORD');
		window.location='index.php';
		</script>";
	}
	}
		
	}


if(isset($_REQUEST['register']))
{
	extract($_REQUEST);
	$error=$_FILES["myimage"]["error"];

$img_name=$_FILES["myimage"]["name"];
$type=$_FILES["myimage"]["type"];
$size=$_FILES["myimage"]["size"];
$tmp_name=$_FILES["myimage"]["tmp_name"];

	move_uploaded_file($tmp_name,"images/$img_name");
	
	 echo $t="INSERT INTO `tbl_users`( `name`, `cast`, `gender`,`dob`, `religion`, `mobile`, `email`,`password`, `img`) 
	 VALUES ('$name','$cast','$gender','$dob','$religion','$mobile','$email','$password','$img_name')";
	
	 $n=iud($t);
	if($n==1)
	{
		echo"<script>alert('Registration Successful');
		 window.location='index.php';
		 </script>";
	}else
	{
		echo"<script>alert('Something Wrong');
		 window.location='index.php';
		 </script>";
	}
}




if(isset($_REQUEST['update_profile']))
	{
		
		extract($_REQUEST);
		
		$error=$_FILES["myfile"]["error"];

$name_i=$_FILES["myfile"]["name"];
$type=$_FILES["myfile"]["type"];
$size=$_FILES["myfile"]["size"];
$tmp_name=$_FILES["myfile"]["tmp_name"];

	move_uploaded_file($tmp_name,"images/$name_i");
	
		  $query="UPDATE `tbl_users` SET `name`='$name',
		 `age`='$age',`dob`='$dob',`height`='$height',
		 `mobile`='$mobile',`email`='$email',`img`='$name_i',`profession`='$profession',
		 `qualification_details`='$qualification',`Hobbies`='$hobby',`location`='$location',
		 `about`='$about',`mother`='$mother',`father`='$father',`income`='$income',`lifestyle`='$lifestyle',
		 `language`='$language',`bg`='$bg',`marital`='$marital' WHERE id='$id'";
	$n=iud($query);
	 if($n==1)
	 {
		
		echo"<script>alert(' Profile Updated Successfully');
		 window.location='update_profile.php';
		 </script>";
		
		 }
		 else
		 {
			 echo"<script>alert('Unable to Update Profile');
		 window.location='update_profile.php';
		 </script>";
		 }
	
	}
	

	










?>