<?php
$mysqli=new mysqli("localhost","root","","yug"); 
if($mysqli === false){
	die("Error:Could not connect.".mysqli_connect_error());
}
$sql="select username from log";
if($result=$mysqli->query($sql)){
	if($result->num_rows>0){
		while($row=$result->fetch_array()){
	
			echo $row[0]."<br>";
		}
		$result->close();
	}
	else{
		echo"No record matching your query are found.";
	}
}
else{
	echo"Eror:Could not execute $sql.".$mysqli->error;
}
$mysqli->close();
?>