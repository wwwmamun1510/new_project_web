<?php 
session_start();
unset($_SESSION['login']);
unset($_SESSION['login_complete']);
unset($_SESSION['login_name']);
$_SESSION['logout'] = 'Logout Successfully';
header('location:login.php');
?>
   <!-- if(password_verify($password, $after_assoc2['password'])) {
        $_SESSION['login_complete'] = 'Login successfully';
        $_SESSION['login'] = 'Login successfully';
        $_SESSION['login_msg']= 'Login successfully';
        $_SESSION['login_name'] -->