<?php
	function fibo($n)
	{
		$t1=0;
		$t2=1;
		for($i=1;$i<=$n;$i++)
		{
			echo $t1." ";
			$nxt=$t1+$t2;
			$t1=$t2;
			$t2=$nxt;
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
<form method="post" action="fibo.php">
Enter the count for fibonacci Series :<br>
<input type="text" name="count"size="4"/><br>
<input type="submit" name="submit"value="Submit"/><br>
</form>
<?php
}
else
{
	$num=(int)$_POST['count'];
	echo fibo($num); 
	
}
?>