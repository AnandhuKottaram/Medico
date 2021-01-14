<?php
session_start();
include('include/config.php');
date_default_timezone_set('Asia/Kolkata');
session_unset();

unset($_SESSION['dname']);

$_SESSION['errmsg']="You have successfully logout";


header("location:dlogin.php");
?>

