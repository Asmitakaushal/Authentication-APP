<?php
session_start();
include('includes/config.php');

$fullname=$_POST['fullname'];
$username=$_POST['username'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['pass'];
$confirmpassword=$_POST['passs'];
$genders=$_POST['gen'];
if (!empty($fullname) || !empty($username) || !empty($password) || !empty($confirmpassword) || !empty($email) || !empty($phone)|| !empty($gender)) 
{
    if($password==$confirmpassword)
    {
        $value_name = "SELECT * FROM `register` WHERE username='$username'";
        $value_mail = "SELECT * FROM `register` WHERE email='$email'";
        $value_pass = "SELECT * FROM `register` WHERE passs='$confirmpassword'";
        $result_name = mysqli_query($conn, $value_name);
        $result_mail = mysqli_query($conn, $value_mail);
        if (mysqli_num_rows($result_name) > 0) {
            echo "<script>alert('Sorry...the entered username already exists')</script>";
        }  
        else if(mysqli_num_rows($result_mail) > 0)
        {
            $email_error = 'Sorry...the entered email already exists';
        }
        else{
            $sql = "INSERT INTO users(fullname,username,passwrd,email,phone,gender) 
            VALUES ('$fullname','$username','$password','$email','$phone','$gender')";
            if ($conn->query($sql) == TRUE) {
            echo "<script> alert('New record created successfully')</script>";
            //header("location:account.php");
            } 
            else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }    
        }
    }
    else
        $value_pass = 'The entered password doesnt match';
         
}
$conn->close();
?>
