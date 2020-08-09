 <?php
function armstrongNo($num1)
{
	$sum=0;
	$num2=$num1;
		$len=count(str_split($num1));
		while($num2!=0)
		{
			$d=$num2%10;
			$sum+=(int)pow($d,$len);
			$num2=$num2/10;
		}
		if($sum==$num1)
		{
			echo $num1." is Amstrong";
		}
		else
		{
			echo $num1." is not Amstrong";
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
<form method="post" action="ams.php">
Enter the number :<br>
<input type="text" name="num"size="4"/><br>
<input type="submit" name="submit"value="Submit"/><br>
</form>
<?php
}
	else
	{
	$num=(int)$_POST['num'];
	armstrongNo($num); 
	}
?>
</body>
</html>