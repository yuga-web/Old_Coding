<?php
		
	require"connect.php";
	
		$email=$_POST['name'];
		$pass=$_POST['pass'];

	
	?>
	<?php
	$sql=("select * from user_login where email='$email',password='$pass'");
	$result=$link->query($sql);
    $row=$result->fetch_array();
                   if($row['email']==$email && $row['password']==$pass)
                   {
								if(isset($_POST['remember']))
								{
									setcookie('email',$email,time()+60*60*7);
								}
								session_start();
								$_SESSION['email']=$email;
								header("location:'welcome.php'");
								
					}	
					else
					{
						echo"ijnjgiy";
						// header("location:'login.php'");
					}
?>