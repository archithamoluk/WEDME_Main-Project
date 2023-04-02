<?php

session_start();

include 'dbconnect.php';

$username = $_SESSION['username'];
$sql="UPDATE `tbl_interest` SET status = 'Declined' WHERE ur_id = '$id'";
if(mysqli_query($con,$sql))
	echo "<script>alert('Interest Declined');location.href='index.php';</script>";
     else
     	{"<script>alert('error!');location.href='index.php';</script>";
		}

?>