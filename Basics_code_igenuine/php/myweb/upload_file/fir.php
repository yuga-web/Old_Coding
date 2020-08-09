<html>
<head>
	<meta charset="utf-8"/>
	<title>Blob file</title>
	</head>
<body>
	<?php
	$db=new PDO("mysql:host=localhost;dbname=kin","root","");
	if(isset($_POST['btn']))
	{
		$name=$_FILES['myfile']['name'];
		$type=$_FILES['myfile']['type'];
		$data=file_get_contents($_FILES['myfile']['tmp_name']);
		$stmt=$db->prepare("insert into img values('',?,?,?)");
		$stmt->bindParam(1,$name);
		$stmt->bindParam(2,$type);
		$stmt->bindParam(3,$data);
		$stmt->execute();
	}
	?>
	<form method="post" enctype="multipart/form-data">
		<input type="file" name="myfile"/>
		<button name="btn">upload</button>
	</form>
	<p></p>
	<ol>
		<?php
		$stmt=$db->prepare("select * from img");
		$stmt->execute();
		while($row=$stmt->fetch())
		{
			echo"<li><a target='_blank' href='view.php?id=".$row['id']."'>".$row['name']."</a><br>
			<embed src='data:".$row['mime'].";base64,".base64_encode($row['data'])."'width='200' height='200'/></li>";
		}
		?>
	</ol>
</body>
</html>