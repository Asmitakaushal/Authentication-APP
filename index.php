<?php
session_start();
error_reporting(0);
include('includes/config.php');
include('process_register.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Registration Form</title>
   </head>
   
<body>
   
  <div class="container">
  <div class="title">Registration</div>

    <div class="content">
      <form id = "register_form" action="#" method="POST">
        <div class="user-details">
          
          <div class="input-box">
           <span class="details">Full Name</span>
           <input type="text" name ="fullname" placeholder="Enter your name" value="<?php echo $fullname; ?>"required>
          </div>
          <div class="input-box">
            <span class="details">Username</span>    
            <div
              <?php if(isset($name_error)):?>
                class ="form-error"
              <?php endif ?>
            >   
              <input type="text" name="username" id="username" placeholder="Enter your username" value="<?php echo $username; ?>"  required>
              <?php if(isset($name_error)): ?>
                <?php echo $name_error; ?>
              <?php endif ?>
            </div>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <div
              <?php if(isset($email_error)):?>
                class ="form-error"
              <?php endif ?>
            >   
            <input type="email" name="email" id="email" placeholder="Enter your email" title= "Eg. example@mail.com" value="<?php echo $email; ?>" required>
            <?php if(isset($email_error)): ?>
                <?php echo $email_error; ?>
              <?php endif ?>
            </div>
            <span id ="text"></span>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="tel" name="phone" placeholder="Enter your number" pattern="[0-9]{10}" title="Phone number must contain 10 digits" value="<?php echo $phone; ?>"required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="pass" placeholder="Enter your password" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <div
              <?php if(isset($pass_error)):?>
                class ="form-error"
              <?php endif ?>
            > 
            <input type="password" name ="passs" placeholder="Confirm your password" required>
            <?php if(isset($pass_error)): ?>
                <?php echo $pass_error; ?>
              <?php endif ?>
            </div>
          </div>
          
        </div>
        <div class="gender-details">
          <input type="radio" name="gen" id="dot-1" value="Male">
          <input type="radio" name="gen" id="dot-2" value ="Female">
          <input type="radio" name="gen" id="dot-3" value ="Prefer not to say">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1" >
            <span class="dot one"></span>
            <span class="gen">Male</span>
          </label>
          <label for="dot-2" >
            <span class="dot two"></span>
            <span class="gend">Female</span>
          </label>
          <label for="dot-3" >
            <span class="dot three"></span>
            <span class="gen">Prefer not to say</span>
          </label>
          </div>
        </div>
        <div class="button">
          <input type="submit" name="register" value="Register">
        </div>
      </form>

    </div>
  </div>
</body>
</html>