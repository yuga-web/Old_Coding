<?php
function leapOrnot($yr)
{
		if($yr%4==0)
		{
			echo $yr." is leap year";
		}
		else
		{
			echo $yr." is not leap year";	
		}
}
?>
<html>
<head></head>
<body>
<?php
if(!isset($_POST['submit']))
{
?>
<form method="post" action="leap.php">
Enter the year :<br>
<input type="text" name="year"size="4"/><br>
<input type="submit" name="submit"value="Submit"/><br>
</form>
<?php
}
else
{
	$yr=(int)$_POST['year'];
	leapOrnot($yr); 
	
}
?>