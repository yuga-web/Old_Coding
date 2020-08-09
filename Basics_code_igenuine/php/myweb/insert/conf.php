<?php
/* Attempt to connect to MySQL database */
$mysqli = new mysqli('localhost','root','','mash');
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
?>
<?php
$firstname =$_POST['first'];
$lastname =$_POST['last'];
$username =$_POST['user'];
$password =$_POST['pass'];
$c_password =$_POST['con_pass'];
 $email=$_POST['mail'];

  if($firstname ==  "" OR $lastname ==  "" OR $username ==  "" OR $email ==  "" OR $password ==  "" OR $c_password ==  ""){
    $msg="<script type='text/javascript'>alert('Fields are required!')</script>";
    
        }

        
        //length validatoin

        //name length validation
       else if(strlen($firstname) < 3){
            echo "<div class='alert alert-danger'>* Name can not be less than 3 character!</div>";
        
        }elseif(strlen($firstname) > 15){
            echo"<div class='alert alert-danger'>* Name can not be more than 15 characters</div>";
        
        }

        //username validation
       else if(strlen($username) < 5){
            echo "<div class='alert alert-danger'>* Username can not be more than 5 characters</div>";
            
        }elseif(strlen($username) > 15){
            echo"<div class='alert alert-danger'>* Username can not be more than 15 characters</div>";
        
        }

        //password and confirm password length validation
       else  if(strlen($password) < 5 && strlen($c_password) < 5){
            echo "<div class='alert alert-danger'>* Password can not be less than 5 characters</div>";
            
        }elseif(strlen($password) > 30 && strlen($c_password) > 30){
            echo"<div class='alert alert-danger'>* Password can not be more than 15 characters</div>";
        
        }

        //passwords equality validation
       else if($password != $c_password){
            echo"<div class='alert alert-danger'>* Password are not the same</div>";
            
        }


        //email vaidation
      else  if(filter_var($email, FILTER_VALIDATE_EMAIL) == false){
                echo"<div class='alert alert-danger'>* Email is not valid!</div>";
    
        }


        // email existence validation
        if(checkEmail($email)== true){
            echo "<div class='alert alert-danger'>* Email already exist!</div>";
            
        }

        //email existence check before account registering
        function checkEmail($email)
        {

            $query = "SELECT * FROM user_login WHERE email = '$email'";
            $st = $mysqli->prepare($query);
            $st->bind_param('s', $email);
            $st->execute();

            if($st->rowCount() > 0){
                return true;
            }else{
                return false;
            }
        }
           
    
     
        	 $sql = "INSERT INTO user_login(firstname,lastname,username, email,password) VALUES (?,?,?,?,?)";
                 
                if($stmt = $mysqli->prepare($sql))
                {
                    // Bind variables to the prepared statement as parameters
                    $stmt->bind_param("sssss", $firstname,$lastname,$username, $email,$password);
                    if($stmt->execute())
                    {
                       header("Location:index.php");
                    } else{
                        echo "Something went wrong. Please try again later.";
                    }
                }
                 
                     // Close statement
                         $stmt->close();
    
        
    // Close connection
    $mysqli->close();

?>
