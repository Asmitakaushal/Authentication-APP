<?php
session_start();
error_reporting(0);
include('includes/config.php');
include('process_login.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login</title>
   </head>
   
<body>
   
  <div class="container">
  <div class="title">Login Page</div>

    <div class="content">
      <form id = "login_form" action="#" method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Username</span>    
            <input type="text" name="username" id="username" placeholder="Enter your username" required>
          </div>
          <br>
          <div class="input-box">
            <span class="details">Password</span>
            <div
              <?php if(isset($pass_error)):?>
                class ="form-error"
              <?php endif ?>
            > 
            <input type="password" name="pass" placeholder="Enter your password" required>
            
            <?php if(isset($pass_error)): ?>
                <?php echo $pass_error; ?>
              <?php endif ?> 
        </div>
        </div>
        <div class="button">
          <input type="submit" name="submit-login" value="Login">
        </div>
        <div class="info">
            Don't have an account? <a href ="index.php">Register here</a>
        </div>
    </form>
    </div>
  </div>
</body>
</html>