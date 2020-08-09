<html>
<head>
<title>Login Page
</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="frm">
<form action="validate.php" method="POST">
<p>
<label for="users_email">Email:</label>
<input type="text" id="users_email" name="users_email"/>
</p>
<p>
<label for ="users_pass">Password:</label>
<input type="password" id="users_pass" name="users_pass"/>
</p>
<p>
<input type="submit" id="btn" value="Submit"/>
</p>
<p>
<input type="reset" id="btn" value="Reset"/>
</p>
</form>
</div>
</body>
</html>