<?php

$db_server="localhost";
$user_name="root";
$password="";
$db_name="medico";

$con= mysqli_connect ($db_server,$user_name,$password,$db_name);

if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>
