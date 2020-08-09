
<?php
function isPrime($n)
	{
		$count=0;
		for($i=1;$i<=$n;$i++)
		{
			if($n%$i==0)
			{
				$count++;
			}	
		}
	return $count;	
	}
?>
<html>
<head></head>
<body>
<?php
if(!isset($_POST['submit']))
{
?>
<form method="post" action="prime.php">
Enter the number :<br>
<input type="text" name="num"size="4"/><br>
<input type="submit" name="submit"value="Submit"/><br>
</form>
<?php
}
else
{
	$no=(int)$_POST['num'];
$flag=isPrime($no); 
if($flag==2)
		{
			echo $no." is Prime";
		}
		else
		{
			echo $no." is not Prime";	
		}
}
?>