<?php 
$con=mysqli_connect('localhost','root','');
if(!$con)
{
	die("Database connection failed".mysqli_error($con));
}
else
{
	echo "Connected!!!!!!<br>";
}
$select_db=mysqli_select_db($con,'mash');
if(!$select_db)
{
	die("Database selection Failed".mysqli_error($con));
}
else
{
	echo "Database selected .........";
}
?>