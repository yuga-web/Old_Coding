<html>
<head>
<title>Login Page
</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div id="frm">
<form action="process.php" method="POST">
<p>
<label>Username:</label>
<input type="text" id="user" name="user"/>
</p>
<p>
<label>Password:</label>
<input type="password" id="pass" name="pass"/>
</p>
<p>
<input type="submit" id="btn" value="Login"/>
</p>
<p>
	New user ?<a href="new_user.php">Sign up</a>
</p>

</form>
</div>
</body>
</html>