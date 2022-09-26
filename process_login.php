<?php

session_start();
include('includes/config.php');
$pass_error="";
if(isset($_POST['submit-login']))
{
       
        $username = $_REQUEST['username'];
        $username = mysqli_real_escape_string($conn, $username);
        $password=$_REQUEST['pass'];
        $password = mysqli_real_escape_string($conn, $password);
        $query = "SELECT * from users where username ='$username' AND passwrd='$password'";
        $result = mysqli_query($conn,$query)or die(mysqli_connect_error());
        $row = mysqli_fetch_assoc($result);
        if(mysqli_num_rows($result) == 1)
        {
            echo "<script>alert('User successfully logged in')</script> ";
            $_SESSION['username']=$username;
            $_SESSION['fullname']=$row['fullname'];
            $_SESSION['gender']=$row['gender'];
            $_SESSION['email']=$row['email'];
            $_SESSION['phone']=$row['phone'];
            header("Location:account.php");
        }
        else
        {
            $pass_error = "Incorrect username or password";
            
        }
}

?>
