<?php
	$db=new PDO("mysql:host=localhost;dbname=kin","root","");
	$id=isset($_GET['id'])?$_GET['id']:"";
	$stmt=$db->prepare("select * from img where id=?");
	$stmt->bindParam(1,$id);
	$stmt->execute();
	$row=$stmt->fetch();
	header('Content-Type:',$row['mime']);
	echo $row['data'];
	?>