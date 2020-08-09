<?php
function checkEmail($email)
{

	if(filter_var($email,FILTER_VALIDATE_EMAIL))
	{
		echo"$email is valid";
	}
	else
	{
		echo "$email is not valid";
	}
}
?>
<html>
<head>
</head>
<body>
<h2>Email</h2>
<?php
if(!isset($_POST['submit']))
{
?>
	<form  method="post" action="email.php">
	Enter the number:<br/><br/>
	<input type="email" name="email" placeholder="Enter the email address" size="20"/>

	<input type="submit" name="submit"  value="Submit"/>
	</form>
<?php	
}
else
{
	$email=$_POST['email'];
	echo checkEmail($email);
	
}
?>
</body>
</html>