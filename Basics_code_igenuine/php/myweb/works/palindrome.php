<?php
function palinNum($num)
{
$rev=0;
$num2=$num;
		while($num2!=0)
		{
			$d=$num2%10;
			$rev=($rev*10)+$d;
			$num2=(int)($num2/10);
		}
		if($rev===$num)
		{
			echo"$num is palindrome";
		}
		else
		{
			echo"$num is not a palindrome";
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
<form method="post" action="palindrome.php">
Enter the number to find palindrome or not :<br>
<input type="text" name="num"size="4"/><br>
<input type="submit" name="submit"value="Submit"/><br>
</form>
<?php
}
else
{
	$num1=(int)$_POST['num'];
	 palinNum($num1); 
	
}
?>