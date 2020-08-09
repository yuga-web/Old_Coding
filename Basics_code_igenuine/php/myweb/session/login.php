<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<style type="text/css">
		table
		{
			border:solid grey 2px;
			margin-top: 100px;
			border-radius: 5px;
			padding: 10px;
		}
		th
		{
			text-align: right;
		}
		h3
		{
			text-align: center;
		}
	</style>
</head>
<body>
	<table cellspacing="10"cellpadding="5"align="center">
		<h3>Login with sesssion and cookies</h3>
		<form method="post"action="validate1.php">
			<tr>
				<th>Email</th>
				<td><input type="email" name="email"></td>
			</tr>
			<tr>
				<th>Password</th>
				<td><input type="password" name="pass"></td>
			</tr>
			<tr>
				<td colspan="2"align="center"><input type="checkbox" name="remember"value="1">Remember me</td>
			</tr>
			<tr>
				<td colspan="2"align="right"><input type="submit" name="submit"value="Login"></td>
			</tr>
		</form>
	</table>

</body>
</html>
<?php
if(isset($_COOKIE['email']) && isset($_COOKIE['pass']))
{
	$email=$_COOKIE['email'];
	$pass=$_COOKIE['pass'];
	echo "<script>
			document.getElementById('email').value='$email';
			document.getElementById('pass').value='$pass';
			</script>";
}



?>