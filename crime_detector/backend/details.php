<?php
//login
/*ini_set('display_errors',1); 
error_reporting(E_ALL);*/
session_start();
require 'connection.php';
require 'login.php';

 if ($user['email']==$email && $user['password']==$password) {
   $_SESSION['firstname'] = $user['firstname'];
   $_SESSION['lastname'] = $user['lastname'];
   $_SESSION['email'] = $user['email'];
   
    header("Location: /crime_detector/details.php");
  }else{
    header("Location: /crime_detector/login.php");  }
  
  ?>