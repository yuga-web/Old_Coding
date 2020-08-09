<html>
<head></head>
<body>
<?php
if(!isset($_POST['submit']))
{
?>
<form method="post" action="equalstr.php">
Enter the Strings :<br>
<input type="text" name="str_1"size="4"/><br>
<input type="text" name="str_2"size="4"/><br>
<input type="submit" name="submit"value="Submit"/><br>
</form>
<?php
}
else
{
	$str1=$_POST['str_1'];
	$str2=$_POST['str_2'];
	if($str1==$str2)
	{
		echo "Strings are equal";
	}
	else
	{
		echo "Strings are not equal";
	}
	
	
}
?>
</body>
</html>