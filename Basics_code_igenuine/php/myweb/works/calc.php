<?php
class calculator
{
	private $num1;
	private $num2;
	private $operator;
	public function getNum1($a)
	{
		$this->num1=$a;
		return $this->num1;
	}
	public function getNum2($b)
	{
		$this->num2=$b;
		return $this->num2;
	}
	public function getOperator($operat)
	{
		$this->operator=$operat;
		return $this->operator;
	}
	public function performArith()
	{
		if($this->operator=='+')
		{
			return $this->num1+$this->num2;
		}
		else if($this->operator=='-')
		{
			return $this->num1-$this->num2;
		}
		else if($this->operator=='*')
		{
			return $this->num1*$this->num2;
		}
		else if($this->operator=='/')
		{
			return $this->num1/$this->num2;
		}
		else
		{
			return -1;
		}
	}
}
?>
<html>
<head>
<title>Calculator</title>
<style>
body
{
background:powderblue;
}
#btn
{
border:solid gray 1px;
	width:20%;
	border-radius:5px;
	margin:100px auto;
	background:yellow;
	padding:50px
}

#frm{
	color:#fff;
	background:#337ab7;
	padding:5px;
	margin-left:69% ;
}
</style>
</head>
<body>
<h2>Calculator</h2>
<h3>Arithmetic Operation</h3>
<?php
if(!isset($_POST['submit']))
{
?>
	<form  id="btn" method="post" action="calc.php">
	Enter two integer:<br/><br/>
	<input type="text" name="num_1" placeholder="Enter the number1" size="20"/>
	<select name="operation">
	<option value="+">+</option>
	<option value="-">-</option>
	<option value="*">*</option>
	<option value="/">/</option>
	</select>
	<input type="text" name="num_2" placeholder="Enter the number2"size="20"/><br>
	<input type="submit" name="submit" id="frm" value="Submit"/>
	</form>
<?php	
}
else
{
	$no1=(int)$_POST['num_1'];
	$no2=(int)$_POST['num_2'];
	$op=$_POST['operation'];
	$calc=new calculator();
	echo "The number 1: ".$calc->getNum1($no1)."<br>";
	echo "The number 2: ".$calc->getNum2($no2)."<br>";
	echo "The result of operation ".$calc->getOperator($op)." is ".$calc->performArith()."<br>";
	
}
?>
</body>
</html>
	