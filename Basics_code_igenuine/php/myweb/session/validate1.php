<?php
//get values from form in login.php
$email=$_POST['email'];
$password=$_POST['pass'];
require"connect.php";
// $mysqli=new mysqli("localhost","root","","mash"); 
// if($mysqli === false){
// 	die("Error:Could not connect.".mysqli_connect_error());
// }
//Quey the database for user
$sql=("select * from user_login where email='$email' and password='$password'");
$result=$link->query($sql);
$row=$result->fetch_array();
	if($row["email"]==$email && $row["password"]==$password)
	{
	if(isset($_POST['remember']))
								{
									setcookie('email',$email,time()+60*60*7);
									setcookie('pass',$password,time()+60*60*7);

								}
								session_start();
								$_SESSION['email']=$email;
								header("location:welcome.php");
	}
	else
	{
		echo'<div id="sn">Youu are not validate user...Please try again</div>';
	}
$result->close();
$link->close();

?>