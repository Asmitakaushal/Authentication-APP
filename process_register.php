<?php
session_start();
include('includes/config.php');

$fullname="";
$username="";
$email="";
$phone="";
$password="";
$confirmpassword="";
$genders="";

if(isset($_POST['register'])) 
{
$fullname=$_POST['fullname'];
$username=$_POST['username'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['pass'];
$confirmpassword=$_POST['passs'];
$genders=$_POST['gen'];


$value_name = "SELECT * FROM users WHERE username='$username'";
$value_mail = "SELECT * FROM users WHERE email='$email'";
$value_Cpass = $confirmpassword;
$value_pass = $password;
$result_name = mysqli_query($conn, $value_name);
$result_mail = mysqli_query($conn, $value_mail);
   
if (!empty($fullname) || !empty($username) || !empty($password) || !empty($confirmpassword) || !empty($email) || !empty($phone)|| !empty($gender)) 
{
    if($value_pass==$value_Cpass)
    {
        
        if (mysqli_num_rows($result_name) > 0) {
            $name_error = "Sorry, the username is already taken";
        }  
        else if(mysqli_num_rows($result_mail) > 0)
        {
            $email_error = "Sorry...the entered email already exists";
        }
        else{
            $sql = "INSERT INTO users(fullname,username,passwrd,email,phone,gender) 
            VALUES ('$fullname','$username','$password','$email','$phone','$genders')";
            if ($conn->query($sql) == TRUE) {
            echo "<script> alert('New record created successfully')</script>";
            
            } 
            else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }    
        }
    }
    else
        $pass_error = 'The entered password doesnt match';
     
}}
$conn->close();

?>
