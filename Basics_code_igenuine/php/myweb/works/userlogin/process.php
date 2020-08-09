<html>
<head>
<style>
#dm
{
	background:#eee;
}
#sn
{
	border:solid gray 1px;
	width:20%;
	border-radius:5px;
	margin:100px auto;
	background:white;
	padding:50px;
}
</style>
</head>
<body id="dm">
<?php
//get values from form in login.php
$username=$_POST['user'];
$password=$_POST['pass'];
$mysqli=new mysqli("localhost","root","","mash"); 
if($mysqli === false){
	die("Error:Could not connect.".mysqli_connect_error());
}
//Quey the database for user
$sql=("select * from user_login where username='$username' and password='$password'");
$result=$mysqli->query($sql);
$row=$result->fetch_array();
	if($row["username"]==$username && $row["password"]==$password)
	{
	echo'<div id="sn">You are a validate user</div>';
	}
	else
	{
		echo'<div id="sn">Youu are not validate user...Please try again</div>';
	}
$result->close();
$mysqli->close();

?>
</body>
</html>