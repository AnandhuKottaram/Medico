<?php
session_start();
include('include/config.php');
date_default_timezone_set('Asia/Kolkata');
session_unset();

unset($_SESSION['username']);

$_SESSION['errmsg']="You have successfully logout";


header("location:../index.php");
?>

