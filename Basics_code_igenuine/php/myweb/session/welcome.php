<?php
session_start();
echo "Welcome  ".$_SESSION['email'];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="get"action="welcome.php">
<input type="submit" name="logout"value="logout">
</form>
</body>
</html>
<?php
if(isset($_GET['logout']))
{
	session_start();
	session_destroy();
	header("location:login.php");
}
?>