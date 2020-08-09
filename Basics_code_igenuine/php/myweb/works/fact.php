<?php
function factorial($a)
{ $fact=1;
	if($a<0)
	{
		echo "Error,Factorial of negative number doesn't exist....";
		return -1;
	}
		else
		{
			for($i=1;$i<=$a;++$i)
			{
				$fact*=$i;
			}
			return $fact;
		}
		
}
?>
<html>
<head>
</head>
<body>
<h2>Factorial</h2>
<?php
if(!isset($_POST['submit']))
{
?>
	<form  id="btn" method="post" action="fact.php">
	Enter the number:<br/><br/>
	<input type="text" name="num_1" placeholder="Enter the number" size="20"/>

	<input type="submit" name="submit"  value="Submit"/>
	</form>
<?php	
}
else
{
	$num=(int)$_POST['num_1'];
	echo "The factorial of the number $num is ".factorial($num);
	
}
?>
</body>
</html>