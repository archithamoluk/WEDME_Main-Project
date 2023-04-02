<?php
include 'dbconnect.php';
session_start();


$username = $_SESSION['username'];
$sql="UPDATE `tbl_interest` SET status = 'Accepted' WHERE ur_id = '$username'";
if(mysqli_query($con,$sql))
	echo "<script>alert('Interest Accepted');location.href='index.php';</script>"; //
     else
     	{"<script>alert('error!');location.href='index.php';</script>"; //location.href='interestonme.php';
		}

?>
