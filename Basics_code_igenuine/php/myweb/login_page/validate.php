<?php
$email=$_POST["users_email"];
$pass=$_POST["users_pass"];
$con=new mysqli("localhost","root","","yug");
if($con==false)
{
	die('Connection Failed'.mysqli_connect_error);
}
$sql=('select users_email,users_pass from u1 where users_email='.$email.'');
	$result=mysqli_query($sql);
    $row=mysqli_fetch_array($result);
	if($row["users_email"]==$email && $row["users_pass"]==$pass)
		echo"You are a validate user";
	else
		echo"Youu are not validate user...Please try again";
?>