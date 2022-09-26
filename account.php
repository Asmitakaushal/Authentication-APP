<?php 

session_start();

if (isset($_SESSION['username'])) {

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="profileStyle.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>My Account</title>
   </head>
   <body>
    <div class ="container">
      <h1>Account Summary</h1>
      <div class ="head">
        Hello, <?php echo $_SESSION['username']; ?>
        <a href="logout.php">Logout</a>
      </div>
      <br>
      <br>
      <div class ="userInfo">
        <span class="details">Name : <?php echo $_SESSION['fullname']; ?></span>
        <span class="details">Email : <?php echo $_SESSION['email']; ?></span>
        <span class="details">Phone : <?php echo $_SESSION['phone']; ?></span>
        <span class="details">Gender : <?php echo $_SESSION['gender']; ?></span>
      </div>
    </div>
   </body>
</html>
<?php
}?>