<?php
session_start();
$con=mysqli_connect("localhost","root","","wedme") or die ("connection error") ;


function iud($query)
{
	$con=mysqli_connect("localhost","root","","wedme") or die ("connection error") ;
	$result=mysqli_query($con,$query);
	$n=mysqli_affected_rows($con);
	mysqli_close($con);
	return $n;
}

function select($query)
{
$con=mysqli_connect("localhost","root","","wedme") or die ("connection error") ;
	$result=mysqli_query($con,$query);
	mysqli_close($con);
	return $result;
	
}


?>