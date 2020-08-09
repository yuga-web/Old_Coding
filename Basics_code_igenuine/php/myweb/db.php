<html>
<head>
<title>
</title>
</head>
<body>
<?php
$user='root';
$pass='';
$db='userlogin';
$db=new mysqli('localhost',$user,$pass,$db)or die("unable to connect");
echo "Greak work its connected";
?>
</body>
</html>