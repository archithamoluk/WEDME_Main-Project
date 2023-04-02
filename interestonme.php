<?php
include 'dbconnect.php';
session_start();
$uname = $_SESSION['username'];
$sql="select * from tbl_login where username='$uname'";
//echo $sql;
$query=mysqli_query($con,$sql);
while($fetch=mysqli_fetch_assoc($query))
{
	$plan = $fetch['plan_status'];
	//echo $plan;
}
if($plan==0)
{
	echo "hai";
	echo "<script>location.href='interestonme_0.php';</script>";
}
else
{
	echo "hello";
	echo "<script>location.href='interestonme_1.php';</script>";
}



?>