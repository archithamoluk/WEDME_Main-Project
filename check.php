<?php

$username=$_POST['username'];
$password=$_POST['password']; 
 
 include('dbconnect.php');
	$result = mysqli_query($con,"SELECT * FROM tbl_login WHERE username='$username'AND password='$password' and user_status='1'");
	$flag=0;
	$status='0';
	if($result)
	{
		while($row = mysqli_fetch_array($result))
		{
	       $status=$row['user_status'];
	  	   if($status==1)
	       {
	        $flag=1;
	  	    session_start();
	        $type=$row['type'];
	  	    $_SESSION['user'] = $type;
	  	    $_SESSION['username'] = $username;
	      }
	  
		}
	}
  
    if($flag==1 && $type=="admin")
  echo "<script>location.href='admin/index.php'</script>";
  else if($flag==1 && $type=="user")
  echo "<script>location.href='user/index.php'</script>";

  
  else if($status=='0')
	  echo"<script>alert('You are Deactivated by ADMIN');location.href='index.php';</script>";
  else
	  echo"<script>alert('Invalid Username or Password');location.href='index.php';</script>";
	   
 
mysqli_close($con);
?>