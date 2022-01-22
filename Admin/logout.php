<?php session_start(); 
unset($_SESSION['aid']);
unset($_SESSION['aname']);
unset($_SESSION['apassword']);
header("Location:admin_login.php");
?>
