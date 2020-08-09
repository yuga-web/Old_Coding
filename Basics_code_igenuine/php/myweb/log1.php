<html>
<head>
<title>Login Page
</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="frm">
<form method="POST">
<p>
<label>Username:</label>
<input type="text" id="user" name="user"/>
</p>
<p>
<label>Password:</label>
<input type="password" id="pass" name="pass"/>
</p>
<p>
<input type="submit" id="btn" name="submit"/>
</p>
</form>
</div>
</body>
</html>
<?php
   /* mysql_connect("localhost","root"," ");
    mysql_selectdb("yug");*/
	$user='root';
$pass='';
$db='yug';
$db=new mysqli('localhost',$user,$pass,$db)or die("unable to connect");
echo "Greak work its connected";
	
    if(isset($_POST['submit'])){
	     $un=$_POST['user'];
         $pd=$_POST['pass'];
	     $sql=mysql_db_query("select password from user where username='$un' ");
               if($row=mysql_fetch_array($sql)){
                          if($pd=$row['password']){
	                         header("location:home.html");
	                         exit();
                             }
                             else
                            	echo "invalid username";
			   }
			   else
				   echo "Invalid Username";
	}	   

?>