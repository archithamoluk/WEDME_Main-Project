<?php
$con=mysqli_connect("localhost","root","","matrimony");

 
 
 function autoid($tablename,$field)
{
	
	$con=mysqli_connect("localhost","root","","matrimony");

//Auto generate next id in the screen.

//Query to get the highest value in table

$sql="select max($field) as mid from $tablename";

$data=mysqli_query($con,$sql);
$id=0;
while($row=mysqli_fetch_array($data))
{
 $id=$row['mid'];
}

$id=$id+1;
return $id;

	
}
 
 ?>