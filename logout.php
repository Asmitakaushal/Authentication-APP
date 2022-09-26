<?php 
echo "<script>alert('User successfully logged out')</script> ";
session_start();

session_unset();

session_destroy();

header("Location: home.html");

?>