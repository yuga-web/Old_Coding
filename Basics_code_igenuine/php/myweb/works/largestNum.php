
<html>
<head></head>
<body>
<?php
if(!isset($_POST['submit']))
{
?>
<form method="post" action="largestNum.php">
Enter the number to sort:<br>
<input type="text" name="num"size="10"/><br>
<input type="submit" name="submit"value="Submit"/><br>
</form>
<?php
}
else
{
	$numStr=$_POST['num'];
	$numArr=explode(',',$_POST['num']);
	rsort($numArr);
	echo"The given numbers: ".$numStr."<br>";
	echo"After sorting: ".implode($numArr,',')."<br>";
	echo"The second largest number in the given numbers: ".$numArr[1];
}
?>