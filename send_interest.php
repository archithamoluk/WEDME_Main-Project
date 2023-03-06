<?php
require_once"dbconfig.php";

 $id= $_SESSION['id'];
 $in_id=$_REQUEST['id'];

$n=iud("insert into tbl_interest(`userid`,`interested_id`) values ('$id','$in_id')");
if($n==1)
{
	echo"<script>alert('Interest Send Successfully');
		 window.location='index.php';
		 </script>";
}
else
{
	echo"<script>alert('Unable to send Interest');
		 window.location='index.php';
		 </script>";
}















?>