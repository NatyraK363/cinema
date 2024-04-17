<?php

session_start();
include 'db.php';

if(isset($_SESSION['loginsuccesfull'])){}
   else{
    echo "<script>alert('You Are not Logged in');window.location.href='login.php';</script>";
}

include 'header.php';
include 'ft.php';

?>
